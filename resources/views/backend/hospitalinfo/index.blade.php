@extends('backend.dashboard')
@section('content')
    <a href="{{ route('hospitalinfo.create') }}" class="btn btn-success mb-2">Add New Info</a>
    <table class="table">
        <thead>
            <tr><th>Title</th><th>Description</th><th>Image</th><th>Action</th></tr>
        </thead>
        <tbody>
            @foreach ($infos as $info)
                <tr>
                    <td>{{ $info->title }}</td>
                    <td>{{ Str::limit($info->description, 100) }}</td>
                    <td>
                        @if ($info->image)
                            <img src="{{ asset('storage/public/hospitalinfos/' . $info->image) }}" height="50"/>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('hospitalinfo.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('hospitalinfo.destroy', $info->id) }}" method="POST" style="display:inline-block">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
