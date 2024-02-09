<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Doctor;

class DoctorController extends Controller
{
    function save_doctor(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);
        $doctor = new Doctor();
    $doctor->name = $request->input('name');
    $doctor->phone = $request->input('phone');
    $doctor->email = $request->input('email');
    $doctor->Specialization = $request->input('Specialization');
    $doctor->chamber = $request->input('chamber');
    $doctor->responsibility = $request->input('responsibility');
    $doctor->facebook = $request->input('facebook');
    $doctor->instagram = $request->input('instagram');
    $doctor->telegram = $request->input('telegram');
    $doctor->linkedin = $request->input('linkedin');
    $doctor->twitter = $request->input('twitter');
    $doctor->about = $request->input('about');

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newFilename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/doctors',$newFilename); // Store in the storage directory
        $doctor->image= $newFilename; // Save the image path to the database
    }

    $doctor->save();
        // Redirect back with a success message
        return redirect()->route('add_doctor')->with('success', 'Doctor added successfully!');
    }

    public function doctor() {
        $doctor = Doctor::all();  
        return view('backend.doctor.doctor', compact('doctor'));
    }
    public function edit_doctor($id){
        $doctor= Doctor::find($id);
        return view('backend.doctor.edit_doctor',compact('doctor'));
    }
    public function update_doctor(Request $request,$id){
    $doctor=Doctor::find($id);
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|string|max:255',
    ]);

    // Update doctor's information
    $doctor->name = $request->input('name');
    $doctor->phone = $request->input('phone');
    $doctor->email = $request->input('email');
    $doctor->Specialization = $request->input('Specialization');
    $doctor->chamber = $request->input('chamber');
    $doctor->responsibility = $request->input('responsibility');
    $doctor->facebook = $request->input('facebook');
    $doctor->instagram = $request->input('instagram');
    $doctor->telegram = $request->input('telegram');
    $doctor->linkedin = $request->input('linkedin');
    $doctor->twitter = $request->input('twitter');
    $doctor->about = $request->input('about');
    $oldImage = $doctor->image;
    // If a new image is uploaded, delete the old image and save the new image
    if ($request->hasFile('image')) {
        // Delete the old image from storage
        if ($oldImage) {
            Storage::delete('public/doctors/' . $oldImage);
        }}
    // Check if a new image is uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $newFilename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/doctors', $newFilename); // Store in the storage directory
        $doctor->image = $newFilename; // Save the new image path to the database
    }

    $doctor->save();

    // Redirect back with a success message
    return redirect()->route('admin.doctor')->with('success', 'Doctor updated successfully!');
    }

    public function delete_doctor($id) {
        // Find the doctor by ID
        $doctor = Doctor::find($id);
        
        // Check if the doctor exists
        if (!$doctor) {
            return redirect()->back()->withError('Doctor not found');
        }
    
        //Delete the associated image file from storage
        if ($doctor->image) {
            Storage::delete('public/doctors/' . $doctor->image);
        }
    
        // Delete the doctor record from the database
        $doctor->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Doctor and associated image deleted successfully!');
    }

}
