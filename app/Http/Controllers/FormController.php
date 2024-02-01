<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Form;
class FormController extends Controller
{
    public function eb_form_submit(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'registration_type' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            //'c_health_condition' => 'required|string|max:255',
            //'p_medical_history' => 'required|string|max:255',
            //'treatment_of_interest' => 'required|max:255',
            //'preferred_date' => 'required|string|max:255',
            //'profession' => 'required|string|max:255',
            //'address' => 'required|string|max:255',
            //'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            //'message' => 'required|string|max:255',
            'i_agreed' => 'required|string|max:255',
        ]);
        $data = new Form();

        $data->name = $request->input('name');
        $data->registration_type = $request->input('registration_type');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->gender = $request->input('gender');
        $data->c_health_condition = $request->input('c_health_condition');
        $data->p_medical_history = $request->input('p_medical_history');
        $data->treatment_of_interest = implode(', ', $request->treatment_of_interest);
        $data->preferred_date = $request->input('preferred_date');
        $data->profession = $request->input('profession');
        $data->address = $request->input('address');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public function e(){
        return view('frontend.pages.e');
    }
}
