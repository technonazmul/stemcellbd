<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralInfo;
use App\Models\Testimonial;

class GeneralInfoController extends Controller
{
    //general info
    //edit
    public function geleral_info() {
        $general_info= GeneralInfo::findOrFail(1);
        return view('backend.generalinfo.general_info',compact('general_info'));
    }
    //update
    public function update_general_info(Request $request,$id){
        $general_info= GeneralInfo::findOrFail(1);
        $general_info->email = $request->input('email');
        $general_info->hotline = $request->input('hotline');
        $general_info->address = $request->input('address');
        $general_info->enquiry_number = $request->input('enquiry_number');
        $general_info->appointment_number = $request->input('appointment_number');
        $general_info->help_email = $request->input('help_email');
        $general_info->support_email = $request->input('support_email');
        $general_info->website = $request->input('website');
        $general_info->about_us = $request->input('about_us');
        $general_info->facebook = $request->input('facebook');
        $general_info->instagram = $request->input('instagram');
        $general_info->youtube = $request->input('youtube');
        $general_info->twitter = $request->input('twitter');
        $general_info->linkedin = $request->input('linkedin');
        $general_info->telegram = $request->input('telegram');
        $general_info->copyright = $request->input('copyright');

        $general_info->save();
        return redirect()->back()->with('success','Info Update Successfull');
    }

    //testimonails
    public function testimonial(){
        return view('backend.generalinfo.testimonial');
    }
    public function add_testimonial(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'author' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
            'text' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        //Save data to the database
        $testimonial = new Testimonial();
        $testimonial->name = $request->input('name');
        $testimonial->author = $request->input('author');
        $testimonial->text = $request->input('text');
        //save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/testimonail', $imageName);
        } else {
            $imageName = null; // No image uploaded
        }
        $testimonial->image = $imageName;
        $testimonial->rating = $request->input('rating');
        $testimonial->save();
        //Redirect or return a response
        return redirect()->back()->with('success', 'Testimonial added successfully');
    }
}
