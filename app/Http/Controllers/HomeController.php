<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Models\Blog;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\Product;
use App\Models\VisualEdit;
use Session;
class HomeController extends Controller
{

    function index(){
        $data=Treatment_type::all();
        // visual edit for index page
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

        return view('frontend.pages.index',compact('data', 'home_page_service_category_title', 'home_page_service_category_description', 
        'home_page_blog_title', 'home_page_blog_description', 'home_page_doctor_title', 'home_page_doctor_description', 'home_page_testimonial_title',
         'home_page_testimonial_description', 'home_page_appointment_title', 'home_page_appointment_description'));
    }
    function service(){
        return view('frontend.pages.service');
    }
    function show_services($slug){
        $show_services = ServiceCategory::where('slug', $slug)->first();
        //print_r($show_services);
        return view('frontend.pages.service.show_services',compact('show_services'));
    }
    function single_service($slug){
        $single_service=Service::where('slug', $slug)->first();
        return view('frontend.pages.service.single_service',compact('single_service'));
    }
    function training(){
        return view('frontend.pages.service.training');
    }
    function doctors(){
        return view('frontend.pages.doctors');
    }
    function blog(){
        $blogs= Blog::paginate(3);
        return view('frontend.pages.blog',compact('blogs'));
    }
    //shop section start
    function shop(){
        $products = Product::orderBy('id','desc')->paginate(30);
        // visual edit for shop page
        $visualEditShopContent = \App\Models\VisualEdit::where('section', 'shop_page')->pluck('value', 'key');
        return view('frontend.pages.shop', compact('products', 'visualEditShopContent'));
    }
    function shop_single($slug){
        $item = Product::where('slug',$slug)->firstOrFail();
        $relatedProducts = Product::where('category_id', $item->category_id)
        ->where('id', '!=', $item->id)
        ->latest()
        ->take(4)
        ->get();
        return view('frontend.pages.shop_single', compact('item','relatedProducts'));
    }
    function product_review(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:product_reviews|max:255',
            'rating'=> 'required',
            'message'=> 'required',
            'product_id'=> 'required',
        ]);
        $review = new ProductReview;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->message = $request->message;
        $review->product_id = $request->product_id;
        $review->save();
        Session::flash('success','Review added successfully');
        
        return back();
    }
    //shop section end
    function contact(){
        // visual edit for contact page
        $visualEditContactContent = \App\Models\VisualEdit::where('section', 'contact_page')->pluck('value', 'key');
        return view('frontend.pages.contact', compact('visualEditContactContent'));
    }
    function eb_registration(){
        // visual edit for eb_registration page
        $visualEditEbRegistrationContent = \App\Models\VisualEdit::where('section', 'early_bird_registration_page')->pluck('value', 'key');
        return view('frontend.pages.eb_registration', compact('visualEditEbRegistrationContent'));
    }
}