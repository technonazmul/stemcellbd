<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function dashboard() {
        return view('backend.dashboard');
    }
    function doctor(){
        return view('backend.doctor.doctor');
    }
    function add_doctor(){
        return view('backend.doctor.add_doctor');
     }
     function blog(){
        return view('backend.blog.blog');
    }
    function add_blog(){
        return view('backend.blog.add_blog');
     }
    function product(){
         return view('backend.product.product');
    }
     function add_product(){
         return view('backend.product.add_product');
    }
}
