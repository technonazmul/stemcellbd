@extends('backend.dashboard')
@section('content')
<div class="container">
    <form action="{{route('admin.update_general_info',$general_info)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12 card card-body">
                <h2 class="text-center">Update General Information</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input value="{{$general_info->email}}" name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hotline</label>
                    <input value="{{$general_info->hotline}}" name="hotline" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hotline">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enquiry Number</label>
                    <input value="{{$general_info->enquiry_number}}" name="enquiry_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enquiry Number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Appointment Number</label>
                    <input value="{{$general_info->appointment_number}}" name="appointment_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Appointment Number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                
                            <textarea name="address" class="form-control @section('extra_script')
                                <script>
                                    $(document).ready(function() {
                                $('.summernote').summernote({
                                    height: 150
                                });
                                });
                                </script>
                                @endsection" id="exampleFormControlTextarea1" rows="3">
                                {{$general_info->address}}
                            </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Help Email</label>
                    <input value="{{$general_info->help_email}}" name="help_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Help Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Suport Email</label>
                    <input value="{{$general_info->support_email}}" name="support_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Suport Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">About Us</label>
                    <textarea  name="about_us" class="form-control @section('extra_script')
                                <script>
                                    $(document).ready(function() {
                                $('.summernote').summernote({
                                    height: 150
                                });
                                });
                                </script>
                                @endsection" id="exampleFormControlTextarea1" rows="3">
                                {{$general_info->about_us}}
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                    <input name="facebook" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Facebook" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                    <input name="instagram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Instagram" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Youtube</label>
                    <input name="youtube" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Youtube" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                    <input name="twitter" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Twitter" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                    <input name="linkedin" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Linkedin" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telegram</label>
                    <input name="telegram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telegram" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">CopyRight</label>
                    <input value="{{$general_info->copyright}}" name="copyright" type="text" class="form-control" id="exampleFormControlInput1" placeholder="CopyRight">
                </div>
            </div>
        
        </div>
        <button class="btn btn-info btn-lg my-2">Update</button>
    </form>
</div>
@endsection