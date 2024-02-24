@extends('backend.dashboard')
@section('content')
<div class="container">

    <!-- Display validation errors -->
    <form action="{{ route('admin.update_doctor', ['id' => $doctor->id]) }}" method="Post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
      <div class="row ">  
        <div class="col-md-7 my-2 mx-auto">
            <h2 class="text-center">Update Doctor Details</h2>
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
        </div>
          <div class="col-md-7 my-2 mx-auto">
              <div class="card ">
                  <div class="card-body"> 
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Name</label> <span style="color:red">*</span>
                          <input name="name" value="{{$doctor->name}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label> <span style="color:red">*</span>
                        <input name="phone" value="{{$doctor->phone}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label><span style="color:red">*</span>
                        <input name="email" value="{{$doctor->email}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your email" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Specialization</label>
                        <input name="Specialization" value="{{$doctor->specialization}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Specialization ">
                     </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Chamber</label>
                            <input name="chamber" value="{{$doctor->chamber}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Chamber Addrress ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Responsibility</label>
                            <input name="responsibility" value="{{$doctor->responsibility}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your responsibility " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Experience</label>
                            <input name="experience" value="{{$doctor->experience}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your experience " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                            <input name="facebook" value="{{$doctor->facebook}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your facebook Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                            <input name="instagram" value="{{$doctor->instagram}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Instagram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telegram</label>
                            <input name="telegram" value="{{$doctor->telegram}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Telegram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                            <input name="linkedin" value="{{$doctor->linkedin}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Linkedin Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                            <input name="twitter" value="{{$doctor->twitter}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Twitter Profile Link" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <img style="width:200px;height:150px;" src="{{asset('storage/doctors/'.$doctor->image)}}" class="card-img-top" alt="...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control" id="exampleFormControlInput1" placeholder="" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">About</label>
                            <textarea name="about" value="{{$doctor->about}}" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$doctor->about}}</textarea>
                        </div>
                      <button class="btn btn-lg btn-primary">Update</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
</div>
@endsection