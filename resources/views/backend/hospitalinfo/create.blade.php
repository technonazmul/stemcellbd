@extends('backend.dashboard')
@section('content')
    <h3>Create Hospital Info</h3>
    <form action="{{ route('hospitalinfo.store') }}" method="POST" enctype="multipart/form-data">
        @include('backend.hospitalinfo._form')
    </form>
@endsection
