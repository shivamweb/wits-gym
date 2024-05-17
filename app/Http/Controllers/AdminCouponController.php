<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\AdminCoupon;

class AdminCouponController extends Controller
{
    protected $adminCoupon;

    public function __construct(AdminCoupon $adminCoupon)
    {
        $this->adminCoupon = $adminCoupon;
    }
    public function viewAdminCoupons()
    {
        $status = null;
        $message = null;
        $adminCoupons = $this->adminCoupon->all();
        return view('admin.adminCoupon.createListAdminCoupon', compact('status', 'message', 'adminCoupons'));
    }

    public function addAdminCoupon(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'from' => 'required|date',
                'to' => 'required|date',
                'image' => 'required|image',
                'description' => 'required',
            ]);
    
            $imagePath = null;
            if ($request->hasFile('image')) {
                $userImage = $request->file('image');
                $filename = time() . '_' . $userImage->getClientOriginalName();
                $imagePath = 'admin_coupon_images/' . $filename;
                $userImage->move(public_path('admin_coupon_images/'), $filename);
            }
    
            // Assuming you have a method addCoupon in your GymCoupon model
            $this->adminCoupon->addAdminCoupon($validatedData, $imagePath);
    
            return redirect()->back()->with('success', 'Coupon added successfully.');
        } catch (\Throwable $th) {
            Log::error("[AdminCouponController][addAdminCoupon] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function viewGymCoupon(Request $request)
    {
        $uuid = $request->uuid;
        $adminCoupon = $this->adminCoupon->where('uuid', $uuid)->first();
        
        return view('admin.adminCoupon.editGymCoupon', compact('adminCoupon'));
    }
    
}
