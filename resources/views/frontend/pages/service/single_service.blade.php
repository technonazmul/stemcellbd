@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{$single_service->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$single_service->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->

    <!-- ==========Service Section Start Here========== -->
    <div class="service service--details section-bg padding-tb">
        <div class="container">
            <div class="row flex-row-reverse g-4">
                <div class="col-lg-8 col-12">
                    <div class="service__maincontent">
                        <img src="{{asset('storage/public/service/'.$single_service->thumbnail)}}" alt="webcode" class="mb-4 w-100">
                        <h5>{{$single_service->title}}</h5>
                        <p>{!!$single_service->description !!}</p>
                        {{-- <div class="row g-4 mb-4 mt-3">
                            <div class="col-xl-6 col-12">
                                <video src="assets/video/02.mp4" muted="" loop="" autoplay="" class="w-100"></video>
                            </div>
                            <div class="col-xl-6 col-12">
                                <p>Holistic are empowe ethca mperatives through distinctivey ncubate best of breed that solution cent focusd customer service through website</p>

                                <p>Holistic are empowe ethca mperatives through distinctivey ncubate best of breed that solution cent focusd customer service through website.</p>
                            </div>
                        </div>
                        <h5>Experienced People can help you more.</h5>
                        <p>Our consultants believe the value that you manage your reguator compliance poice procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>

                        <div class="row g-4 mb-4 mt-3 flex-row-reverse">
                            <div class="col-xl-6 col-12">
                                <iframe src="https://www.youtube.com/embed/S-CvC4BAIIo?si=69QFYU0dSBNLim8k" frameborder="0" allowfullscreen height="250px" class="w-100"></iframe>
                            </div>
                            <div class="col-xl-6 col-12">
                                <h5>Quality We Ensure</h5>
                                <p>Holistc are empower ethcal imperatv thrugh distinctvely incubate best breed that solutns clents focused customer servce thru website</p>

                                <p>Holistc are empower ethcal imperatv thrugh distinctvely incubate best breed that solutns focused customer thru website</p>
                            </div>
                        </div> --}}
                        
                        @include('frontend.flashmessage')
                        <h5 class="mb-4">Get A Free Consultancy</h5>
                        <form action="{{route('free_consultancy')}}" id="contact-form" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Name*" name="name" id="name" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Company" name="company" id="company">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="email" placeholder="Email*" name="email" id="email" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Subject" name="subject" id="subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="massage" rows="5" placeholder="Massage*" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="lab-btn">send your massage</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sidebar">
                        

                        <div class="sidebar__appointment mt-0">
                            <div class="appointment">
                                <div class="appointment__content">
                                    <div class="head">
                                        <h6>Take an Appointment</h6>
                                        @include('frontend.flashmessage')
                                    </div>
                                    <form action="{{route('admin.take_appointment')}}" method="post">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <input name="name" type="text" placeholder="full name*" required>
                                            </div>
                                            <div class="col-12">
                                                <input name="phone" type="text" placeholder="Phone Number" required>
                                            </div>
                                            <div class="col-12">
                                                <input name="email" type="email" placeholder="email address" required>
                                            </div>
                                            <div class="col-12">
                                                <select required>
                                                    <option value="">Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <input type="date" min="<?php echo date('Y-m-d'); ?>" required >
                                            </div>
                                            <div class="col-12">
                                                @php
                                                $data=App\Models\Treatment_type::all();
                                                @endphp
                                                <select name="treatment_types" required> <!-- Added the name attribute here -->
                                                    <option value="">Need Appointment for</option>
                                                    @foreach($data as $data)
                                                    <option value="{{$data->title}}">{{$data->title}}</option>
                                                    @endforeach
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <textarea name="message" rows="4" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="lab-btn">take an appointment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__help">
                            <div class="head">
                                <h6>Need any Help?</h6>
                            </div>
                            <div class="body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2272993019737!2d90.3865760744707!3d23.73927258920508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b99cc3c9ec8d%3A0x8e45044745bdba5e!2sWebCode%20Ltd.!5e0!3m2!1sen!2sbd!4v1697023353911!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/sidebar/icon/01.png" alt="webcode">
                                        </div>
                                        <div class="content">
                                            <p>Monday - Friday</p>
                                            <p><b>8:00 AM - 6: 00 PM</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/sidebar/icon/02.png" alt="webcode">
                                        </div>
                                        <div class="content">
                                            <p>Email Address</p>
                                            <p><b>yourmail@gmail.com</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/sidebar/icon/03.png" alt="webcode">
                                        </div>
                                        <div class="content">
                                            <p>Donato Parkway</p>
                                            <p><b>12 Tottina United State 1200</b></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->
@endsection