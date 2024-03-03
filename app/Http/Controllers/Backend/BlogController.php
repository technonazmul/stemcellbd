<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Blog;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function create_blog(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:blogs|max:255'
        ]);
        if(Auth::check()) {
            $user_id=Auth::user()->id;
        }else {
            $user_id=null;
        }
        $blog= new Blog();

        $blog->title=$request->input('title');
        $slug = Str::slug($request->input('title'), '-');
        $blog->slug =$slug;
        $blog->tags =$request->input('tags');
        $blog->user_id =$user_id;
        $blog->meta_title=$request->input('meta_title');
        $blog->meta_description=$request->input('meta_description');
        $blog->description=$request->input('description');
        $blog->blog_category_id=$request->input('blog_category_id');
        
        if($request->hasFile('thumbnail')){
        $thumbnail=$request->file('thumbnail');
        $newFileName= time() . '.' . $thumbnail->getClientOriginalExtension();
        $path = $thumbnail->storeAs('public/blog',$newFileName); // Store in the storage directory
        $blog->thumbnail= $newFileName; // Save the image path to the database    
        }
        $blog->save();
        return redirect()->back()->with('success','blog Create successfully');
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
