@extends('backend.dashboard')
@section('add_doctor')
<div class="container">

    <!-- Display validation errors -->
    <form action="{{route('eb_form_submit')}}" method="Post">
        @csrf
      <div class="row ">  
        <div class="col-md-7 my-2 mx-auto">
            <h2 class="text-center">Add Doctor</h2>
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
                          <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label> <span style="color:red">*</span>
                        <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your email">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Specialization</label>
                        <input name="Specialization" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Specialization ">
                     </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Chember</label>
                            <input name="chember" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Chember Addrress ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Reaponsibility</label>
                            <input name="reaponsibility" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Reaponsibility " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                            <input name="facebook" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your facebook Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                            <input name="instagram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Instagram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telegram</label>
                            <input name="telegram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Telegram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                            <input name="linkedin" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Linkedin Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                            <input name="twitter" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Twitter Profile Link" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control" id="exampleFormControlInput1" placeholder="" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">About</label>
                            <textarea name="about" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      <button class="btn btn-lg btn-primary"> Add Doctor</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
</div>
@endsection