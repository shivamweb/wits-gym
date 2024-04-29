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
}
