@extends('backend.dashboard')
@section('content')
<div class="container">
    <form method="POST" action="{{route('admin.update_treatmen_types',['id'=>$data->id])}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" placeholder="Enter title"required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection