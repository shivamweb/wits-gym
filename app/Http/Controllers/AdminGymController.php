<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminGymController extends Controller
{

    private $gym;
    public function __construct(
        Gym $gym
    ) {
        $this->gym = $gym;
    }

    public function viewGymInfo()
    {
        return view('GymOwner.gymInfo');
    }

    public function addGymDetailsByAdmin(Request $request)
    {
        try {
            Validator::make($request->all(), []);
            $data = $request->all();
            $imagePath = null;
            if ($request->hasFile('image')) {
                $gymImage = $request->file('image');
                $filename = time() . '_' . $gymImage->getClientOriginalName();
                $imagePath = 'gymProfile_images/' . $filename;
                $gymImage->move(public_path('gymProfile_images/'), $filename);
            }
            $this->gym->addGym($data, $imagePath);
            return back()->with('status', 'success')->with('message', 'Gym Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[GymController][addGym]Error adding : ' . 'Request=' . $request);
            return back()->with('status', 'error')->with('message', 'Gym Not Added ');
        }
    }
}
