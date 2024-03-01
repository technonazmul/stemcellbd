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
            <h3>Add Blog Category</h3>
            <form method="POST" action="{{route('admin.add_blog_category')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Enter name"required>
                </div>
                <div></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
         <h3>All Blog Category</h3>
         <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0 @endphp
                @php
                $blog_categories = App\Models\BlogCategory::get();
                @endphp
                @foreach ($blog_categories as $blog_categories)
                <tr>
                    @php $i++@endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{$blog_categories->name}}</td>
                    <td><a href="{{route('admin.edit_blog_category',$blog_categories->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                    <td> <a href=""><button class="btn btn-sm btn-danger">Delate</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>                
    </div>
    
</div>
@endsection