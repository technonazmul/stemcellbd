<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pathology;

class PathologyController extends Controller
{
    public function pathologySubmit(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'prescription_photo' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'message' => 'nullable|string',
        ]);

        // Handle file upload
        $newFilename = null;
        if ($request->hasFile('prescription_photo')) {
            $image = $request->file('prescription_photo');
            $newFilename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('prescriptions', $newFilename, 'public');
        }

        // Save data to the pathology model
        $pathology = new Pathology();
        $pathology->name = $validated['name'];
        $pathology->phone = $validated['phone'] ?? null;
        $pathology->subject = $validated['subject'] ?? null;
        $pathology->prescription_photo = $newFilename;
        $pathology->message = $validated['message'] ?? null;
        $pathology->save();

        return back()->with('success', 'Order submitted successfully!');
    }

    function index()
    {
        $pathologies = Pathology::latest()->get();
        return view('backend.pathology.index', compact('pathologies'));
    }
}
