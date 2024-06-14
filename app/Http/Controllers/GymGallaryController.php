<?php

namespace App\Http\Controllers;

use App\Models\GymGallery;
use App\Models\GymImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class GymGallaryController extends Controller
{
    public function viewAddGallery(Request $request)
    {
        $status = null;
        $message = null;

        return view('gymOwner.addGallery', compact('status', 'message'));
    }

    public function viewGallery(Request $request)
    {
        $status = null;
        $message = null;

        return view('gymOwner.gallery', compact('status', 'message'));
    }

    public function addGallery(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'category' => 'required',
                'files.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Adjust file size and types as needed
            ]);

            // Create a new Gallery entry
            $gallery = new GymGallery();
            $gallery->category = $request->category;
            $gallery->save();
            // Handle file upload
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    try {
                        // Store each file in storage/app/public directory
                        $path = $file->store('public');

                        // Create a new image entry for each file
                        $gallery->images()->create([
                            'category' => $request->category,
                            'path' => $path
                        ]);
                    } catch (\Exception $e) {
                        // Log the error
                        Log::error('File upload error: ' . $e->getMessage());
                        // Handle the error, you can also throw an exception here if needed
                    }
                }
            }
            return redirect()->back()->with('success', 'Gallery added successfully!');
        } catch (\Throwable $th) {
            Log::error("[GymGallaryController][addGallery] error " . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
