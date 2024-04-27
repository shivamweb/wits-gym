<?php

namespace App\Http\Controllers;

use App\Models\AdminSubscription;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminSubscriptionController extends Controller
{

    private $adminSubscription;
    public function __construct(
        AdminSubscription $adminSubscription
    ) {
        $this->adminSubscription = $adminSubscription;
    }

    public function viewAddAdminSubscription()
    {
        $adminSubscriptions = $this->adminSubscription->get();
        return view('admin.subscription.addSubscription', compact('adminSubscriptions'));
    }

    public function addAdminSubscription(Request $request)
    {
        try {
            Validator::make($request->all(), []);
            $data = $request->all();
            $imagePath = null;
            if ($request->hasFile('image')) {
                $subscriptionImage = $request->file('image');
                $filename = time() . '_' . $subscriptionImage->getClientOriginalName();
                $imagePath = 'adminSubscription_images/' . $filename;
                $subscriptionImage->move(public_path('adminSubscription_images/'), $filename);
            }
            $this->adminSubscription->addAdminSubscription($data, $imagePath);
            return back()->with('status', 'success')->with('message', 'Subscription Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[AdminSubscriptionController][addAdminSubscription]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'Subscription Not Added ');
        }
    }
}
