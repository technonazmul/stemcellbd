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
    <div class="row">
        <div class="col-md-4">
            <h3>Edit Blog Category</h3>
            <form method="post" action="{{route('admin.update_blog_category',$blog_category->id)}}">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="name" value="{{$blog_category->name}}" placeholder="Enter name"required>
                </div>
                <div></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection