<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Blog;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            $user_id='1';
        }
        $blog= new Blog();

        $blog->title=$request->input('title');
        $slug = Str::slug($request->input('title'), '-');
        $blog->slug =$slug;

        
        // Decode the JSON string into an array
        $tags = json_decode($request->input('tags'), true);

        // Extract the 'value' from each item and join them with commas
        $tags_as_string = collect($tags)->pluck('value')->implode(',');
        $blog->tags =$tags_as_string;
        $blog->user_id =$user_id;
        $blog->meta_title=$request->input('meta_title');
        $blog->meta_description=$request->input('meta_description');
        $blog->description=$request->input('description');
        $blog->blog_category_id=$request->blog_category_id;
        
        if($request->hasFile('thumbnail')){
        $thumbnail=$request->file('thumbnail');
        $newFileName= time() . '.' . $thumbnail->getClientOriginalExtension();
        $path = $thumbnail->storeAs('public/blog',$newFileName); // Store in the storage directory
        $blog->thumbnail= $newFileName; // Save the image path to the database    
        }
        $blog->save();
        return redirect()->back()->with('success','blog Create successfully');
    }
    public function edit_blog($id){
        $edit_blog=Blog::find($id);
        return view('backend.blog.edit_blog',compact('edit_blog'));
    }
    //update blog
    public function update_blog(Request $request , $id){
        $blog=Blog::find($id);
        $validated = $request->validate([
            'title' => 'required|unique:blogs|max:255'
        ]);
        if(Auth::check()) {
            $user_id=Auth::user()->id;
        }else {
            $user_id='1';
        }
        $blog->title=$request->input('title');
        $slug = Str::slug($request->input('title'), '-');
        $blog->slug =$slug;

        // Decode the JSON string into an array
        $tags = json_decode($request->input('tags'), true);
        // Extract the 'value' from each item and join them with commas
        $tags_as_string = collect($tags)->pluck('value')->implode(',');
        $blog->tags =$tags_as_string;
        $blog->user_id =$user_id;
        $blog->meta_title=$request->input('meta_title');
        $blog->meta_description=$request->input('meta_description');
        $blog->description=$request->input('description');
        $blog->blog_category_id=$request->blog_category_id;
        $old_thumbnail=$blog->thumbnail;

        if($request->hasFile('thumbnail')){
            if($old_thumbnail){
                Storage::delete('public/blog/' . $old_thumbnail);
            }
        }
        if($request->hasFile('thumbnail')){
        $thumbnail=$request->file('thumbnail');
        $newFileName= time() . '.' . $thumbnail->getClientOriginalExtension();
        $path = $thumbnail->storeAs('public/blog/',$newFileName); // Store in the storage directory
        $blog->thumbnail= $newFileName; // Save the image path to the database    
        }
        $blog->save();
        return redirect()->back()->with('success','blog update successfully');
    }
    //delete blog post
    public function delete_blog(Request $request , $id){
        $delete_blog = Blog::find($id);
        if(!$delete_blog){
            return redirect()->back()->withError('Blog not found');
        }
        if($delete_blog->thumbnail){
            Storage::delete('public/blog/' . $delete_blog->thumbnail);
        }
        $delete_blog->delete();
        return redirect()->back()->with('success','blog delete successfully');
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
