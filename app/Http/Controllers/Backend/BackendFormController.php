<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Models\Appointment;
class BackendFormController extends Controller
{
    //add treatment types
    public function treatment_types(){
        $treatmentTypes = Treatment_type::all();
    return view('backend.appointment.treatment_types', compact('treatmentTypes'));  
    }
    public function add_treatmen_types(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255','unique:treatment_types'],
        ]);
    // Create new treatment type
    $data = new Treatment_type();
    $data->title = $request->title;
    $data->save();
    return redirect()->back()->with('success', 'Treatment type added successfully.');
    }
    public function edit_treatment_types($id){
        $data=Treatment_type::find($id);
        return view('backend.appointment.edit_treatment_types',compact('data'));
    }
    public function update_treatmen_types(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);
        $data = Treatment_type::find($id);
        $data->title=$request->title;
        $data->save();
        return redirect()->route('admin.treatment_types')->with('success', 'Data updated successfully.');
    }
    //appointment
    public function take_appointment(Request $request)
    {
       // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
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
        $appointment->status = $request->status;
        $appointment->notes = $request->notes;

        // Save the appointment
        $appointment->save();
        // Optionally, you can return a response indicating success or redirect to another page
        return redirect()->back()->with('success', 'Appointment has been scheduled successfully!');
    }
    public function edit_appointment($id){
        $data= Appointment::find($id);
        $data_2= Treatment_type::all();
        return view('backend.appointment.edit_appointment',compact('data','data_2'));
    }
    public function update_appointment(Request $request, $id)
{
    $appointment = Appointment::find($id);
    $appointment->name = $request->input('name');
    $appointment->phone = $request->input('phone');
    $appointment->email = $request->input('email');
    $appointment->gender = $request->input('gender');
    $appointment->date = $request->input('date');
    $appointment->treatment_types = $request->input('treatment_types');
    $appointment->message = $request->input('message');
    $appointment->status = $request->input('status');
    $appointment->notes = $request->input('notes');
    $appointment->save();
    return redirect()->route('admin.appointment')->with('success', 'Appointment updated successfully');
}


}
