@extends('backend.dashboard')
@section('content')
<div class="container">

    <!-- Display validation errors -->
    <form action="{{route('save_doctor')}}" method="Post" enctype="multipart/form-data">
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
                        <label for="exampleFormControlInput1" class="form-label">Phone</label> 
                        <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your email" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Specialization</label>
                        <input name="Specialization" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Specialization ">
                     </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Chamber</label>
                            <input name="chamber" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Chamber Addrress ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Responsibility</label>
                            <input name="responsibility" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your responsibility " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Experience</label>
                            <input name="experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your experience " >
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
                            <input name="image" type="file" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">About</label>
                            <textarea name="about" class="form-control @section('extra_script')
                            <script>
                                 $(document).ready(function() {
                              $('.summernote').summernote({
                                height: 150
                              });
                            });
                            </script>
                            @endsection" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      <button class="btn btn-lg btn-primary"> Add Doctor</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
</div>
@endsection
@section('extra_script')
<script>
     $(document).ready(function() {
  $('.summernote').summernote({
    height: 150
  });
});
</script>
@endsection