<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('frontend.pages.index');
    }
    function service(){
        return view('frontend.pages.service');
    }
    function stemcell(){
        return view('frontend.pages.stemcell');
    }
    function doctors(){
        return view('frontend.pages.doctors');
    }
    function blog(){
        return view('frontend.pages.blog');
    }
    function shop(){
        return view('frontend.pages.shop');
    }
    function contact(){
        return view('frontend.pages.contact');
    }

}
