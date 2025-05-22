@extends('backend.dashboard')
@section('content')
<div class="container">
    <h2 class="text-center">Update Banner</h2>
    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
    <form action="{{ route('admin.update_banner', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Banner Title</label>
            <input type="text" id="title" name="title" class="form-control"
                   value="{{ old('title', $banner->title ?? '') }}" required>
        </div>

        {{-- Subtitle --}}
        <div class="mb-3">
            <label for="subtitle" class="form-label">Banner Subtitle</label>
            <textarea id="subtitle" name="subtitle" class="form-control" rows="3">{{ old('subtitle', $banner->subtitle ?? '') }}</textarea>
        </div>

        {{-- Button 1 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="button1_text" class="form-label">Button 1 Text</label>
                <input type="text" id="button1_text" name="button1_text" class="form-control"
                       value="{{ old('button1_text', $banner->button1_text ?? '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="button1_url" class="form-label">Button 1 URL</label>
                <input type="text" id="button1_url" name="button1_url" class="form-control"
                       value="{{ old('button1_url', $banner->button1_url ?? '') }}">
            </div>
        </div>

        {{-- Button 2 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="button2_text" class="form-label">Button 2 Text</label>
                <input type="text" id="button2_text" name="button2_text" class="form-control"
                       value="{{ old('button2_text', $banner->button2_text ?? '') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="button2_url" class="form-label">Button 2 URL</label>
                <input type="text" id="button2_url" name="button2_url" class="form-control"
                       value="{{ old('button2_url', $banner->button2_url ?? '') }}">
            </div>
        </div>

        {{-- Background Image --}}
        <div class="mb-3">
            <label for="background_image" class="form-label">Background Image</label>
            <input type="file" name="background_image" id="background_image" class="form-control">
            @if (!empty($banner->background_image))
                <div class="mt-2">
                    <img src="{{ asset('storage/public/' . $banner->background_image) }}" alt="Banner Background"
                         class="img-thumbnail" style="max-width: 300px;">
                </div>
            @endif
        </div>

        {{-- Optional Video --}}
        {{-- <div class="mb-3">
            <label for="video" class="form-label">Background Video (optional)</label>
            <input type="file" name="video" id="video" class="form-control">
            @if (!empty($banner->video))
                <div class="mt-2">
                    <video src="{{ asset('storage/public/' . $banner->video) }}" controls style="max-width: 300px;"></video>
                </div>
            @endif
        </div> --}}

        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
</div>
@endsection
{{-- @if(!@empty($banner))
    <form action="{{route('admin.update_banner',$banner)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12 card card-body">
                <h2 class="text-center">Update Banner</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif   
            </div>
            
        
        </div>
        <button class="btn btn-info btn-lg my-2">Update</button>
    </form>
    @endif --}}