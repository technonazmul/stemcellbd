@extends('backend.dashboard')
@section('content')
    <h3>Edit Hospital Info</h3>
    <form action="{{ route('hospitalinfo.update', $info->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('backend.hospitalinfo._form')
    </form>
@endsection
