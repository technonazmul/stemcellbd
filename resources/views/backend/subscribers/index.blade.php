@extends('backend.dashboard')

@section('content')
<h2>Subscribers List</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Subscribed At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subscribers as $subscriber)
        <tr>
            <td>{{ $subscriber->id }}</td>
            <td>{{ $subscriber->email }}</td>
            <td>{{ $subscriber->created_at }}</td>
            <td>

                <div class="d-flex">
                <a href="mailto:{{ $subscriber->email }}" class="btn btn-primary btn-sm me-2">Email</a>
                &nbsp;
                &nbsp;
                <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this subscriber?')">Delete</button>
                </form>
            </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
