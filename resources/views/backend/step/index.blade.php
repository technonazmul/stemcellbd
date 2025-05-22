@extends('backend.dashboard')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Step List</h4>
        <a href="{{ route('steps.create') }}" class="btn btn-success">Add Step</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Step Number</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($steps as $key => $step)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $step->step_number }}</td>
                <td>{{ $step->title }}</td>
                <td>{{ Str::limit($step->description, 50) }}</td>
                <td><img src="{{ asset('storage/public/step/' . $step->image) }}" width="60"></td>
                <td>
                    <a href="{{ route('steps.edit', $step->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('steps.destroy', $step->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection