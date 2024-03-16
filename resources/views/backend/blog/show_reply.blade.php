@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="text-center">Comment and Reply list</h1>
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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Si.No</th>
                <th scope="col">Name</th>
                <th scope="col">Comment</th>
                <th scope="col">Blog Title</th>
                <th scope="col">Blog Thumbnail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        </thead>
        @php $i=0 @endphp
            <tbody>
                <tr>
                    @php $i++@endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{$show_comment->name}}</td>
                    <td>{{$show_comment->comment}}</td>
                    <td>{{$show_comment->blog_post->title}}</td>
                    <td><img src="{{asset('storage/blog/'.$show_comment->blog_post->thumbnail)}}" alt="" style="max-width:90px;height:120px;"></td>
                    <td>
                        @if($show_comment->status==0)
                        <a href="{{route('admin.aprouve_comment',$show_comment->id)}}" class="btn btn-info btn-sm">Approve</a>
                        @else
                        <a class="btn btn-success btn-sm">Approved</a>
                        @endif
                        <a href="{{route('admin.delete_comment',$show_comment->id)}}" class="btn btn-danger btn-sm mt-2">Delete</a>
                    </td>
                </tr>
            </tbody>
    </table>
    <hr>
    <table class="table">
        <h1 class="text-center">Reply</h1>
        <thead>
            <tr>
                <th scope="col">Si.No</th>
                <th scope="col">Name</th>
                <th scope="col">Comment</th>
                <th scope="col">Blog Title</th>
                <th scope="col">Blog Thumbnail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        </thead>
        @php $i=0; @endphp
        @php
        $reply= App\Models\Comment::where('parent_id',$show_comment->id)->get();
        @endphp
        @foreach($reply as $reply)
            <tbody>
                <tr>
                    @php $i++@endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{$reply->name}}</td>
                    <td>{{$reply->comment}}</td>
                    <td>{{$reply->blog_post->title}}</td>
                    <td><img src="{{asset('storage/blog/'.$show_comment->blog_post->thumbnail)}}" alt="" style="max-width:90px;height:120px;"></td>
                    <td>
                        @if($reply->status==0)
                        <a href="{{route('admin.approve_comment',$reply->id)}}" class="btn btn-info btn-sm">Approve</a>
                        @else
                        <a class="btn btn-success btn-sm">Approved</a>
                        @endif
                        <a href="{{route('admin.delete_comment',$reply->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>
@endsection