<?php

namespace App\Http\Controllers;

use App\Models\GymCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymCouponController extends Controller
{
    protected $gymCoupon;
    public function __construct(GymCoupon $gymCoupon)
    {
        $this->gymCoupon = $gymCoupon;
    }
    public function listGymCoupons()
    {
        $coupons = $this->gymCoupon->all();
        return view('GymOwner.GymCoupon.createListGymCoupon',compact('coupons'));
    }
    public function addGymCoupon(Request $request)
    {
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                "name"      =>  'required',
                "from"      =>  'required',
                "to"        =>  'required',
                "amount"    =>  'required',
                "discount"  =>  'required',
                "type"      =>  'required',
                "max_amount"=>  'required'
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
