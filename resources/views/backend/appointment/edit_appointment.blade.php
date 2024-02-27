@extends('backend.dashboard')
@section('content')
<div class="container">
    <h2 class="text-center mb-5">Edit Appointment</h2>
    <div class="row">
        <div class="col-md-6 mx-auto">
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
            <form method="post" action="{{route('admin.update_appointment',['id'=>$data->id])}}">
                @csrf
                {{-- <input type="hidden" name="data_id" value="{{ $data->id }}"> --}}
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input name="name" value="{{$data->name}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone</label>
                            <input name="phone" value="{{$data->phone}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input name="email" value="{{$data->email}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gender</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender"required>
                                <option value="{{$data->gender}}" selected>{{$data->gender}}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Treatment Type</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="treatment_types"required>
                                <option name="treatment_types" value="{{$data->treatment_types}}" secleted> {{$data->treatment_types}}</option>
                                @foreach($data_2 as $data_2)
                                <option name="treatment_types" value="{{$data_2->title}}">{{$data_2->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date</label>
                            <input id="datepicker" value="{{$data->date}}" name="date" type="date" min="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Message</label>
                            <input name="message" value="{{$data->message}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Message" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Status</label>
                            <input name="status" value="{{$data->status}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Status" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Note</label>
                            <input name="notes" value="{{$data->notes}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Note" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div> 
            </form>    
        </div> 
    </div>
    
</div>
@endsection