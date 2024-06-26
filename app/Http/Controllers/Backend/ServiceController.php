<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Auth;
use Illuminate\Support\Facades\Storage;
class ServiceController extends Controller
{
    //service category
    public function service_category(){
        return view('backend.service.service_category');
    }
    public function add_service_category(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:service_categories|max:255'
        ]);

        $name = $request->name;
        $slug = Str::slug($name, '-');

        $service_category = new ServiceCategory;
        $service_category->name = $name;
        $service_category->slug = $slug;
        $service_category->save();

        return redirect()->back()->with('success','Service Category added successfully');
    }

    public function edit_service_category($id){
        $service_category = ServiceCategory::find($id);
        return view('backend.service.edit_service_category',compact('service_category'));
    }

    public function update_service_category(Request $request,$id){
        $service_category = ServiceCategory::find($id);
        
        $validated = $request->validate([
            'name' => 'required|unique:service_categories,name,'.$id.'|max:255' // Update validation to allow updating the same name
        ]);
        
        $name = $request->name;
        $slug = Str::slug($name, '-');

        $service_category->name = $name;
        $service_category->slug = $slug;
        $service_category->save();

        return redirect()->route('admin.service_category')->with('success','Service Category updated successfully');
    }
    //show service 
    public function all_service(){
        $all_service= Service::all();
        $service_category= ServiceCategory::all();
        return view('backend.service.all_service',compact('all_service','service_category'));
    }
    public function show_service($id){
        $service_category= ServiceCategory::find($id);
        return view('backend.service.show_service',compact('service_category'));
    }
    //create services
    public function add_service(){
        return view('backend.service.add_service');
    }
    public function create_service(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:services|max:255'
        ]);
        if(Auth::check()) {
            $user_id=Auth::user()->id;
        }else {
            $user_id='1';
        }
        $service=new Service();

        $service->title=$request->input('title');
        $slug = Str::slug($request->input('title'), '-');
        $service->slug =$slug;

        
        // Decode the JSON string into an array
        $tags = json_decode($request->input('tags'), true);

        // Extract the 'value' from each item and join them with commas
        $tags_as_string = collect($tags)->pluck('value')->implode(',');
        $service->tags =$tags_as_string;
        $service->user_id =$user_id;
        $service->meta_title=$request->input('meta_title');
        $service->meta_description=$request->input('meta_description');
        $service->description=$request->input('description');
        $service->service_category_id=$request->service_category_id;
        
        if($request->hasFile('thumbnail')){
        $thumbnail=$request->file('thumbnail');
        $newFileName= time() . '.' . $thumbnail->getClientOriginalExtension();
        $path = $thumbnail->storeAs('public/service',$newFileName); // Store in the storage directory
        $service->thumbnail= $newFileName; // Save the image path to the database    
        }
        $service->save();
        return redirect()->back()->with('success','service Create successfully');
    }
    //edit service
    public function edit_service($id){
        $edit_service=Service::find($id);
        return view('backend.service.edit_service',compact('edit_service'));
    }
    //update service
    public function update_service(Request $request,$id){
        $validated = $request->validate([
            'title' => 'required|unique:services|max:255'
        ]);
        if(Auth::check()) {
            $user_id=Auth::user()->id;
        }else {
            $user_id='1';
        }
        $service=service::find($id);

        $service->title=$request->input('title');
        $slug = Str::slug($request->input('title'), '-');
        $service->slug =$slug;

        
        // Decode the JSON string into an array
        $tags = json_decode($request->input('tags'), true);

        // Extract the 'value' from each item and join them with commas
        $tags_as_string = collect($tags)->pluck('value')->implode(',');
        $service->tags =$tags_as_string;
        $service->user_id =$user_id;
        $service->meta_title=$request->input('meta_title');
        $service->meta_description=$request->input('meta_description');
        $service->description=$request->input('description');
        $service->service_category_id=$request->service_category_id;
        $oldImage = $service->thumbnail;
    // If a new image is uploaded, delete the old image and save the new image
    if ($request->hasFile('thumbnail')) {
        // Delete the old image from storage
        if ($oldImage) {
            Storage::delete('public/service/' . $oldImage);
        }}
        
        if($request->hasFile('thumbnail')){
        $thumbnail=$request->file('thumbnail');
        $newFileName= time() . '.' . $thumbnail->getClientOriginalExtension();
        $path = $thumbnail->storeAs('public/service',$newFileName); // Store in the storage directory
        $service->thumbnail= $newFileName; // Save the image path to the database    
        }
        $service->save();
        return redirect()->back()->with('success','service Update successfully');
    }
    //delete service
    public function delete_service($id) {
        // Find the service by ID
        $service = Service::find($id);
        
        // Check if the service exists
        if (!$service) {
            return redirect()->back()->withError('service not found');
        }
    
        //Delete the associated image file from storage
        if ($service->thumbnail) {
            Storage::delete('public/service/' . $service->thumbnail);
        }
    
        // Delete the service record from the database
        $service->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'service and associated image deleted successfully!');
    }
}
