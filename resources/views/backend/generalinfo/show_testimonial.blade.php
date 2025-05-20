@extends('backend.dashboard')
@section("extra_css")
<link rel="stylesheet" href="{{asset("backend/vendor/drug-drop-image-upload/image-uploader.css")}}">
<link rel="stylesheet" href="{{asset("backend/libs/css/tagify.css")}}">
@endsection
@section('content')
<div class="container">
    <h2 class="text-center">All testimonial</h2><hr>
    <div class="row">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                  <th scope="col">Si.No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Author</th>
                  <th scope="col">Text</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              @php
              $i=0;
              @endphp
              @foreach(App\Models\Testimonial::orderBy('created_at', 'desc')->get()  as $testimonial)
              @php $i++ @endphp
              <tbody>
                <td scope="row">{{ $i }}</td>
                <td>{{$testimonial->name}}</td>
                <td>{{$testimonial->author}}</td>
                <td>{!! Illuminate\Support\Str::limit(strip_tags($testimonial->text),30) !!}</td>
                <td> <img src="{{asset('storage/public/testimonial/'.$testimonial->image)}}" style="height:80px;width:auto;"> </td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{route('admin.edit_testimonial',$testimonial->id)}}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{route('admin.delete_testimonial',$testimonial->id)}}">Delete</a>
                </td>
                <tbody>
            @endforeach
        </table>
    </div>
        
</div>
@endsection