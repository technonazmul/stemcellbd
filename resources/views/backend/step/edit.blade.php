@extends('backend.dashboard')
@section('content')
<div class="container-fluid">
    <h4>Edit Step</h4>
    <form action="{{ route('steps.update', $step->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Step Number</label>
            <input type="text" name="step_number" class="form-control" value="{{ $step->step_number }}" required>
        </div>
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $step->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $step->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset('storage/public/step/' . $step->image) }}" width="100">
        </div>
        <div class="mb-3">
            <label>New Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
