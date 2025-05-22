@extends('backend.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Upload New Image</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="image" class="form-label">Choose Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <button type="submit" class="btn btn-success">Upload</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
