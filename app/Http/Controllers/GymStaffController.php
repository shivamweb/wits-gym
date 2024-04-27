<?php

namespace App\Http\Controllers;

use App\Models\GymStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymStaffController extends Controller
{
    protected $gymStaf;
    public function __construct(GymStaff $gymStaf)
    {
        $this->gymStaf = $gymStaf;
    }
    public function listGymStaff()
    {
        $gymStaffMembers = $this->gymStaf->all();
        return view('GymOwner.GymStaff.createListStaff',compact('gymStaffMembers'));
    }
    public function addGymStaff(Request $request)
    {
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                "member_name" => 'required',
                "member_designation" =>'required',
                "image" => 'required'

            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $subscriptionImage = $request->file('image');
                $filename = time() . '_' . $subscriptionImage->getClientOriginalName();
                $imagePath = 'gymStaff_images/' . $filename;
                $subscriptionImage->move(public_path('gymStaff_images/'), $filename);
            } else {
                log::error("[GymStaffController][addGymStaff] error imagefile is null");
            }
            // dd($validatedData);
            // dd($imagePath);
            $this->gymStaf->addGymStaff($validatedData,$imagePath);

            return redirect()->route('listGymStaff')->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymStaffController][addGymStaff] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
