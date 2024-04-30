<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\GymSubscription;
use App\Traits\SessionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymSubscriptionController extends Controller
{
    use SessionTrait;
    protected $gymSubscription;
    protected $gym;

    public function __construct(GymSubscription $gymSubscription,Gym $gym)
    {
        $this->gymSubscription = $gymSubscription;
        $this->gym = $gym;
    }

    public function listSubscriptionPlan()
    {

        $gym_uuid = $this->getGymSession()['uuid'];
        $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;

        $subscriptions = $this->gymSubscription->where('gym_id', $gymId)->get();
        return view('GymOwner.GymSubscription.createListSubscription',compact('subscriptions'));
    }

    public function createGymSubscriptionPlan(Request $request)
    {
        try {

            $gym_uuid = $this->getGymSession()['uuid'];
            $gymId=$this->gym->where('uuid', $gym_uuid)->first()->id;

            $validatedData = $request->validate([
                'subscription_name' => '',
                'amount' => 'required',
                'validity' => 'required',
                'description' => 'required',
                'plan_id' => 'required',
                'start_date'=>'required'
            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $subscriptionImage = $request->file('image');
                $filename = time() . '_' . $subscriptionImage->getClientOriginalName();
                $imagePath = 'gymSubscription_images/' . $filename;
                $subscriptionImage->move(public_path('gymSubscription_images/'), $filename);
            }else{
                Log::error("[GymSubscriptionController][createGymSubscriptionPlan] error imagefile is null" );
            }
            // dd($validatedData);
            // dd($imagePath);
            $this->gymSubscription->createSubscription($validatedData, $imagePath,$gymId);

            return redirect()->route('listSubscriptionPlan')->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymSubscriptionController][createGymSubscriptionPlan] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
