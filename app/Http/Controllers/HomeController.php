<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Models\Blog;
class HomeController extends Controller
{

    function index(){
        $data=Treatment_type::all();
        return view('frontend.pages.index',compact('data'));
    }
    function service(){
        return view('frontend.pages.service');
    }
    function stemcell(){
        return view('frontend.pages.stemcell');
    }
    function cosmetic(){
        return view('frontend.pages.cosmetic');
    }
    function training(){
        return view('frontend.pages.training');
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
