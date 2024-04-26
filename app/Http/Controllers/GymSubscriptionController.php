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
        $subscriptions = $this->gymSubscription->all();
        return view('GymOwner.GymSubscription.createList',compact('subscriptions'));
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

            return redirect()->route('/gym-subscription')->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymSubscriptionController][createGymSubscriptionPlan] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }




}
