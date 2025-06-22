<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy; 

class PharmacyController extends Controller
{
    public function pharmacySubmit(Request $request)
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

        // Save data to the Pharmacy model
        $pharmacy = new Pharmacy();
        $pharmacy->name = $validated['name'];
        $pharmacy->phone = $validated['phone'] ?? null;
        $pharmacy->subject = $validated['subject'] ?? null;
        $pharmacy->prescription_photo = $newFilename;
        $pharmacy->message = $validated['message'] ?? null;
        $pharmacy->save();

        return back()->with('success', 'Order submitted successfully!');
    }

    function index()
    {
        $pharmacies = Pharmacy::latest()->get();
        return view('backend.pharmacy.index', compact('pharmacies'));
    }


}
