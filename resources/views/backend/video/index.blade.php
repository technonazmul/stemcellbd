@extends('backend.dashboard')

@section('content')
<div class="container">
    <h2>Video Section</h2>
    

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Video</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
            <tr>
                <td>
                    @if($video->thumb_image)
                        <img src="{{ asset('storage/public/' . $video->thumb_image) }}" alt="thumb" width="100" />
                    @endif
                </td>
                <td>{{ $video->title }}</td>
                <td>
                    @if($video->video_url)
                        <video width="150" controls>
                            <source src="{{ asset('storage/public/' . $video->video_url) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </td>
                <td>
                    <a href="{{ route('video.edit', $video->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('video.destroy', $video->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
