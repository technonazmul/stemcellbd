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
                    {{-- popup button --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$doctor->id}}">
                        See More
                      </button>
                    <a href="{{ route('admin.edit_doctor', ['id' => $doctor->id]) }}">
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('admin.delete_doctor', ['id' => $doctor->id]) }}">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
                {{-- popup details  --}}
                <div class="modal fade" id="exampleModal{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Doctor details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-body">
                                <h3>Name: {{$doctor->name}}</h3>
                                <p>Phone: {{$doctor->phone}}</p>
                                <p>Email: {{$doctor->email}}</p>
                                <p>Specialization: {{$doctor->specialization}}</p>
                                <p>Chamber: {{$doctor->chamber}}</p>
                                <p>Responsibility: {{$doctor->responsibility}}</p>
                                <p>Experience: {{$doctor->experience}}</p>
                                <p>Facebook: {{$doctor->facebook}}</p>
                                <p>Instagram: {{$doctor->instagram}}</p>
                                <p>Telegram: {{$doctor->telegram}}</p>
                                <p>LinkedIn: {{$doctor->linkedin}}</p>
                                <p>Twitter: {{$doctor->twitter}}</p>
                                <p>About: {{$doctor->about}}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                </div>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
                        