<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralInfo;

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
}
