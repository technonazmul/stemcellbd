@extends('backend.dashboard')
@section('content')
<div class="container">
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
    <h3 class="text-center">All Blog Post</h3>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Si.No</th>
            <th scope="col">Title</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Tags</th>
            <th scope="col">User</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
            @php $i=0 @endphp
            @foreach($blog as $blog)
        <tbody>
          <tr>
            @php $i++@endphp
            <td>@php echo $i @endphp </td>
            <td>{{$blog->title}}</td>
            <td><img src="{{ asset('storage/blog/' . $blog->thumbnail) }}" class="card-img-top" alt="..." width="800" height="200"></td>
            <td>{{$blog->tags}} </td>
            <td>@if($blog->user){{$blog->user->name}}@endif </td>
            <td>
                <a href="" class="btn btn-sm btn-info">View</a>
                <a href="{{route('admin.edit_blog',$blog->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{route('admin.delete_blog', $blog->id)}}" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection