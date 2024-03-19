@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="text-center">Comment list</h1>
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
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Si.No</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Blog Title</th>
                <th>Blog Thumbnail</th>
                <th>Action</th>
                
            </tr>
        </thead>
        </thead>
        @php 
        $i=0;
        @endphp
        @foreach($blog_comment as $blog_comment)
            <tbody>
                <tr>
                    @php
                         $i++;
                         $total_reply=App\Models\Comment::where('parent_id',$blog_comment->id)->where('status','1')->count();
                         $painding_reply=App\Models\Comment::where('parent_id',$blog_comment->id)->where('status','0')->count();
                    @endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{$blog_comment->name}}</td>
                    <td>{{$blog_comment->comment}}</td>
                    <td>{{$blog_comment->blog_post->title}}</td>
                    <td><img src="{{asset('storage/blog/'.$blog_comment->blog_post->thumbnail)}}" alt="" style="max-width:90px;height:120px;"></td>
                    <td>
                        @if($blog_comment->status==0)
                        <a href="{{route('admin.approve_comment',$blog_comment->id)}}" class="btn btn-info btn-sm">Approve</a>
                        @else
                        <a class="btn btn-success btn-sm">Approved</a>
                        @endif
                        <a href="{{route('admin.delete_comment',$blog_comment->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        <a href="{{route('admin.show_reply',$blog_comment->id)}}" class="btn btn-warning btn-sm mt-1">@php echo "Reply(" . $total_reply . ")Need to Approve(" . $painding_reply . ")"; @endphp</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
    </table>
</div>
@endsection