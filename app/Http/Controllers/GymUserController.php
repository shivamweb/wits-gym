<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymUserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function addUserByGym(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'first_name' => 'required',
                'last_name'  => 'required',
                'email'      => 'required',
                'phone_no'   => 'required',
                'username'   => 'required',
                'password'   => 'required'
           
            ]);
            $imagePath=null;
            $data=$request->all();
            if ($request->hasFile('image')) {
                $userImage = $request->file('image');
                $filename = time() . '_' . $userImage->getClientOriginalName();
                $imagePath = 'user_images/' . $filename;
                $userImage->move(public_path('user_images/'), $filename);
            }
            
            $this->user->addUser($data,$imagePath);

            return back()->with('status', 'success')->with('message', 'User Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[GymUserController][addUserByGym]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'User Not Added ');
        }
    }
}