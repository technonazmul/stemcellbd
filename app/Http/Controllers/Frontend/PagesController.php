<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Treatment_type;
use App\Models\Blog;
use App\Models\Doctor;

class PagesController extends Controller
{
    public function doctors() {
        $doctors = Doctor::paginate(8);  
        return view('frontend.pages.doctors', compact('doctors'));
    }
    public function single_doctor($id){
        $doctor=Doctor::find($id);
        return view('frontend.pages.single_doctor',compact('doctor'));
    }

    public function single_blog($id){
        $single_blog=Blog::find($id);
        return view('frontend.pages.single_blog',compact('single_blog'));
     }
    
     public function blogSearch(Request $request) {
        $searchTerm = $request->input('search');

        $blogs = Blog::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('tags', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(10); // You can change pagination number as needed

        
        if (count($blogs) > 0) {
            return view('frontend.pages.blog',compact('blogs'));
        }

        return view('frontend.pages.noresult');
        
    }

    public function blogSearchByTags($search) {
        $searchTerm = $search;

        $blogs = Blog::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('tags', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(10); // You can change pagination number as needed

        
        if (count($blogs) > 0) {
            return view('frontend.pages.blog',compact('blogs'));
        }

        return view('frontend.pages.noresult');
        
    }

}
