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
        'name' => 'required|unique:service_categories|max:255',
        'short_description' => 'nullable|string|max:500',
        'parent_id' => 'nullable|exists:service_categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $name = $request->name;
    $slug = Str::slug($name, '-');
    
    // Handle image upload
    $imageName = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . Str::slug($name) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/service_categories', $imageName);
    }

    $service_category = new ServiceCategory;
    $service_category->name = $name;
    $service_category->slug = $slug;
    $service_category->short_description = $request->short_description;
    $service_category->parent_id = $request->parent_id;
    $service_category->image = $imageName;
    $service_category->save();

    return redirect()->back()->with('success','Service Category added successfully');
}

public function edit_service_category($id){
    $service_category = ServiceCategory::with('parent')->find($id);
    
    if (!$service_category) {
        return redirect()->route('admin.service_category')->with('error', 'Service Category not found');
    }
    
    return view('backend.service.edit_service_category', compact('service_category'));
}

    public function update_service_category(Request $request, $id){
        $service_category = ServiceCategory::find($id);
        
        if (!$service_category) {
            return redirect()->route('admin.service_category')->with('error', 'Service Category not found');
        }
        
        $validated = $request->validate([
            'name' => 'required|unique:service_categories,name,'.$id.'|max:255',
            'short_description' => 'nullable|string|max:500',
            'parent_id' => 'nullable|exists:service_categories,id|not_in:'.$id, // Prevent self-reference
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $name = $request->name;
        $slug = Str::slug($name, '-');
        
        // Handle image upload
        $imageName = $service_category->image; // Keep existing image by default
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service_category->image) {
                Storage::delete('public/service_categories/' . $service_category->image);
            }
            
            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/service_categories', $imageName);
        }

        $service_category->name = $name;
        $service_category->slug = $slug;
        $service_category->short_description = $request->short_description;
        $service_category->parent_id = $request->parent_id;
        $service_category->image = $imageName;
        $service_category->save();

        return redirect()->route('admin.service_category')->with('success','Service Category updated successfully');
    }

    public function delete_service_category($id) {
        $service_category = ServiceCategory::find($id);

        if (!$service_category) {
            return redirect()->back()->with('error', 'Service Category not found');
        }

        // Get all subcategories (children) of this category
        $subcategories = ServiceCategory::where('parent_id', $id)->get();
        
        // Delete all subcategories and their associated services
        foreach ($subcategories as $subcategory) {
            $this->deleteServicesAndCategory($subcategory);
        }
        
        // Delete services directly associated with this category
        $services = Service::where('service_category_id', $id)->get();
        foreach ($services as $service) {
            // Delete the associated image file from storage
            if ($service->thumbnail) {
                Storage::delete('public/service/' . $service->thumbnail);
            }
            $service->delete();
        }
        
        // Delete category image if exists
        if ($service_category->image) {
            Storage::delete('public/service_categories/' . $service_category->image);
        }
        
        // Delete the service category record from the database
        $service_category->delete();

        return redirect()->back()->with('success', 'Service Category and all subcategories deleted successfully!');
    }

    // Helper method to recursively delete categories and their services
    private function deleteServicesAndCategory($category) {
        // Get subcategories of this category
        $subcategories = ServiceCategory::where('parent_id', $category->id)->get();
        
        // Recursively delete subcategories
        foreach ($subcategories as $subcategory) {
            $this->deleteServicesAndCategory($subcategory);
        }
        
        // Delete services associated with this category
        $services = Service::where('service_category_id', $category->id)->get();
        foreach ($services as $service) {
            if ($service->thumbnail) {
                Storage::delete('public/service/' . $service->thumbnail);
            }
            $service->delete();
        }
        
        // Delete category image if exists
        if ($category->image) {
            Storage::delete('public/service_categories/' . $category->image);
        }
        
        // Delete the category
        $category->delete();
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

    // Add this method to your existing ServiceController class
    public function updateCategoryOrder(Request $request)
    {
        try {
            $order = $request->input('order');
            
            if (!$order || !is_array($order)) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Invalid order data'
                ], 400);
            }
            
            foreach ($order as $item) {
                if (isset($item['id']) && isset($item['priority'])) {
                    ServiceCategory::where('id', $item['id'])
                        ->update(['priority' => $item['priority']]);
                }
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Category order updated successfully'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error updating category order: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Failed to update category order: ' . $e->getMessage()
            ], 500);
        }
    }
}