@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
<link rel="stylesheet" href="{{asset("backend/libs/css/tagify.css")}}">
@endsection
@section('content')
<h2 class="text-center">All Category</h2><hr>
    <div class="row">
        
       @foreach(App\Models\ServiceCategory::all() as $category)
       <div class="col-md-2 text-center">
            <div class="card card-body" style="@if($service_category->id == $category->id) background-color: green; @endif">
                <a class="btn btn-sm" href="{{route('admin.show_service',$category->id)}}">{{$category->name}}</a>
            </div>
       </div>
       @endforeach
    </div>
{{-- <h2 class="text-center">Service By Category</h2><hr> --}}
    <div class="row">
    </div>
@php
$service=App\Models\Service::where('service_category_id',$service_category->id)->get();
@endphp
@foreach($service as $service)
{{$service->title}}
@endforeach
@endsection