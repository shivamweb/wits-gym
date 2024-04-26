<?php

namespace App\Http\Controllers;

use App\Models\GymSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymSubscriptionController extends Controller
{
    protected $gymSubscription;
    public function __construct(GymSubscription $gymSubscription)
    {
        $this->gymSubscription = $gymSubscription;
    }

    public function listSubscriptionPlan()
    {
        return view('GymOwner.GymSubscription.createList');
    }
    public function createGymSubscriptionPlan(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'subscription_name' => '',
                'amount' => 'required',
                'validity' => 'required',
                'description' => 'required',
                'plan_id' => 'required'
            ]);

            // dd($validatedData);
            $this->gymSubscription->createSubscription($validatedData);

            return redirect()->route('dashboard')->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymSubscriptionController][createGymSubscriptionPlan] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }




}
