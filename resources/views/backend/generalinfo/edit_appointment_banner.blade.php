@extends('backend.dashboard')

@section('content')
<div class="container mt-4">
    <h2>Update Appointment Banner</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('update-appointment-banner', 1) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST') {{-- Use POST if you're routing to a POST method. Use PUT if using Route::put() --}}

        <div class="form-group">
            <label for="image">Background Image <span class="text-danger">*</span></label><br>
            @if($banner->appointment_banner)
                <img src="{{ asset('storage/public/banners/' . $banner->appointment_banner) }}" alt="Current Banner" style="max-width: 300px; margin-bottom: 10px;">
            @endif
            <input type="file" class="form-control-file" name="image" id="image" required>
            @error('image')
                <small class="text-danger d-block">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
</div>
@endsection
