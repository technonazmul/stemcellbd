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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Service Category</h3>
                    <a href="{{ route('admin.service_category') }}" class="btn btn-secondary btn-sm float-right">Back to List</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('admin.update_service_category', $service_category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" 
                                   value="{{ old('name', $service_category->name) }}" 
                                   placeholder="Enter category name" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="short_description">Short Description</label>
                            <textarea class="form-control" id="short_description" name="short_description" 
                                      rows="3" placeholder="Enter short description">{{ old('short_description', $service_category->short_description) }}</textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="parent_id">Parent Category</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="">Select Parent Category (Optional)</option>
                                @php
                                $parent_categories = App\Models\ServiceCategory::whereNull('parent_id')
                                    ->where('id', '!=', $service_category->id)
                                    ->get();
                                @endphp
                                @foreach ($parent_categories as $parent)
                                    <option value="{{ $parent->id }}" 
                                        {{ old('parent_id', $service_category->parent_id) == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Leave empty to make this a root category</small>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="image">Category Image</label>
                            @if($service_category->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/public/service_categories/' . $service_category->image) }}" 
                                         alt="{{ $service_category->name }}" 
                                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
                                    <p class="text-sm text-muted mt-1">Current image</p>
                                </div>
                            @endif
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <small class="text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB). Leave empty to keep current image.</small>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                            <a href="{{ route('admin.service_category') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection