@extends('backend.dashboard')

@section('content')
<div class="container">
    <h2>Edit Step Section Header</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('step-section.update') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Section Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $section->title) }}" required>
        </div>

        <div class="form-group">
            <label for="subtitle">Section Subtitle</label>
            <textarea name="subtitle" class="form-control" rows="4" required>{{ old('subtitle', $section->subtitle) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Section</button>
    </form>
</div>
@endsection
