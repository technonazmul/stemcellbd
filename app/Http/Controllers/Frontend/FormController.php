<?php
namespace App\Http\Controllers\Frontend;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Form;
use App\Models\Appointment;
use App\Models\Contact;
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
    //contact form 
    public function contact_form(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $data= new Contact();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->company = $request->input('company');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->back()->with('success','Message send Successfull');
    }


    //appointment
    public function take_appointment(Request $request)
    {
       // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email',
            'gender' => 'nullable|in:male,female,other',
            'date' => 'nullable|date',
            'appointment_for' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Create a new appointment instance
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->email = $request->email;
        $appointment->gender = $request->gender;
        $appointment->date = $request->date;
        $appointment->treatment_types = $request->treatment_types;
        $appointment->message = $request->message;

        // Save the appointment
        $appointment->save();
        // Optionally, you can return a response indicating success or redirect to another page
        return redirect()->back()->with('success', 'Appointment has been scheduled successfully!');
    }
}
