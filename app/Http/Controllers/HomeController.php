<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use App\Models\Treatment_type;
use App\Models\Blog;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\Product;
use Session;
class HomeController extends Controller
{

    function index(){
        $data=Treatment_type::all();
        return view('frontend.pages.index',compact('data'));
    }
    function service(){
        return view('frontend.pages.service');
    }
    function show_services($id){
        $show_services=ServiceCategory::find($id);
        return view('frontend.pages.service.show_services',compact('show_services'));
    }
    function single_service($id){
        $single_service=Service::find($id);
        return view('frontend.pages.service.single_service',compact('single_service'));
    }
    function training(){
        return view('frontend.pages.service.training');
    }
    function doctors(){
        return view('frontend.pages.doctors');
    }
    function blog(){
        $blogs= Blog::paginate(3);
        return view('frontend.pages.blog',compact('blogs'));
    }
    //shop section start
    function shop(){
        $products = Product::orderBy('id','desc')->paginate(30);

        return view('frontend.pages.shop', compact('products'));
    }
    function shop_single($slug){
        $item = Product::where('slug',$slug)->firstOrFail();

        return view('frontend.pages.shop_single', compact('item'));
    }
    function product_review(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:product_reviews|max:255',
            'rating'=> 'required',
            'message'=> 'required',
            'product_id'=> 'required',
        ]);
        $review = new ProductReview;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->message = $request->message;
        $review->product_id = $request->product_id;
        $review->save();
        Session::flash('success','Review added successfully');
        
        return back();
    }
    //shop section end
    function contact(){
        return view('frontend.pages.contact');
    }
    function eb_registration(){
        return view('frontend.pages.eb_registration');
    }
}