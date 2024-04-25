<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class GymDetailController extends Controller
{

    private $gym;
    public function __construct(
        Gym $gym
    ) {
        $this->gym = $gym;
    }

    public function viewGymInfo(){
        return view('GymOwner.clubInfo');
    }

    public function addGym(Request $request)
    {

        try {
            Validator::make($request->all(),[


            ]);
            $this->gym->addGym($request->all());

            return back()->with('status', 'success')->with('message', 'Gym Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[GymController][addGym]Error adding : ' . 'Request=' . $request);
            return back()->with('status', 'error')->with('message', 'Gym Not Added ');
        }
    }
}
