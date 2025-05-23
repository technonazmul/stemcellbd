@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
<link rel="stylesheet" href="{{asset("backend/libs/css/tagify.css")}}">
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h2>Update Blog</h2>
            <form method="post" action="{{route('admin.update_blog',$edit_blog->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input name="title" value="{{$edit_blog->title}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" required>
                        </div>
                        <br>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">Old Image</label>
                            <img style="max-width: 500px;" src="{{asset('storage/public/blog/'.$edit_blog->thumbnail)}}" class="card-img-top" alt="...">
                        </div>
                        <br>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                                <input type="file" name="thumbnail" id="">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <textarea name="description" class="summernote"  >
                                {{$edit_blog->description}}
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Tags</label>
                            <input name="tags" value="{{$edit_blog->tags}}" placeholder="" value="">
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="exampleFormControlInput1">Blog Category</label>
                            <select name="blog_category_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="1">Select Blog Category</option>
                                
                                @php
                                $blog_category= App\Models\BlogCategory::get();
                                @endphp
                                @foreach($blog_category as $blog_category)
                                <option value="{{$blog_category->id}}" @if($edit_blog->blog_category_id == $blog_category->id ) selected @endif>{{$blog_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                          <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Meta Title</label>
                            <input name="meta_title" value="{{$edit_blog->meta_title}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Meta Title">
                          </div>
                          <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Meta Description</label>
                            <input name="meta_description" value="{{$edit_blog->meta_description}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Meta Description">
                          </div>
                        <div class="form-group mt-2">
                            <input type="submit" class="btn btn-success" value="Save Blog" id="submit">
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
<script src="{{asset("backend/libs/js/tagify.min.js")}}"></script>

<script>
    $(document).ready(function() {
  $('.summernote').summernote({
    height: 250,   //set editable area's height
  });
  //script for tags
// Vanilla JavaScript
var input = document.querySelector('input[name=tags]'),
tagify =new Tagify( input );

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