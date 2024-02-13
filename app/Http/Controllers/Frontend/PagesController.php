<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Doctor;

class PagesController extends Controller
{
    public function doctors() {
        $doctor = Doctor::all();  
        return view('frontend.pages.doctors', compact('doctor'));
    }
    public function single_doctor($id){
        $doctor=Doctor::find($id);
        return view('frontend.pages.single_doctor',compact('doctor'));
    }
}
