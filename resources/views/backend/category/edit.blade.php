@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
           
            <h2>Edit Category</h2>
            <form action="{{route('update_product_category',$editcategory->id)}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$editcategory->name}}" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="parent_category">Parent Category</label>
                            
                            <select class="form-control" id="parent_category" name="parent_category">
                                @php 
                                $categories = App\Models\Category::where('parent_id', 0)->get();
                                @endphp
                                <option value="0" @if($editcategory->id == 0) selected @endif >Select Parent ID</option>
                                @foreach( $categories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @foreach(App\Models\Category::where('parent_id', $category->id)->get() as $subcategory)
                                <option value="{{ $subcategory->id }}" @if($editcategory->id == $subcategory->id) selected @endif>&nbsp; - {{ $subcategory->name }}</option>
                                @endforeach
                                @endforeach
                              
                            </select>
                          </div>
                        <div class="mt-2">
                            <input type="submit" class="btn btn-success" value="Save" id="submit">
                        </div>
        
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection
@if(Session::has("success"))
@section("extra_script")
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $( document ).ready(function() {
    var message = "{{Session::get('success')}} ";
    toastr.success(message);
});
</script>

@endsection
  @endif
