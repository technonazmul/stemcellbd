@extends('frontend.layouts.template')
@section("extra_css")
<style>
    .sidebar__search form input, .shop__item, .shop__title, input, textarea, select {
    padding: 0;
}
</style>
@endsection
@section("eb_registration")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>Early Bird Registration</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Early Bird Registration</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
    <div class="container">

        <!-- Display validation errors -->
        <form action="{{route('eb_form_submit')}}" method="Post">
            @csrf
          <div class="row ">
            <div class="col-md-7 my-2 mx-auto">
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
                              <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer" required>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <label for="exampleFormControlInput1" class="form-label">Registration Type</label> <span style="color:red">*</span>
                        <div class="form-check">
                            <input name="registration_type" class="form-check-input" type="radio"  id="exampleRadio1" value="Patient (Self)"required>
                            <label class="form-check-label" for="exampleRadio1">
                              Patient (Self)
                            </label>
                          </div>
                          <div class="form-check">
                            <input name="registration_type" class="form-check-input" type="radio"  id="exampleRadio2" value="Relative" required>
                            <label class="form-check-label" for="exampleRadio2">
                              Relative
                            </label>
                          </div>
                    </div>
                </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <label for="exampleFormControlInput1" class="form-label">Date of Birth</label> <span style="color:red">*</span>
                            <input name="date_of_birth" type="date" class="form-control" id="datepicker" required>
                    </div>
                </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label> <span style="color:red">*</span>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"required>
                            <label class="form-check-label" for="male">
                              Male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"required>
                            <label class="form-check-label" for="female">
                              Female
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="others" value="others"required>
                            <label class="form-check-label" for="others">
                              Others
                            </label>
                          </div>
                    </div>
                </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Current Health Condition</label>
                          <input name="c_health_condition" type="condition" class="form-control" id="exampleFormControlInput1" placeholder="Your answer">
                      </div>
                  </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <label for="exampleFormControlInput1" class="form-label">Previous Medical History</label>
                        <input name="p_medical_history" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer">
                    </div>
                </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <label for="exampleFormControlInput1" class="form-label"> of Interest</label>
                        <div class="form-check">
                            <input name="treatment_of_interest[]" value="Stem Cell Therapy" class="form-check-input" type="checkbox" id="checkButton">
                            <label class="form-check-label" for="checkButton">
                                Stem Cell Therapy
                            </label>
                          </div>
                          <div class="form-check">
                            <input name="treatment_of_interest[]" value="Conventional/Traditional Treatment" class="form-check-input" type="checkbox"id="checkButton">
                            <label class="form-check-label" for="checkButton">
                                Conventional/Traditional Treatment
                            </label>
                          </div>
                    </div>
                </div>
              </div>
              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <label for="exampleFormControlInput1" class="form-label">Preferred Consultation Date</label>
                            <input name="preferred_date" type="date" class="form-control" id="datepicker">
                    </div>
                </div>
              </div>
              
              <div class="col-md-7 my-2 mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Profession</label>
                            <input name="profession" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer">
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Address (optional)</label>
                              <input name="address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email Address (optional)</label>
                              <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Phone</label><span style="color:red">*</span>
                              <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer"required>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Your Message (optional)</label>
                              <input name="message" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your answer">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label"><u>Consent</u></label><span class="float-end" style="color:red">*</span>
                          <p>I am giving permissions to Platinum Hospital stem Cell Centre to collect & store my data for further communication.</p>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="i_agreed" id="exampleRadio1" value="i agreed" required>
                              <label class="form-check-label" for="exampleRadio1">
                                  I Agree
                              </label>
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-7 my-2 mx-auto">
                  <button class="btn btn-lg btn-info">Submit</button>
                  <button type="reset" class="btn btn-outline-secondary float-end">Clear Form</button>
              </div>
         </div>
        </form>  
    </div>
@endsection