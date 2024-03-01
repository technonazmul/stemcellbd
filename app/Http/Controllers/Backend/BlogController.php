<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function create_blog(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:blogs|max:255'
        ]);
        $title = $request->title;
        //$slug = Str::slug($title, '-');
        $blog= new Blog();
        //$blog->slag = $slag;
        $tags = $request->input('tags');

        $blog->title = $request->input('title');
        $blog->title = $request->input('title');
        $blog->title = $request->input('title');
        print_r($tags );
        //return redirect()->back()->with('success','blog Create successfully');
    }






    //blog category
    public function blog_category(){
        return view('backend.blog.blog_category');
    }
    function add_blog_category(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:blog_categories|max:255'
        ]);
        
        $name = $request->name;
        $slug = Str::slug($name, '-');

        $blog_category = new BlogCategory;
        $blog_category->name = $name;
        $blog_category->slug = $slug;
        $blog_category->save();
        return redirect()->back()->with('success','blog Category add successfully');
    }
    public function edit_blog_category($id){
        $blog_category=BlogCategory::find($id);
        return view('backend.blog.edit_blog_category',compact('blog_category'));
    }
    public function update_blog_category(Request $request,$id){
        $blog_category= BlogCategory::find($id);
        $validated = $request->validate([
            'name' => 'required|unique:blog_categories|max:255'
        ]);
        
        $name = $request->name;
        $slug = Str::slug($name, '-');
        $blog_category->name = $name;
        $blog_category->slug = $slug;
        $blog_category->save();
        return redirect()->route('blog_category')->with('success','blog Category update successfully');
    }
}
