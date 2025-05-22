@extends('backend.dashboard')

@section('content')
<a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary mb-3">Edit About</a>
<div>
    <h2>{{ $about->headline }}</h2>
    <h6>{{ $about->sub_headline }}</h6>
    <p>{{ $about->description }}</p>
    <p><strong>{{ $about->experience_years }}+</strong> {{ $about->experience_text }}</p>
    <img src="{{ asset('storage/public/about/' . $about->image) }}" width="200" alt="Main Image">
    <img src="{{ asset('storage/public/about/' . $about->icon) }}" width="100" alt="Icon Image">
</div>
@endsection
