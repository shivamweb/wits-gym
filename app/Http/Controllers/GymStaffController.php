<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\GymStaff;
use App\Traits\SessionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GymStaffController extends Controller
{
    use SessionTrait;
    protected $gymStaf;
    protected $gym;
    public function __construct(GymStaff $gymStaf, Gym $gym)
    {
        $this->gymStaf = $gymStaf;
        $this->gym = $gym;
    }
    public function listGymStaff()
    {


        $gym_uuid = $this->getGymSession()['uuid'];
        $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;

        $gymStaffMembers = $this->gymStaf->where('gym_id', $gymId)->get();
        return view('GymOwner.GymStaff.createListStaff', compact('gymStaffMembers'));
    }
    public function addGymStaff(Request $request)
    {
        // dd($request->all());

        $gym_uuid = $this->getGymSession()['uuid'];
        $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;
        try {
            $validatedData = $request->validate([
                "member_name" => 'required',
                "member_designation" => 'required',
                "salary" => 'required',
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
            $this->gymStaf->addGymStaff($validatedData, $imagePath, $gymId);

            return redirect()->route('listGymStaff')->with('success', 'Data saved successfully.');
        } catch (\Throwable $th) {
            Log::error("[GymStaffController][addGymStaff] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function showUpdateStaff(Request $request, $uuid)
    {
        // $uuid = $request->input('uuid');
        $staffDetail = $this->gymStaf->where('uuid', $uuid)->first();

        return view('GymOwner.GymStaff.editStaff', compact('staffDetail'));
    }

    public function updateStaff(Request $request)
    {
       
        try {

            $validatedData = $request->validate([
                'uuid' => 'required',
                'member_name' => 'required',
                'member_designation' => 'required',
                'salary' => 'required',
                'image' => 'nullable'
            ]);
            
            $imagePath = null;
            if ($request->hasFile('image')) {
                $gymImage = $request->file('image');
                $filename = time() . '_' . $gymImage->getClientOriginalName();
                $imagePath = 'gymStaff_images/' . $filename;
                $gymImage->move(public_path('gymStaff_images/'), $filename);
            }

            $isStaffUpdated = $this->gymStaf->updateStaff($validatedData, $imagePath);
            


            if ($isStaffUpdated) {
                return redirect()->back()->with('status', 'success')->with('message', 'Staff Updated successfully.');
            }

            if ($isStaffUpdated) {
                return redirect()->back()->with('status', 'success')->with('message', 'Staff Updated successfully.');
            }
            return redirect()->back()->with('status', 'error')->with('message', 'error while updating user.');
        } catch (\Exception $e) {
            Log::error('[GymStaffController][updateStaff] Error updating user ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect()->back()->with('status', 'error')->with('message', 'error while updating user.');
        }
    }
}
