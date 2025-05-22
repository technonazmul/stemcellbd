@extends('backend.dashboard')

@section('content')
<div class="container">
    <h2>{{ isset($video) ? 'Edit' : 'Create' }} Video Section</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form 
        action="{{ isset($video) ? route('video.update', $video->id) : route('video.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($video))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Thumbnail Image</label>
            <input type="file" name="thumb_image" class="form-control" accept="image/*" />
            @if(isset($video) && $video->thumb_image)
                <img src="{{ asset('storage/public/' . $video->thumb_image) }}" width="150" alt="thumb" />
            @endif
        </div>

        <div class="mb-3">
            <label>Video File (MP4)</label>
            <input type="file" name="video_url" class="form-control" accept="video/mp4" />
            @if(isset($video) && $video->video_url)
                <video width="150" controls>
                    <source src="{{ asset('storage/public/' . $video->video_url) }}" type="video/mp4" />
                </video>
            @endif
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $video->title ?? '') }}" required />
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $video->description ?? '') }}</textarea>
        </div>

        <hr>
        <h4>Stat 1</h4>

        <div class="mb-3">
            <label>Stat 1 Icon</label>
            <input type="file" name="stat1_icon" class="form-control" accept="image/*" />
            @if(isset($video) && $video->stat1_icon)
                <img src="{{ asset('storage/public/' . $video->stat1_icon) }}" width="50" alt="icon1" />
            @endif
        </div>

        <div class="mb-3">
            <label>Stat 1 Number</label>
            <input type="text" name="stat1_number" class="form-control" value="{{ old('stat1_number', $video->stat1_number ?? '') }}" />
        </div>

        <div class="mb-3">
            <label>Stat 1 Text</label>
            <input type="text" name="stat1_text" class="form-control" value="{{ old('stat1_text', $video->stat1_text ?? '') }}" />
        </div>

        <hr>
        <h4>Stat 2</h4>

        <div class="mb-3">
            <label>Stat 2 Icon</label>
            <input type="file" name="stat2_icon" class="form-control" accept="image/*" />
            @if(isset($video) && $video->stat2_icon)
                <img src="{{ asset('storage/public/' . $video->stat2_icon) }}" width="50" alt="icon2" />
            @endif
        </div>

        <div class="mb-3">
            <label>Stat 2 Number</label>
            <input type="text" name="stat2_number" class="form-control" value="{{ old('stat2_number', $video->stat2_number ?? '') }}" />
        </div>

        <div class="mb-3">
            <label>Stat 2 Text</label>
            <input type="text" name="stat2_text" class="form-control" value="{{ old('stat2_text', $video->stat2_text ?? '') }}" />
        </div>

        <hr>

        <div class="mb-3">
            <label>Button URL</label>
            <input type="url" name="button_url" class="form-control" value="{{ old('button_url', $video->button_url ?? '') }}" />
        </div>

        <div class="mb-3">
            <label>Button Text</label>
            <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $video->button_text ?? '') }}" />
        </div>

        <button type="submit" class="btn btn-success">{{ isset($video) ? 'Update' : 'Create' }}</button>
    </form>
</div>
@endsection
