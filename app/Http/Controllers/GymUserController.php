<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\User;
use App\Models\UserWorkout;
use App\Models\UserDiet;
use App\Services\UserService;
use App\Traits\SessionTrait;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymUserController extends Controller
{
    use SessionTrait;
    protected $user;
    protected $gym;
    protected $workout;
    protected $diet;
    protected $userService;

    public function __construct(User $user, Gym $gym, UserWorkout $workout, UserDiet $diet, UserService $userService)
    {
        $this->user = $user;
        $this->gym = $gym;
        $this->workout = $workout;
        $this->diet = $diet;
        $this->userService = $userService;
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
             $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'phone_no' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required'

            ]);

            $gym_uuid = $this->getGymSession()['uuid'];
            $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;

            $this->userService->createUserAccount($request->all(), $gymId);
            

            return back()->with('status', 'success')->with('message', 'User Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[GymUserController][addUserByGym]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'User Not Added ');
        }
    }


    public function showUserProfile(Request $request)
    {
        $uuid = $request->input('uuid');
        $userDetail = $this->user->where('uuid', $uuid)->first();
        $workouts = $this->workout->all();
        $diets = $this->diet->all();
        // dd($userDetail);
        return view('GymOwner.User.userProfile', compact('userDetail','workouts','diets'));
    }

    public function updateUser(Request $request)
    {
        try {
            // dd($request->all());

            $validatedData = $request->validate([
                'uuid' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'phone_no' => 'required',
                'username' => 'required',
                'password' => 'required',
                'image' => 'nullable'
            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $gymImage = $request->file('image');
                $filename = time() . '_' . $gymImage->getClientOriginalName();
                $imagePath = 'gymProfile_images/' . $filename;
                $gymImage->move(public_path('gymProfile_images/'), $filename);
            }

            $isProfileUpdated = $this->user->updateUser($validatedData, $imagePath);



        if ($isProfileUpdated) {
            return redirect()->back()->with('status', 'success')->with('message', 'User profile and workout data updated successfully.');
        }

            if ($isProfileUpdated) {
                return redirect()->back()->with('status', 'success')->with('message', 'user profile updated succesfully.');
            }
            return redirect()->back()->with('status', 'error')->with('message', 'error while updating user.');
        } catch (\Exception $e) {
            Log::error('[GymDetailController][updateUser] Error updating user ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect()->back()->with('status', 'error')->with('message', 'error while updating user.');
        }
    }

    public function addUserWorkout(Request $request)
    {
        try {
            $validatedData = $request->validate([
                "user_id"      =>  'required',
                "exercise_name" =>  'required',
                "sets"          =>  'required|integer|min:1',
                "reps"          =>  'required|integer|min:1',
                "weight"        =>  'required|numeric|min:0',
                "notes"         =>  'required',
            ]);

            $this->workout->addWorkout($validatedData);

            return redirect()->back()->with('success', 'Workout data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymUserController][addUserWorkout] error " . $th->getMessage());
            return redirect()->back()->with('error', 'Failed to save workout data. Please try again.');
        }
    }


    public function addUserDiet(Request $request)
    {
        try {
            $validatedData = $request->validate([
                "user_id"      =>  'required',
                "meal_name" =>  'required',
                "calories"          =>  'required|integer|min:0',
                "protein"          =>  'required|integer|min:0',
                "carbs"        =>  'required|numeric|min:0',
                "fats"        =>  'required|numeric|min:0',
                "notes"        =>  'required',
            ]);

            $this->diet->addUserDiet($validatedData);

            return redirect()->back()->with('success', 'Diet data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymUserController][addUserDiet] error " . $th->getMessage());
            return redirect()->back()->with('error', 'Failed to save workout data. Please try again.');
        }
    }
}
