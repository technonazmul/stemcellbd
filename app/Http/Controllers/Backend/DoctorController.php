<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $path = $image->storeAs('public/storage/doctors',$newFilename); // Store in the storage directory
        $doctor->image= $path; // Save the image path to the database
    }

    $doctor->save();
        // Redirect back with a success message
        return redirect()->route('add_doctor')->with('success', 'Doctor added successfully!');
    //     echo"<pre>";
    //    print_r($request->all());
    //    echo"</pre>";
    }
}
