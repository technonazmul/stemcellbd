<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog_category(){
        return view('backend.blog.blog_category');
    }
}
