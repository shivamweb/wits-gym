<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Services\GymService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminGymController extends Controller
{

    private $gym;
    private $gymService;

    public function __construct(
        Gym $gym,
        GymService $gymService
    ) {
        $this->gym = $gym;
        $this->gymService = $gymService;
    }

    public function viewGymInfo()
    {
        return view('admin.gym.addGymInfo');
    }

    public function viewGymList()
    {
        $gymLists = $this->gym->get();
        return view('admin.gym.listGym', compact('gymLists'));
    }

    public function addGymDetailsByAdmin(Request $request)
    {
        try {
            Validator::make($request->all(), []);
            $this->gymService->createGymAccount($request->all());

            return back()->with('status', 'success')->with('message', 'Gym Added Succesfully');
        } catch (Exception $e) {
            Log::error('[GymController][addGym]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', $e->getMessage());
        }
    }

    // public function addTermsAndConditions(Request $request)
    // {
    //     try {
    //         Validator::make($request->all(), []);
    //         $data = $request->all();
    //         $this->gym->addTandC($data);
    //         return back()->with('status', 'success')->with('message', 'Gym terms and conditions added Succesfully');
    //     } catch (\Exception $e) {
    //         Log::error('[GymController][addTermsAndConditions]Error adding : ' . 'Request=' . $e->getMessage());
    //         return back()->with('status', 'error')->with('message', 'T&C Not Added ');
    //     }
    // }

    // public function addGymSocialLink(Request $request)
    // {
    //     try {
    //         Validator::make($request->all(), []);
    //         $data = $request->all();
    //         $this->gym->addSocialLink($data);
    //         return back()->with('status', 'success')->with('message', 'Gym terms and conditions added Succesfully');
    //     } catch (\Exception $e) {
    //         Log::error('[GymController][addGymSocialLink]Error adding : ' . 'Request=' . $e->getMessage());
    //         return back()->with('status', 'error')->with('message', 'T&C Not Added ');
    //     }
    // }
}
