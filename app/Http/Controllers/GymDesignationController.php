<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Designation;

class GymDesignationController extends Controller
{
    protected $designation;

    public function __construct(Designation $designation)
    {
        $this->designation = $designation;
    }

    public function viewGymDesignation()
    {
        $designations = $this->designation->all();
        return view('gymOwner.gymDesignation', compact('designations'));
    }

    public function addGymDesignation(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'designation_name' => 'required'
            ]);
            $this->designation->addAdminDesignation($validatedData);

            return redirect()->route('viewGymDesignation')->with('success', 'Gym Designation added successfully!');
        } catch (\Exception $e) {
            Log::error('[GymDesignationController][addGymDesignation]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'Designation Not Added ');
        }
    }

    public function deleteGymDesignation($uuid)
    {
        $designation = $this->designation->where('uuid', $uuid)->firstOrFail();
        $designation->delete();
        return redirect()->route('viewGymDesignation')->with('success', 'Designation deleted successfully!');
    }
}
