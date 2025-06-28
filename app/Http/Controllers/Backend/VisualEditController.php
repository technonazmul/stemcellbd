<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Http\Controllers\Controller;
use App\Models\VisualEdit;
use App\Models\Product;

class VisualEditController extends Controller
{
    // This controller handles the visual editing of various sections on the homepage.
    function index(){
        $data=Treatment_type::all();
        $visualEditServiceCategoryContent = VisualEdit::where('section', 'home_page_service_category')
                ->whereIn('key', ['title', 'description'])
                ->pluck('value', 'key');
        
        //like to write a variable name for title or other section we're using visual eidit table
        $home_page_service_category_title = $visualEditServiceCategoryContent['title'] ?? '';
        $home_page_service_category_description = $visualEditServiceCategoryContent['description'] ?? '';

        // Get visual edit data for blog section content
        $visualEditBlogContent = VisualEdit::where('section', 'home_page_blog')
                ->whereIn('key', ['title', 'description'])
                ->pluck('value', 'key');

        $home_page_blog_title = $visualEditBlogContent['title'] ?? '';
        $home_page_blog_description = $visualEditBlogContent['description'] ?? '';

        // Get visual edit data for doctor section content
        $visualEditDoctorContent = VisualEdit::where('section', 'home_page_doctor')
                ->whereIn('key', ['title', 'description'])
                ->pluck('value', 'key');   

        $home_page_doctor_title = $visualEditDoctorContent['title'] ?? '';
        $home_page_doctor_description = $visualEditDoctorContent['description'] ?? '';

        // Get visual edit for homepage testimonial section
        $visualEditTestimonialContent = VisualEdit::where('section', 'home_page_testimonial')
                ->whereIn('key', ['title', 'description'])
                ->pluck('value', 'key');
        $home_page_testimonial_title = $visualEditTestimonialContent['title'] ?? '';
        $home_page_testimonial_description = $visualEditTestimonialContent['description'] ?? '';

        // Get visual edit data for homepage appointment section
        $visualEditAppointmentContent = VisualEdit::where('section', 'home_page_appointment')
                ->whereIn('key', ['title', 'description'])
                ->pluck('value', 'key');
        $home_page_appointment_title = $visualEditAppointmentContent['title'] ?? '';
        $home_page_appointment_description = $visualEditAppointmentContent['description'] ?? '';

        return view('backend.visualeditor.homepage',compact('data', 'home_page_service_category_title', 'home_page_service_category_description', 
        'home_page_blog_title', 'home_page_blog_description', 'home_page_doctor_title', 'home_page_doctor_description', 'home_page_testimonial_title',
         'home_page_testimonial_description', 'home_page_appointment_title', 'home_page_appointment_description'));
    }

    // This function will handle varios sections of contact page
    public function contact()
    {
        $visualEditContactContent = VisualEdit::where('section', 'contact_page')->pluck('value', 'key');
        
        return view('backend.visualeditor.contact', compact('visualEditContactContent'));
    }
    
    // This function will handle various sections of shop page
    public function shop()
    {
        $visualEditShopContent = VisualEdit::where('section', 'shop_page')->pluck('value', 'key');
        $products = Product::orderBy('id','desc')->paginate(30);

        return view('backend.visualeditor.shop', compact('visualEditShopContent', 'products'));
    }

    // This function will handle various sections of pharmacy page
    public function pharmacy()
    {
        $visualEditPharmacyContent = VisualEdit::where('section', 'pharmacy_page')->pluck('value', 'key');
        return view('backend.visualeditor.pharmacy', compact('visualEditPharmacyContent'));
    }

    // This function will handle various sections of pathology page
    public function pathology()
    {
        $visualEditPathologyContent = VisualEdit::where('section', 'pathology_page')->pluck('value', 'key');
        return view('backend.visualeditor.pathology', compact('visualEditPathologyContent'));
    }

    // This function will handle various sections of ambulance page
    public function ambulance()
    {
        $visualEditAmbulanceContent = VisualEdit::where('section', 'ambulance_page')->pluck('value', 'key');
        return view('backend.visualeditor.ambulance', compact('visualEditAmbulanceContent'));
    }  

    // This function will handle various sections of eb_registration page
    public function ebRegistration()
    {
        $visualEditEbRegistrationContent = VisualEdit::where('section', 'early_bird_registration_page')->pluck('value', 'key');
        return view('backend.visualeditor.eb_registration', compact('visualEditEbRegistrationContent'));
    }

   public function update(Request $request)
    {
        $request->validate([
            'section' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,webp,pdf,docx,mp4|max:20480',
        ]);

        $section = $request->input('section');

        // Handle title and description
        if ($request->has('title') || $request->has('description')) {
            if ($request->has('title')) {
                VisualEdit::updateOrCreate(
                    ['section' => $section, 'key' => 'title'],
                    ['value' => $request->input('title')]
                );
            }

            if ($request->has('description')) {
                VisualEdit::updateOrCreate(
                    ['section' => $section, 'key' => 'description'],
                    ['value' => $request->input('description')]
                );
            }
        }

        // Handle file upload
        elseif ($request->hasFile('file')) {
            $file = $request->file('file');
            $newFilename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('visual_edits', $newFilename, 'public');

            VisualEdit::updateOrCreate(
                ['section' => $section, 'key' => $request->input('key')],
                ['value' => $newFilename]
            );
        }

        // Handle basic input field
        else {
            VisualEdit::updateOrCreate(
                ['section' => $section, 'key' => $request->input('key')],
                ['value' => $request->input('input_value')]
            );
        }

        return redirect()->back()->with('success', 'Section updated successfully.');
    }


}
