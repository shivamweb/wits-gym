<?php

namespace App\Http\Controllers;

use App\Models\UserBodyMeasurement;
use App\Traits\SessionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserBmiController extends Controller
{
    use SessionTrait;
    protected $userBodyMeasurement;


    public function __construct(UserBodyMeasurement $userBodyMeasurement)
    {
        $this->userBodyMeasurement = $userBodyMeasurement;
    }

    public function createUserBodyMeasurement(Request $request)
    {
        try {
            $validatedData = $request->validate([
                "user_id" => 'required',
                "chest" => 'required',
                "triceps" => 'required',
                "biceps" => 'required',
                "lats" => 'required',
                "shoulder" => 'required',
                "abs" => 'required',
                "forearms" => 'required',
                "traps" => 'required',
                "glutes" => 'required',
                "quads" => 'required',
                "hamstring" => 'required',
                "calves" => 'required'
            ]);

            $userId=$request->all()['user_id'];
            $this->userBodyMeasurement->createBodyMeasurement($validatedData,$userId);

            return redirect()->back()->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[UserBmiController][createUserBmi] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
