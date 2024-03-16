<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

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
    public function show_service($id){
        $show_service= ServiceCategory::find($id);
        return view('backend.service.show_service',compact('show_service'));
    }
}
