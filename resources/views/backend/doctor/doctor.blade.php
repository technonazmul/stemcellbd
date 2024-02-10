@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="text-center">Doctors list</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Si.No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Specialization</th>
                <th>Image</th>
                <th>Action</th>
                
            </tr>
        </thead>
        </thead>
        @php $i=0 @endphp
        @foreach($doctor as $doctor)
        <tbody>
            <tr>
                @php $i++@endphp
                <td> @php echo $i @endphp </td>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->specialization}}</td>
                <td> <img height="200" width="80" src="{{asset('storage/doctors/'.$doctor->image)}}" class="card-img-top" alt="..."></td>
                <td>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample{{$doctor->id}}" aria-expanded="false" aria-controls="collapseExample{{$doctor->id}}">
                        View More
                    </button>
                    <a href="{{ route('admin.edit_doctor', ['id' => $doctor->id]) }}">
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('admin.delete_doctor', ['id' => $doctor->id]) }}">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                    <div class="collapse" id="collapseExample{{$doctor->id}}">
                        <div class="card card-body">
                            <h3>Name: {{$doctor->name}}</h3>
                            <p>Phone: {{$doctor->phone}}</p>
                            <p>Email: {{$doctor->email}}</p>
                            <p>Specialization: {{$doctor->specialization}}</p>
                            <p>Chamber: {{$doctor->chamber}}</p>
                            <p>Responsibility: {{$doctor->responsibility}}</p>
                            <p>Facebook: {{$doctor->facebook}}</p>
                            <p>Instagram: {{$doctor->instagram}}</p>
                            <p>Telegram: {{$doctor->telegram}}</p>
                            <p>LinkedIn: {{$doctor->linkedin}}</p>
                            <p>Twitter: {{$doctor->twitter}}</p>
                            <p>About: {{$doctor->about}}</p>
                        </div>
                    </div>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
