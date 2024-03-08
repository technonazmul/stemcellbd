<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function add_category(Request $request) {
        return view('backend.category.add');
    }
    function save_category(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $slug = Str::slug($request->name, '-');
        $category->slug = $slug; 
        $category->parent_id = $request->parent_category;
        $category->save();
        $request->session()->flash('success', 'Added successfully'); 
        return back();
    }
    function categories() {
        return view('backend.category.index');
    }
    function edit_category($id) {
        $editcategory = Category::find($id);
        return view('backend.category.edit',compact('editcategory'));
    }
    function update_product_category($id, Request $request) {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $category = Category::find($id);

        $category->name = $request->name;
        $slug = Str::slug($request->name, '-');
        $category->slug = $slug; 
        $category->parent_id = $request->parent_category;
        $category->save();
        $request->session()->flash('success', 'Added successfully'); 
        return back();
    }
}
