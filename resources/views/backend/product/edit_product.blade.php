@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
            <h2>Add Products</h2>
            <form action="{{route('product_update', $product->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$product->name}}" class="form-control" id="name" placeholder="Product Name" name="name" required>
                        </div>
                        <div class="mt-2">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="summernote" id="description" name="description" required>
                                {{$product->description}}
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="specification" class="form-label">Specification</label>
                            <textarea class="summernote" id="specification" name="specification">
                                {{$product->specification}}
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" min=1 required name="price" value="{{$product->price}}">
                        </div>
                        <div class="mt-2">
                            <label for="offer_price" class="form-label">Offer Price</label>
                            <input type="number" class="form-control" id="offer_price" min=1 name="offer_price" required value="{{$product->offer_price}}">
                        </div>
                        <div class="mt-2">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"  min=1 required value="{{$product->quantity}}">
                        </div>
                        <div class="mt-2">
                            <label>Images</label>
                            <div class="input-images"></div>
                        </div>
                        
                        <div class="mt-2">
                            <label for="sku" class="form-label">SKU/ Product Code</label>
                            <input type="text" class="form-control" id="sku" placeholder="" name="sku" value="{{$product->sku}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" id="category" name="category">
                                @php 
                                $categories = App\Models\Category::where('parent_id', 0)->get();
                                @endphp
                                <option value="0">Select Category</option>
                                @foreach( $categories as $category )
                                <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                                @foreach(App\Models\Category::where('parent_id', $category->id)->get() as $subcategory)
                                <option value="{{ $subcategory->id }}" @if($subcategory->id == $product->category_id) selected @endif >&nbsp; - {{ $subcategory->name }}</option>
                                @endforeach
                                @endforeach
                              
                            </select>
                          </div>
                        {{-- <div class="field_wrapper">
                            <div class="form-group col-md-8" style="padding-left: 0">
                                <label>Add Attribute</label><br>
                                <label style="font-size: 13px;">Title (Ex Color)</label>
        
                                <input type="text" name="attribute_name[]" class="form-control" placeholder="Title" /><br>
                                <label style="font-size: 13px;">Options (Ex Green,Red,White)</label><br>
                                <textarea name="attribute_option[]" class="form-control" placeholder="Attribute option must need to separate by ,"></textarea><br>
                                <a href="javascript:void(0);" class="add_button btn btn-success" title="Add field">Add More</a>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save Product" id="submit">
                        </div>
        
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
{{$product->images}}
@endsection
@section("extra_script")
<script src="{{asset("backend/vendor/drug-drop-image-upload/product-image-uploader.js")}}"></script>

<script>
    $(document).ready(function() {
  $('.summernote').summernote({
    height: 150
  });
});
let preloaded = [
    {!! $preload_images !!}
];
$('.input-images').imageUploader(
    {preloaded: preloaded}
);
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="form-group col-md-8" style="padding-left: 0"><label>Add Attribute</label><input type="text" name="field_name[]" class="form-control" placeholder="Title" value="" /><br><textarea name="attribute_options[]" class="form-control" placeholder="Attribute option must need to separate by ," value=""></textarea><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            //$(wrapper).append(fieldHTML); //Add field html
            $(wrapper).append('<div class="form-group col-md-8" style="padding-left: 0"><label>Add Attribute</label><br><label style="font-size: 13px;">Title (Ex Color)</label><input type="text" name="attribute_name[]" class="form-control" placeholder="Title" value="" /><br><label style="font-size: 13px;">Options (Ex Green,Red,White)</label><br><textarea name="attribute_option[]" class="form-control" placeholder="Attribute option must need to separate by ," value=""></textarea><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>');
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

</script>
@endsection