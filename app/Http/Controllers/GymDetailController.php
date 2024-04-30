<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Traits\SessionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymDetailController extends Controller
{
    use SessionTrait;
    protected $gym;
    public function __construct(Gym $gym)
    {
        $this->gym = $gym;
    }

    public function showDashboard(Request $request)
    {
        $gymSession = $this->getGymSession();
        $uuid = $gymSession['uuid'];
        $gymDetail = $this->gym->where('uuid', $uuid)->first();
        Log::error('[GymDetailController][showDashboard] user image null : ' . empty($gymDetail->image));
        Log::error('[GymDetailController][showDashboard] user image src : ' . $gymDetail->image);
        return view('GymOwner.dashboard', compact('gymDetail'));
    }
    public function showGymProfile(Request $request)
    {
        $gymSession = $this->getGymSession();
        // dd($gymSession);
        $uuid = $gymSession['uuid'];
        $gymDetail = $this->gym->where('uuid', $uuid)->first();

        return view('GymOwner.userProfile', compact('gymDetail'));
    }
    public function gymLogin(Request $request)
    {
        try {
            $credentials = $request->all();
            $school = $this->gym->where([
                'email' => $credentials['email'],
                'password' => $credentials['password']
            ])->first();

            if (!$school) {
                session()->flush();
                return redirect()->back()->with('status', 'error')->with('message', 'Invalid credential');
            }
            $this->storeGymSession($school);
            return redirect('/dashboard')->with('status', 'success')->with('message', 'login successfully');
        } catch (\Exception $e) {
            Log::error('[GymDetailController][gymLogin] Error Login Gym ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect()->back()->with('status', 'error')->with('message', 'Invalid credentials or account is not active');
        }
    }

    public function logouGymUser()
    {
        session()->flush();
        return redirect()->route('login');
    }

    public function registerGym(Request $request)
    {
        try {
            // dd($request->all());

            $validatedData = $request->validate([
                'username' => 'required',
                'gym_name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
            $gymUser = $this->gym->registerGymBySelf($validatedData);
            if ($gymUser) {
                return redirect()->route('login')->with('success', 'Gym Registered Succesfully.');
            }
            return redirect('/register')->with('status', 'error')->with('message', 'error in register gym.');
        } catch (\Exception $e) {
            Log::error('[GymDetailController][registerGym] Error register gym ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect('/register')->with('status', 'error')->with('message', 'error in register gym.');
        }
    }

    public function updateGym(Request $request)
    {
        try {
            // dd($request->all());

            $validatedData = $request->validate([
                "username" => 'required',
                "email" => 'required',
                "password" => 'required',
                "gym_name" => 'required',
                "address" => 'required',
                "city" => 'required',
                "state" => 'required',
                "country" => 'required',
                "web_link" => 'required',
                "gym_type" => 'required',
                "terms_and_conditions" => 'nullable',
                "facebook" => 'nullable',
                "instagram" => 'nullable'
            ]);

            // dd($validatedData);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $gymImage = $request->file('image');
                $filename = time() . '_' . $gymImage->getClientOriginalName();
                $imagePath = 'gymProfile_images/' . $filename;
                $gymImage->move(public_path('gymProfile_images/'), $filename);
            }

            $isProfileUpdated = $this->gym->updateGym($validatedData, $imagePath);
            if ($isProfileUpdated) {
                return redirect()->route('showGymProfile')->with('status', 'success')->with('message', 'Gym profile updated succesfully.');
            }
            return redirect()->route('showGymProfile')->with('status', 'error')->with('message', 'error while updating gym.');
        } catch (\Exception $e) {
            Log::error('[GymDetailController][updateGym] Error updating gym ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect()->route('showGymProfile')->with('status', 'error')->with('message', 'error while updating gym.');
        }
    }
}
