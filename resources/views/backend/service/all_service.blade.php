@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
<link rel="stylesheet" href="{{asset("backend/libs/css/tagify.css")}}">
@endsection
@section('content')
<div class="container">
    <h2 class="text-center">All Services Category</h2>
    <div class="row">

        @foreach($service_category as $service_category)
        <div class="col-md-2">
            <a href="{{route('admin.show_service',$service_category)}}" class="btn btn-sm card card-body">{{ucfirst($service_category->name)}}</a>
        </div>
        @endforeach
    </div>
    @yield('content')
</div>

@endsection