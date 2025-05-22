@extends('backend.dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Photo Gallery</h2>
        <a href="{{ route('gallery.create') }}" class="btn btn-primary">+ Add New</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @forelse($galleries as $image)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card">
                <img src="{{ asset('storage/public/gallery/' . $image->image) }}" class="card-img-top" alt="Gallery Image">
                <div class="card-body text-center">
                    <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No images found.</p>
        @endforelse
    </div>
</div>
@endsection
