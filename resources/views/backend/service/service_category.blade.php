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
        <div class="col-md-5">
            <h3>Add Service Category</h3>
            <form method="POST" action="{{route('admin.add_service_category')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="{{ old('name') }}" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="short_description">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Enter short description">{{ old('short_description') }}</textarea>
                </div>
                
                <div class="form-group mb-3">
                    <label for="parent_id">Parent Category</label>
                    <select class="form-control" id="parent_id" name="parent_id">
                        <option value="">Select Parent Category (Optional)</option>
                        @php
                        $parent_categories = App\Models\ServiceCategory::whereNull('parent_id')->get();
                        @endphp
                        @foreach ($parent_categories as $parent)
                            <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                                {{ $parent->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label for="image">Category Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <small class="text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <div class="col-md-7">
            <h3>All Service Categories</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Si.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Parent Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0; @endphp
                        @php
                        $service_categories = App\Models\ServiceCategory::with('parent')->get();
                        @endphp
                        @foreach ($service_categories as $service_category)
                        <tr>
                            @php $i++ @endphp
                            <td>{{ $i }}</td>
                            <td>
                                @if($service_category->image)
                                    <img src="{{ asset('storage/public/service_categories/' . $service_category->image) }}" 
                                         alt="{{ $service_category->name }}" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $service_category->name }}</td>
                            <td>
                                @if($service_category->parent)
                                    <span class="badge badge-info">{{ $service_category->parent->name }}</span>
                                @else
                                    <span class="text-muted">Root Category</span>
                                @endif
                            </td>
                            <td>
                                @if($service_category->short_description)
                                    {{ Str::limit($service_category->short_description, 50) }}
                                @else
                                    <span class="text-muted">No description</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.edit_service_category',$service_category->id)}}">
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                </a>
                                <a href="{{route('admin.delete_service_category', $service_category->id)}}" 
                                   onclick="return confirm('Are you sure? This will also delete all subcategories and associated services.')">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection