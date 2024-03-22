<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Models\Blog;
use App\Models\ServiceCategory;
use App\Models\Service;
class HomeController extends Controller
{

    function index(){
        $data=Treatment_type::all();
        return view('frontend.pages.index',compact('data'));
    }
    function service(){
        return view('frontend.pages.service');
    }
    function show_services($id){
        $show_services=ServiceCategory::find($id);
        return view('frontend.pages.service.show_services',compact('show_services'));
    }
    function single_service($id){
        $single_service=Service::find($id);
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
    function shop(){
        return view('frontend.pages.shop');
    }
    function contact(){
        return view('frontend.pages.contact');
    }
    function eb_registration(){
        return view('frontend.pages.eb_registration');
    }
}