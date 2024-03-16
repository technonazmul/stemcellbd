<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Models\Blog;
use App\Models\ServiceCategory;
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
    function cosmetic(){
        return view('frontend.pages.service.cosmetic');
    }
    function training(){
        return view('frontend.pages.service.training');
    }
    function doctors(){
        return view('frontend.pages.doctors');
    }
    function blog(){
        $blog= Blog::all();
        return view('frontend.pages.blog',compact('blog'));
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
