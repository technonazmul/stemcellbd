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
                                        <img src="{{asset('storage/blog/'.$single_blog->thumbnail)}}" alt="webcodeltd" style="max-width: auto; height:500px;">
                                    </div>
                                    <div class="blog__content">
                                        <h4>{{$single_blog->title}}</h4>
                                        <ul>
                                            @php
                                            $date = date('Y-m-d', strtotime($single_blog->created_at));
                                            @endphp
                                            <li><i class="fa-solid fa-calendar"></i>@php echo $date @endphp</li>
                                            <li><i class="fa-regular fa-folder"></i>{{$single_blog->blog_category->name}} </li>
                                        </ul>
                                       <p>{{$single_blog->description}} </p>
                                        {{-- <img src="{{asset('storage/blog/'.$single_blog->thumbnail)}}" alt="webcodeltd"> --}}
                                        <video src="{{asset('frontend/assets/video/02.mp4')}}" muted="" loop="" autoplay=""></video>
                                        <iframe src="https://www.youtube.com/embed/S-CvC4BAIIo?si=69QFYU0dSBNLim8k" frameborder="0" allowfullscreen></iframe>
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
                                    @php
                                    $total_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->count();
                                    @endphp
                                    <div class="head">
                                        <h6>@php echo $total_comment; @endphp Replies to “Tips for Achieving Success”</h6>
                                    </div>

                                    <div class="body">
                                        <ul>
                                                @php
                                                $show_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->get();
                                                $show_reply=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id', '!=', '0')->get();
                                                $total_comment=App\Models\Comment::where('status','1')->count();
                                                @endphp
                                                @foreach($show_comment->take(2) as $comment)
                                                @php 
                                                $total_reply=App\Models\Comment::where('status','1')->where('parent_id', '!=', '0')->where('parent_id',$comment->id)->count();
                                                @endphp
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode">
                                                </div>
                                                <div class="content">
                                                    <div class="content__top">
                                                        <div class="name">
                                                            <h6><a href="team-single.html">{{$comment->name}}</a></h6>
                                                            @php
                                                                $comment_date = date('j F Y, \a\t h:i a',strtotime($comment->created_at));
                                                            @endphp
                                                            <span>@php echo $comment_date; @endphp</span>
                                                        </div>
                                                    </div>
                                                    <div class="content__bottom">
                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                    {{-- reply comment --}}
                                                    <a class="border border-warning reply p-1 rounded-1 mx-1" data-bs-toggle="collapse" href="#collapseExample{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        Reply
                                                    </a>
                                                    <a class="border border-info reply p-1 rounded-1" data-bs-toggle="collapse" href="#collapseExample1{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                       Total @php echo $total_reply; @endphp Reply
                                                    </a>
                                                    {{-- reply comment form --}}
                                                    <div class="collapse mt-2" id="collapseExample{{$comment->id}}">
                                                        <div class="card card-body blog__commentForm">
                                                            <form method="post" action="{{route('admin.reply_comment')}}">
                                                                @csrf
                                                                <input type="hidden" name="parent_id" value="{{$comment->id}}" id="" >
                                                                <input type="hidden" name="blog_post_id" value="{{$single_blog->id}}" id="" >
                                                                <input name="name" type="text" placeholder="Your Name" required>
                                                                <input name="email" type="email" placeholder="Your Email" required>
                                                                <input name="phone" type="text" placeholder="Phone Number"required>
                                                                <input name="subject" type="text" placeholder="Subject"required>
                                                                <textarea name="comment" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
                                                                <button type="submit" class="lab-btn">Reply comments</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    {{-- show reply --}}
                                                    <div class="collapse mt-2" id="collapseExample1{{$comment->id}}">
                                                        <div class="card card-body blog__commentForm">
                                                            hi
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><br>
                                            @endforeach
                                              @if($comment->count() > 2)
                                                <button class="btn btn-outline-info" id="showMoreComments">Show more comments</button>
                                                <div id="hiddenComments" style="display: none;">
                                                    @php
                                                        $show_comment = App\Models\Comment::where('status', '1')
                                                                                            ->where('blog_post_id', $single_blog->id)
                                                                                            ->where('parent_id','0')
                                                                                            ->get();
                                                    @endphp
                                                    @foreach($show_comment->skip(2) as $comment)
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode">
                                                        </div>
                                                        <div class="content">
                                                            <div class="content__top">
                                                                <div class="name">
                                                                    <h6><a href="team-single.html">{{$comment->name}}</a></h6>
                                                                    @php
                                                                        $comment_date = date('j F Y, \a\t h:i a',strtotime($comment->created_at));
                                                                    @endphp
                                                                    <span>@php echo $comment_date; @endphp</span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="content__bottom">
                                                                <p>{{$comment->comment}}</p>
                                                            </div>
                                                            {{-- reply commett --}}
                                                            <a class="border border-warning reply reply p-1 mx-1 rounded-1" data-bs-toggle="collapse" href="#collapseExample{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                Reply
                                                            </a>
                                                            {{-- show reply --}}
                                                            <a class="border border-info reply reply p-1 rounded-1" data-bs-toggle="collapse" href="#collapseExample1{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                               Total Reply
                                                            </a>
                                                            {{-- reply comment --}}
                                                            <div class="collapse mt-2" id="collapseExample{{$comment->id}}">
                                                                <div class="card card-body blog__commentForm">
                                                                 <form method="post" action="{{route('admin.add_comment')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="parent_id" value="{{$comment->id}}" id="" >
                                                                    <input type="hidden" name="blog_post_id" value="{{$single_blog->id}}" id="" >
                                                                    <input name="name" type="text" placeholder="Your Name" required>
                                                                    <input name="email" type="email" placeholder="Your Email" required>
                                                                    <input name="phone" type="text" placeholder="Phone Number"required>
                                                                    <input name="subject" type="text" placeholder="Subject"required>
                                                                    <textarea name="comment" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
                                                                    <button type="submit" class="lab-btn">Reply comments</button>
                                                                </form>
                                                                </div>
                                                            </div>
                                                            {{-- show reply comment --}}
                                                            <div class="collapse mt-2" id="collapseExample1{{$comment->id}}">
                                                                <div class="card card-body blog__commentForm">
                                                                 reply
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li><br>
                                                    @endforeach
                                                </div>
                                                @else
                                                <h2>no comment found</h2>
                                             @endif
                                        </ul>
                                    </div>
                                </div>
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
                                <div class="blog__commentForm">
                                    <div class="head">
                                        <h6>Leave A Comment</h6>
                                    </div>
                                    <div class="body">
                                        <form method="post" action="{{route('admin.add_comment')}}">
                                            @csrf
                                            <input type="hidden" name="blog_post_id" value="{{$single_blog->id}}" id="" >
                                            <input name="name" type="text" placeholder="Your Name" required>
                                            <input name="email" type="email" placeholder="Your Email" required>
                                            <input name="phone" type="text" placeholder="Phone Number"required>
                                            <input name="subject" type="text" placeholder="Subject"required>
                                            <textarea name="comment" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
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
                                                        @php
                                                        $data=App\Models\Treatment_type::get();
                                                        @endphp
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
    {{-- show more comment --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#showMoreComments').click(function(){
                $('#hiddenComments').toggle();
                $(this).text(function(i, text){
                    return text === "Show more comments" ? "Hide comments" : "Show more comments";
                });
            });
        });
    </script>
@endsection