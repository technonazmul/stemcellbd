@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="text-center">Doctors list</h1>
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
                <th>Reply</th>
                <th>Blog Title</th>
                <th>Blog Thumbnail</th>
                <th>Action</th>
                
            </tr>
        </thead>
        </thead>
        @php $i=0 @endphp
        @foreach($show_reply as $show_reply)
            <tbody>
                <tr>
                    @php $i++@endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{$show_reply->name}}</td>
                    <td>{{$show_reply->comment}}</td>
                    <td>{{$show_reply->blog_post->title}}</td>
                    <td><img src="{{asset('storage/blog/'.$show_reply->blog_post->thumbnail)}}" alt="" style="max-width:90px;height:120px;"></td>
                    <td>
                        @if($show_reply->status==0)
                        <a href="{{route('admin.aprouve_comment',$show_reply->id)}}" class="btn btn-info btn-sm">Approve</a>
                        @else
                        <a class="btn btn-success btn-sm">Approved</a>
                        @endif
                        <a href="{{route('admin.delete_comment',$show_reply->id)}}" class="btn btn-danger btn-sm mt-2">Delete</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
    </table>
</div>
@endsection