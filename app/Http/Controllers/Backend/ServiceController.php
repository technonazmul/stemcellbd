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

    //delete service category
    public function delete_service_category($id) {
        // Find the service category by ID
        $service_category = ServiceCategory::find($id);

        // check if the service category has any associated services
        $services = Service::where('service_category_id', $id)->get();
        foreach ($services as $service) {
            // Delete the associated image file from storage
            if ($service->thumbnail) {
                Storage::delete('public/service/' . $service->thumbnail);
            }
            // Delete the service record from the database
            $service->delete();
        }
        
        // Check if the service category exists
        if (!$service_category) {
            return redirect()->back()->with('error', 'Service Category not found');
        }
    
        // Delete the service category record from the database
        $service_category->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service Category deleted successfully!');
    }

    //show service 
    public function all_service(){
        $all_service = Service::all();
        $service_category = ServiceCategory::all();
        return view('backend.service.all_service',compact('all_service','service_category'));
    }

    public function show_service($id){
        $service_category = ServiceCategory::find($id);
        return view('backend.service.show_service',compact('service_category'));
    }

    //create services
    public function add_service(){
        return view('backend.service.add_service');
    }

    public function create_service(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255' // Removed unique constraint
        ]);
        
        if(Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = '1';
        }
        
        $service = new Service();
        $service->title = $request->input('title');
        
        // Generate a unique slug
        $baseSlug = Str::slug($request->input('title'), '-');
        $slug = $baseSlug;
        $counter = 1;
        
        // Check if the slug exists and increment counter until we find a unique one
        while (Service::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        
        $service->slug = $slug;
        
        // Decode the JSON string into an array
        $tags = json_decode($request->input('tags'), true);
        
        // Extract the 'value' from each item and join them with commas (with null check)
        if (is_array($tags)) {
            $tags_as_string = collect($tags)->pluck('value')->implode(',');
            $service->tags = $tags_as_string;
        }
        
        $service->user_id = $user_id;
        $service->meta_title = $request->input('meta_title');
        $service->meta_description = $request->input('meta_description');
        $service->description = $request->input('description');
        $service->service_category_id = $request->service_category_id;
        
        // Handle file upload
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $newFileName = time() . '.' . $thumbnail->getClientOriginalExtension();
            
            // Store the file and save the correct path
            $thumbnail->storeAs('service', $newFileName, 'public');
            $service->thumbnail = $newFileName;
        }
        
        $service->save();
        return redirect()->back()->with('success', 'Service created successfully');
    }

    //edit service
    public function edit_service($id){
        $edit_service = Service::find($id);
        return view('backend.service.edit_service',compact('edit_service'));
    }

    //update service
    public function update_service(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|max:255|unique:services,title,'.$id // Allow updating the same title
        ]);
        
        if(Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = '1';
        }
        
        $service = Service::find($id);

        // Only update the title if it has changed
        if ($service->title != $request->input('title')) {
            $service->title = $request->input('title');
            
            // Generate a unique slug
            $baseSlug = Str::slug($request->input('title'), '-');
            $slug = $baseSlug;
            $counter = 1;
            
            // Check if the slug exists and increment counter until we find a unique one
            while (Service::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }
            
            $service->slug = $slug;
        }
        
        // Decode the JSON string into an array
        $tags = json_decode($request->input('tags'), true);
        
        // Extract the 'value' from each item and join them with commas (with null check)
        if (is_array($tags)) {
            $tags_as_string = collect($tags)->pluck('value')->implode(',');
            $service->tags = $tags_as_string;
        }
        
        $service->user_id = $user_id;
        $service->meta_title = $request->input('meta_title');
        $service->meta_description = $request->input('meta_description');
        $service->description = $request->input('description');
        $service->service_category_id = $request->service_category_id;
        
        // If a new image is uploaded, delete the old image and save the new image
        if ($request->hasFile('thumbnail')) {
            $oldImage = $service->thumbnail;
            
            // Delete the old image from storage
            if ($oldImage) {
                Storage::delete('public/service/' . $oldImage);
            }
            
            $thumbnail = $request->file('thumbnail');
            $newFileName = time() . '.' . $thumbnail->getClientOriginalExtension();
            
            // Store the file and save the correct path - consistent with create_service
            $thumbnail->storeAs('service', $newFileName, 'public');
            $service->thumbnail = $newFileName;
        }
        
        $service->save();
        return redirect()->back()->with('success', 'Service updated successfully');
    }

    //delete service
    public function delete_service($id) {
        // Find the service by ID
        $service = Service::find($id);
        
        // Check if the service exists
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found');
        }
    
        // Delete the associated image file from storage
        if ($service->thumbnail) {
            Storage::delete('public/service/' . $service->thumbnail);
        }
    
        // Delete the service record from the database
        $service->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service and associated image deleted successfully!');
    }
}