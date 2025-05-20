@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{$single_blog->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$single_blog->title}}</li>
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
                                        <img src="{{asset('storage/public/blog/'.$single_blog->thumbnail)}}">
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
                                       <p>{!! $single_blog->description !!} </p>
                                        
                                        
                                    </div>
                                </div>

                                <div class="tags-section">
                                    <ul class="tags">
                                        <li><span><i class="fa-solid fa-share-nodes"></i></span></li>
                                        <?php
                                            if(!is_null($single_blog->tags)):
                                                $arrayoftags = explode(',',$single_blog->tags);
                                                foreach($arrayoftags as $tag):
                                                ?>
                                                <li><a href="{{route('blog.tag.search', $tag)}}">{{$tag}}</a></li>
                                                <?php
                                                endforeach;
                                               
                                            endif;
                                        ?>
                                        
                                        
                                    </ul>
                                    @php
                                        $postUrl = url()->current(); // Full URL of current post
                                        $postTitle = urlencode($single_blog->title); // Title for social media
                                    @endphp

                                    <ul class="social-link-list d-flex flex-wrap">
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $postUrl }}" target="_blank" class="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?url={{ $postUrl }}&text={{ $postTitle }}" target="_blank" class="twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $postUrl }}&title={{ $postTitle }}" target="_blank" class="linkedin">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank" class="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <!-- Instagram does not support direct post sharing via URL, only profile or manual share -->
                                        </li>
                                    </ul>

                                </div>

                                {{-- <div class="blog__author">
                                    <div class="thumb">
                                        <img src="{{asset('storage/doctors/'.$single_blog->blog_post_user->image)}}" alt="webcodeltd">
                                    </div>
                                    <div class="content">
                                        <h6><a href="{{url('single_doctor/'. $single_blog->blog_post_user->id)}}">{{$single_blog->blog_post_user->name}}</a></h6>
                                        <span>{{$single_blog->blog_post_user->specialization}}</span>
                                        <p>{!! $single_blog->blog_post_user->about !!}</p>
                                        <ul class="social-link-list d-flex flex-wrap">
                                            <li><a href="{{$single_blog->blog_post_user->facebook}}" target="blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="{{$single_blog->blog_post_user->instagram}}" target="blank" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div> --}}

                                <div class="blog__comment">
                                    @php
                                    $total_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->count();
                                    @endphp
                                    <div class="head">
                                        <h6>@php echo $total_comment; @endphp Comments</h6>
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
                                                    {{-- <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode"> --}}
                                                    <i class="icofont-ui-user" style="font-size: 60px;"></i>
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
                                                        @php echo $total_reply; @endphp Reply
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

                                                        <div class="card card-body">
                                                            @php 
                                                            $reply=App\Models\Comment::where('parent_id',$comment->id)->where('status','1')->where('parent_id', '!=', '0')->get();
                                                            @endphp
                                                            @foreach($reply as $reply)
                                                            <div class="thumb">
                                                                {{-- <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode"> --}}
                                                                <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                                            </div>
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="name">
                                                                        <h6><a href="team-single.html">{{$reply->name}}</a></h6>
                                                                        @php
                                                                            $reply_date = date('j F Y, \a\t h:i a',strtotime($reply->created_at));
                                                                        @endphp
                                                                        <span>@php echo $reply_date; @endphp</span>
                                                                    </div>
                                                                </div>
                                                                <div class="content__bottom">
                                                                    <p>{{$reply->comment}}</p>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </li><br>
                                            @endforeach
                                              @if($show_comment->count() >= 1)
                                                <button class="btn btn-outline-info" id="showMoreComments">Show more comments</button>
                                                <div id="hiddenComments" style="display: none;">
                                                    @php
                                                    $show_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->get();
                                                    $show_reply=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id', '!=', '0')->get();
                                                    $total_comment=App\Models\Comment::where('status','1')->count();
                                                    @endphp
                                                    @foreach($show_comment->skip(2) as $comment)
                                                    @php 
                                                    $total_reply=App\Models\Comment::where('status','1')->where('parent_id', '!=', '0')->where('parent_id',$comment->id)->count();
                                                    @endphp
                                                    <li>
                                                        <div class="thumb">
                                                            {{-- <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode"> --}}
                                                            <i class="icofont-ui-user" style="font-size: 60px;"></i>
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
                                                               @php echo $total_reply @endphp Reply
                                                            </a>
                                                            {{-- reply comment --}}
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
                                                            {{-- show reply comment --}}
                                                            <div class="collapse mt-2" id="collapseExample1{{$comment->id}}">
                                                                <div class="card card-body blog__commentForm">
                                                                    @php 
                                                                    $reply=App\Models\Comment::where('parent_id',$comment->id)->where('status','1')->where('parent_id', '!=', '0')->get();
                                                                    @endphp
                                                                    @foreach($reply as $reply)
                                                                    <div class="thumb">
                                                                        {{-- <img src="{{asset('frontend/assets/images/team/01..jpg')}}" alt="webcode"> --}}
                                                                        <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="content__top">
                                                                            <div class="name">
                                                                                <h6><a href="team-single.html">{{$reply->name}}</a></h6>
                                                                                @php
                                                                                    $reply_date = date('j F Y, \a\t h:i a',strtotime($reply->created_at));
                                                                                @endphp
                                                                                <span>@php echo $reply_date; @endphp</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="content__bottom">
                                                                            <p>{{$reply->comment}}</p>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li><br>
                                                    @endforeach
                                                </div>
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
                                    <form action="{{route('blog.search')}}">
                                        <input type="text" placeholder="Search Here" name="search">
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