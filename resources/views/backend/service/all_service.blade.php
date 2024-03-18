@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
<link rel="stylesheet" href="{{asset("backend/libs/css/tagify.css")}}">
@endsection
@section('content')
<div class="container">
    <h2 class="text-center">All Category</h2><hr>
    <div class="row">
       @foreach($service_category as $category)
       <div class="col-md-2 text-center">
            <div class="card card-body">
                <a class="btn btn-sm" href="{{route('admin.show_service',$category->id)}}">{{$category->name}}</a>
            </div>
       </div>
       @endforeach
    </div>
        @foreach($all_service as $service)

        @endforeach
        
</div>
@endsection