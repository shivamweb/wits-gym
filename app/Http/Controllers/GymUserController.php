<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\User;
use App\Traits\SessionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymUserController extends Controller
{
    use SessionTrait;
    protected $user;
    protected $gym;
    public function __construct(User $user, Gym $gym)
    {
        $this->user = $user;
        $this->gym = $gym;
    }

    public function listGymUser()
    {
        $gym_uuid = $this->getGymSession()['uuid'];
        $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;
        $users = $this->user->where('gym_id', $gymId)->get();

        return view('GymOwner.userList', compact('users'));
    }

    public function addUserByGym(Request $request)
    {
        try {
            $gym_uuid = $this->getGymSession()['uuid'];
            $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;

            $validatedData = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'phone_no' => 'required',
                'username' => 'required',
                'password' => 'required'

            ]);

            // dd($validatedData);
            $imagePath = null;
            $data = $request->all();
            if ($request->hasFile('image')) {
                $userImage = $request->file('image');
                $filename = time() . '_' . $userImage->getClientOriginalName();
                $imagePath = 'user_images/' . $filename;
                $userImage->move(public_path('user_images/'), $filename);
            }

            $this->user->addUser($validatedData, $imagePath, $gymId);

            return back()->with('status', 'success')->with('message', 'User Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[GymUserController][addUserByGym]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'User Not Added ');
        }
    }
}
