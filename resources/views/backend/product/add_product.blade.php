@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
            <h2>Add Products</h2>
            <form action="">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <textarea class="summernote">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Specification</label>
                            <textarea class="summernote">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price" min=0>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Offer Price</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price" min=0>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price" min=0>
                        </div>
                        <div class="mt-2">
                            <label>Images</label>
                            <div class="input-images"></div>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">SKU/ Product Code</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        <div class="field_wrapper">
                            <div class="form-group col-md-8" style="padding-left: 0">
                                <label>Add Attribute</label><br>
                                <label style="font-size: 13px;">Title (Ex Color)</label>
        
                                <input type="text" name="attribute_name[]" class="form-control" placeholder="Title" /><br>
                                <label style="font-size: 13px;">Options (Ex Green,Red,White)</label><br>
                                <textarea name="attribute_option[]" class="form-control" placeholder="Attribute option must need to separate by ,"></textarea><br>
                                <a href="javascript:void(0);" class="add_button btn btn-success" title="Add field">Add More</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save Product" id="submit">
                        </div>
        
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection
@section("extra_script")
<script src="{{asset("backend/vendor/drug-drop-image-upload/product-image-uploader.js")}}"></script>

<script>
    $(document).ready(function() {
  $('.summernote').summernote();
});
$('.input-images').imageUploader();
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