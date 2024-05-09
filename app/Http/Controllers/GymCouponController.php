<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\GymCoupon;
use App\Traits\SessionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymCouponController extends Controller
{
    use SessionTrait;
    protected $gymCoupon;
    protected $gym;
    public function __construct(GymCoupon $gymCoupon,Gym $gym)
    {
        $this->gymCoupon = $gymCoupon;
        $this->gym = $gym;
    }
    public function listGymCoupons()
    {
        $gym_uuid = $this->getGymSession()['uuid'];
        $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;

        $coupons = $this->gymCoupon->where('gym_id', $gymId)->get();
        return view('GymOwner.GymCoupon.createListGymCoupon', compact('coupons'));
    }
    public function addGymCoupon(Request $request)
    {
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                "name" => 'required',
                "from" => 'required',
                "to" => 'required',
                "amount" => 'required',
                "discount" => 'required',
                "type" => 'required',
                "max_amount" => 'required'
            ]);

            // dd($validatedData);
            $this->gymCoupon->addCoupon($validatedData);

            return redirect()->route('listGymCoupons')->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymCouponController][addGymCoupon] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
