@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>Take best qualitytreatment....</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Take best qualitytreatment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ==========Blog Section Start Here========== -->
    <div class="blog blog--single padding-tb" id="blog">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__thumb">
                                        <img src="{{asset('frontend/assets/images/blog/01.jpg')}}" alt="webcodeltd">
                                    </div>
                                    <div class="blog__content">
                                        <h4>Take best qualitytreatment for Ultimate Wellness</h4>
                                        <ul>
                                            <li><i class="fa-solid fa-calendar"></i> 08 October 2023</li>
                                            <li><i class="fa-regular fa-folder"></i> Beautification</li>
                                        </ul>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>

                                        <img src="{{asset('frontend/assets/images/blog/01')}}" alt="webcodeltd">

                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>

                                        <video src="{{asset('frontend/assets/video/02.mp4')}}" muted="" loop="" autoplay=""></video>

                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>

                                        <iframe src="https://www.youtube.com/embed/S-CvC4BAIIo?si=69QFYU0dSBNLim8k" frameborder="0" allowfullscreen></iframe>

                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus tenetur nulla quas assumenda ipsum odio tempore itaque incidunt eveniet quia mollitia deserunt dolorum culpa magnam cumque provident, sunt ipsa! Dolore commodi quas repellat impedit magnam ipsa, quo cum culpa alias vitae odit quia facere et iure repellendus, obcaecati ipsum facilis.</p>
                                    </div>
                                </div>

                                <div class="tags-section">
                                    <ul class="tags">
                                        <li><span><i class="fa-solid fa-share-nodes"></i></span></li>
                                        <li><a href="#">cosmix</a></li>
                                        <li><a href="#">X-ray</a></li>
                                        <li><a href="#">therapy</a></li>
                                    </ul>
                                    <ul class="social-link-list d-flex flex-wrap">
                                        <li><a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                                <div class="blog__author">
                                    <div class="thumb">
                                        <img src="{{asset('frontend/assets/images/team/01.jpg')}}" alt="webcodeltd">
                                    </div>
                                    <div class="content">
                                        <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                        <span>Dermatologist</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fugit consequatur? Quos voluptatem dolore dolores non dignissimos deserunt doloribus expedita reiciendis magnam! Magni fugit dignissimos a, iste consectetur odit.</p>
                                        <ul class="social-link-list d-flex flex-wrap">
                                            <li><a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="blog__comment">
                                    <div class="head">
                                        <h6>3 Replies to “Tips for Achieving Success”</h6>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode">
                                                </div>
                                                <div class="content">
                                                    <div class="content__top">
                                                        <div class="name">
                                                            <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                                            <span>24 March 2023 , at 02:00 pm</span>
                                                        </div>
                                                        <div class="reply"><a href="#">reply</a></div>
                                                    </div>
                                                    <div class="content__bottom">
                                                        <p>Sedut perspicati und omnis istesre natu error sitilei voluptatem accusantium doloremque laudantium totam rem aperiam eaque</p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('frontend/assets/images/team/02.jpg')}}" alt="webcode">
                                                        </div>
                                                        <div class="content">
                                                            <div class="content__top">
                                                                <div class="name">
                                                                    <h6>Dr. william Watson</h6>
                                                                    <span>23 March 2023 , at 02:00 pm</span>
                                                                </div>
                                                                <div class="reply"><a href="#">reply</a></div>
                                                            </div>
                                                            <div class="content__bottom">
                                                                <p>Sedut perspicatis unde omnis istesre natus error sitilei voluptatem in accusantium doloremque laudantium totam rem aperiam eaque</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('frontend/assets/images/team/03.jpg')}}" alt="webcode">
                                                </div>
                                                <div class="content">
                                                    <div class="content__top">
                                                        <div class="name">
                                                            <h6>Dr. Umme Nishat</h6>
                                                            <span>26 March 2023 , at 02:00 pm</span>
                                                        </div>
                                                        <div class="reply"><a href="#">reply</a></div>
                                                    </div>
                                                    <div class="content__bottom">
                                                        <p>Sedut perspicati und omnis istesre natu error sitilei voluptatem accusantium doloremque laudantium totam rem aperiam eaque</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="blog__commentForm">
                                    <div class="head">
                                        <h6>Leave A Comment</h6>
                                    </div>
                                    <div class="body">
                                        <form action="#">
                                            <input type="text" placeholder="Your Name">
                                            <input type="email" placeholder="Your Email">
                                            <input type="text" placeholder="Phone Number">
                                            <input type="text" placeholder="Subject">
                                            <textarea cols="30" rows="5" placeholder="Enter Your Message"></textarea>
                                            <button type="submit" class="lab-btn">post comments</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="sidebar__search">
                                <div class="head">
                                    <h6>Search Your Keywords</h6>
                                </div>
                                <div class="body">
                                    <form action="#">
                                        <input type="text" placeholder="Search Here">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar__appointment">
                                <div class="appointment">
                                    <div class="appointment__content">
                                        <div class="head">
                                            <h6>Take an Appointment</h6>
                                        </div>
                                        <form method="post" action="{{route('admin.take_appointment')}}">
                                            @csrf
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <input name="name" type="text" placeholder="full name*" required>
                                                </div>
                                                <div class="col-12">
                                                    <input name="phone" type="text" placeholder="Phone Number">
                                                </div>
                                                <div class="col-12">
                                                    <input name="email" type="email" placeholder="email address">
                                                </div>
                                                <div class="col-12">
                                                    <select required>
                                                        <option name="gender" value="">Sex</option>
                                                        <option name="gender" value="Male">Male</option>
                                                        <option name="gender" value="Female">Female</option>
                                                        <option name="gender" value="Others">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input  name="date" type="date" min="<?php echo date('Y-m-d'); ?>" required>
                                                </div>
                                                <div class="col-12">
                                                    <select required>
                                                        <option name="" value="">Need Appointment for</option>
                                                        @foreach($data as $data)
                                                        <option name="treatment_type" value="{{$data->title}}">{{$data->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="message" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="lab-btn">take an appointment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__recentpost">
                                <div class="head">
                                    <h6>Most Popular Post</h6>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="{{asset('frontend/assets/images/blog/01.jpg')}}" alt="webcode"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-single.html">Consulting reportng qounc arei could more.</a></h6>
                                                <span>June 20, 2023</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="{{asset('frontend/assets/images/blog/02.jpg')}}" alt="webcode"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-single.html">Find the right path for your group course online</a></h6>
                                                <span>June 22, 2023</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="{{asset('frontend/assets/images/blog/03.jpg')}}" alt="webcode"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="blog-single.html">Learn doing with real world projects other countries</a></h6>
                                                <span>June 24, 2023</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar__categorie">
                                <div class="head">
                                    <h6>all Categories</h6>
                                </div>
                                <div class="body">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Advices</a>
                                                <span>02</span>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Business</a>
                                                <span>04</span>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Consulting</a>
                                                <span>06</span>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Marketing</a>
                                                <span>08</span>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Personal</a>
                                                <span>03</span>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Strategy</a>
                                                <span>07</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__tags">
                                <div class="head">
                                    <h6>Our Popular Tags</h6>
                                </div>
                                <div class="body">
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">Advices</a></li>
                                            <li><a href="#">business</a></li>
                                            <li><a href="#">strategy</a></li>
                                            <li><a href="#">consulting</a></li>
                                            <li><a href="#">marketing</a></li>
                                            <li><a href="#">invest</a></li>
                                            <li><a href="#">Advices</a></li>
                                            <li><a href="#">social</a></li>
                                            <li><a href="#">strategy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection