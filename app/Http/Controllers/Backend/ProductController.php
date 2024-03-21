<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    function save_product(Request $request) {
        // $request->validate([
    	// 	'name' => 'required|max:150',
    	// 	'description' => 'required',
    	// 	'price' => 'required',
    	// 	'quantity' => 'required',
    		
    	// ]);
    	
    	$product = new Product;

    	$product->name = $request->name;
    	$product->description = $request->description;
        $product->specification = $request->specification;
    	$product->price = $request->price;
        $product->offer_price = $request->offer_price;
    	//$product->slug = Str::slug($request->title,'-');

        $new_slug= Str::slug($request->name,'-');

        $checkifsameslughas = Product::orWhere('slug','like','%'.$new_slug.'%')->get();
        if (count($checkifsameslughas) > 0) {
            $slug_last_value = count($checkifsameslughas)+1;
            $final_slug = $new_slug."-".$slug_last_value;
            $product->slug = $final_slug;
        }
        else {
            $product->slug = $new_slug;
        }

        $product->sku = $request->sku;
        $product->quantity = $request->quantity;
    	$product->category_id = $request->category;
        $product_images = '';
        if ( isset($request->product_image) && count($request->product_image) > 0) {
    		$i = 1;
    		foreach ($request->product_image as $image) {
    			//make image name
    			$img = $image->getClientOriginalName().'-'.time().$i.'.'.$image->getClientOriginalExtension();
    			//image location
    			//$location = public_path('images/'.$img);
                $path = $image->storeAs('public/products',$img); // Store in the storage directory
               
                if($i == 1) {
                    $product_images = $img;
                }
                else {
                    $product_images = $product_images.",".$img;
                }
                
    			$i++;
    		}
    	}
        $product->images = $product_images;

    	$product->save();

    	
        echo "success";
        session()->flash('success', 'Product has been added successfully!!');

    	//return back();
        
    }

    function show_products() {
        $products = Product::orderBy('id','desc')->paginate(15);
        return view('backend.product.products', compact('products'));
    }
    function product_edit($id) {
        $product = Product::findOrFail($id);
        $preload_images = "";
        if(!is_null($product->images)) {
            $images_for_uploder_preload = explode(',',$product->images);
            
            $countr = 1;
            for($i=0; $i < count($images_for_uploder_preload); $i++) {

                $preload_images .= "{id:.$countr, src:'".asset('storage/products/'.$images_for_uploder_preload[$i])."'},";
                $countr++;
            }
            
        }
        

        return view('backend.product.edit_product',compact('product','preload_images'));
    }
    
    
}
