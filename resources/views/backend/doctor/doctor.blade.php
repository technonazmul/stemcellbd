@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="text-center">Doctors list</h1>
    <div class="row">
        @foreach($doctor as $doctor)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset($doctor->image) }}" class="card-img-top" alt="Doctor Image">
                    <h5 class="card-title">{{ $doctor->name }}</h5>
                    <p class="card-text">Phone: {{ $doctor->phone }}</p>
                    <p class="card-text">Email: {{ $doctor->email }}</p>
                    <p class="card-text">Specialization: {{ $doctor->specialization }}</p>
                    <p class="card-text">Chamber: {{ $doctor->chamber }}</p>
                    <p class="card-text">Responsibility: {{ $doctor->responsibility }}</p>
                    <p class="card-text">Instagram: <a href="{{ $doctor->instagram }}" target="_blank">{{ $doctor->instagram }}</a></p>
                    <p class="card-text">Telegram: {{ $doctor->telegram }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection