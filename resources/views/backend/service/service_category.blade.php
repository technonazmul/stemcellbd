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
            <h3>Add service Category</h3>
            <form method="POST" action="{{route('admin.add_service_category')}}">
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
         <h3>All service Category</h3>
         <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Name</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp
                @php
                $service_category = App\Models\ServiceCategory::get();
                @endphp
                @foreach ($service_category as $service_category)
                <tr>
                    @php $i++@endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{$service_category->name}}</td>
                    <td>
                        <a href="{{route('admin.edit_service_category',$service_category->id)}}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        <a href="{{route('admin.delete_service_category', $service_category->id)}}" onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-danger">Delate</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>                
    </div>
    
</div>
@endsection
