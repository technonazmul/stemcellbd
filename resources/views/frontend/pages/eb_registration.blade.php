@extends('frontend.layouts.template')
@section("eb_registration")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Products</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
    <div class="container">
        <form action="">
          <div class="row ">
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <h2 class="mx-auto">Early Bird Registration</h2>
                      <div class="card-body">
                          
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Name</label> <span style="color:red">*</span>
                              <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Email</label><span style="color:red">*</span>
                              <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Phone</label><span style="color:red">*</span>
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Address</label>
                              <input name="adderss" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Address">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Registration Type</label> <span style="color:red">*</span>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio1" value="option1">
                              <label class="form-check-label" for="exampleRadio1">
                                Patient (Self)
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio2" value="option2">
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
                              <input type="date" class="form-control" id="datepicker">
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Gender</label> <span style="color:red">*</span>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio1" value="option1">
                              <label class="form-check-label" for="exampleRadio1">
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio2" value="option2">
                              <label class="form-check-label" for="exampleRadio2">
                                Female
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio2" value="option3">
                              <label class="form-check-label" for="exampleRadio3">
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
                          <input type="condition" class="form-control" id="exampleFormControlInput1" placeholder="Current health condition">
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Previous Medical History</label> <span style="color:red">*</span>
                          <input type="medical_history" class="form-control" id="exampleFormControlInput1" placeholder="Previous Medical History">
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Treatment of Interest</label>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio1" value="option1">
                              <label class="form-check-label" for="exampleRadio1">
                                  Stem Cell Therapy
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio2" value="option2">
                              <label class="form-check-label" for="exampleRadio2">
                                  Conventional/Traditional Treatment
                              </label>
                            </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Preferred Consultation Date</label> <span style="color:red">*</span>
                              <input type="date" class="form-control" id="datepicker">
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Profession</label>
                              <input name="profession" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Profession">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Message</label>
                              <input name="message" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Message">
                          </div>
                      </div>
                  </div>
              </div>
    
              <div class="col-md-7 my-2 mx-auto">
                  <div class="card ">
                      <div class="card-body">
                          <label for="exampleFormControlInput1" class="form-label">Consent</label>
                          <p>I am giving permissions to Platinum Hospital stem Cell Centre to collect & store my data for further communication.</p>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio1" value="option1">
                              <label class="form-check-label" for="exampleRadio1">
                                  I Agree
                              </label>
                            </div>
                      </div>
                  </div>
              </div>
              <button type="button" class="btn btn-info text-center">Submit</button>
          </div>
           
          </form>  
      </div>

@endsection