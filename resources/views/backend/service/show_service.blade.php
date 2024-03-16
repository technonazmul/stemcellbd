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
@endsection



{{-- @php
                        $services=App\Models\Service::where('service_category_id',$show_services->id)->get();
                    @endphp --}}