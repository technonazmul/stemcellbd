@php
$general_info=App\Models\GeneralInfo::findOrFail(1);
$banner=App\Models\Banner::findOrFail(1);
$hospitalInfos = App\Models\HospitalInfo::latest()->take(3)->get();
$about = App\Models\About::first();
$steps = \App\Models\Step::all();
$stepsection = \App\Models\StepSection::first();
$video = \App\Models\VideoSection::findOrFail(1);
$secondvideo = \App\Models\VideoSection::findOrFail(2);
@endphp
@extends('frontend.layouts.template')

@section("content")
    <!-- ==========Banner Section Start Here========== -->
    <div class="banner bg-img" id="banner" style="background: url({{ asset('storage/public/' . $banner->background_image) }}) rgba(0,0,0,.5);">
        {{-- <video src="{{asset('frontend/assets/video/01.mp4')}}" muted="" loop="" autoplay=""></video> --}}
        <div class="container">
            <div class="banner__content">
                <h2>{{$banner->title}}</h2>
                <p>{{$banner->subtitle}}</p>
                <ul>
                    <li><a href="{{ old('button1_url', $banner->button1_url ?? '') }}" class="lab-btn">{{ old('button1_text', $banner->button1_text ?? '') }}</a></li>
                    <li><a href="{{ old('button2_url', $banner->button2_url ?? '') }}" class="lab-btn bg-white">{{ old('button2_text', $banner->button2_text ?? '') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->



    <!-- ==========Feture Section Start Here========== -->
    <div class="feature bg-img" id="feature" style="background-image: url({{asset('frontend/assets/images/bg/05.jpg')}});">
        
        <div class="feature__bottom">
            <div class="container">
                <div class="row g-4">

                    @foreach ($hospitalInfos as $info)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="feature__item">
                                <div class="feature__thumb">
                                    <img src="{{ asset('storage/public/hospitalinfos/' . $info->image) }}" alt="{{ $info->title }}">
                                </div>
                                <div class="feature__content">
                                    <h5>{{ $info->title }}</h5>
                                    <p>{{ $info->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Feture Section Ends Here========== -->



    <!-- ==========About Section Start Here========== -->
    <div class="about padding-tb" id="about">
        <div class="container">
            <div class="row g-lg-0 g-5 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <img src="{{ asset('storage/public/about/' . $about->image) }}" alt="about image">
                        <div class="about__thumb--content">
                            <div class="icon">
                                <img src="{{ asset('storage/public/about/' . $about->icon) }}" alt="about icon">
                            </div>
                            <div class="text">
                                <h2><span class="odometer" data-odometer-final="{{ $about->experience_years }}">0</span><sup>+</sup></h2>
                                <p>{{ $about->experience_text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__content">
                        <h2>{{ $about->headline }}</h2>
                        <h6>{{ $about->sub_headline }}</h6>
                        <p>{{ $about->description }}</p>
                        <a href="{{ route('index') }}{{ $about->button_link ?? '#appointment' }}" class="lab-btn">
                            {{ $about->button_text ?? 'take an appointment' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========About Section Ends Here========== -->


    <!-- ==========Service Section Start Here========== -->
    <div class="service padding-tb" id="service">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our treatment options</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @php
                    $services=App\Models\Service::take(6)->get();
                    @endphp
                    @foreach($services as $service)
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="{{route('single_service',$service->id)}}">
                                    <img src="{{asset('storage/public/service/'.$service->thumbnail)}}" alt="webcodeltd" style="width:auto;height:300px;">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="{{route('single_service',$service->id)}}">{{$service->title}}</a></h5>
                                <p>{!! Illuminate\Support\Str::limit(strip_tags($service->description), 100) !!}</p>
                                <a href="{{route('single_service',$service->id)}}" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->


    <!-- ==========Step Section Start Here========== -->
    <div class="step padding-tb bg-img" id="step" style="background-image: url({{ asset('frontend/assets/images/bg/02.jpg') }});">
    <div class="container">
        @if($stepsection)
        <div class="section__header text-center">
            <h2>{{ $stepsection->title }}</h2>
            <p>{{ $stepsection->subtitle }}</p>
        </div>
        @endif
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center">
                @foreach($steps as $step)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="step__item">
                            <div class="step__thumb">
                                <img src="{{ asset('storage/public/step/' . $step->image) }}" alt="step">
                            </div>
                            <div class="step__content">
                                <span>{{ $step->step_number }}</span>
                                <h5>{{ $step->title }}</h5>
                                <p>{{ $step->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    <!-- ==========Step Section Ends Here========== -->


    <!-- ==========Video Section Start Here========== -->
    @if($video)
    <div class="video padding-tb" id="video">
        <div class="container">
            <div class="row g-lg-0 g-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="video__thumb">
                        <img src="{{ asset('storage/public/' . $video->thumb_image) }}" alt="video thumb">
                        <div class="video__thumb--icon">
                            <a href="{{ asset('storage/public/' . $video->video_url) }}" data-rel="lightcase">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="video__content">
                        <h2>{{ $video->title }}</h2>
                        <p>{{ $video->description }}</p>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <img src="{{ asset('storage/public/' . $video->stat1_icon) }}" alt="icon1">
                                </div>
                                <div class="content">
                                    <span>{{ $video->stat1_number }}</span>
                                    <p>{{ $video->stat1_text }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="{{ asset('storage/public/' . $video->stat2_icon) }}" alt="icon2">
                                </div>
                                <div class="content">
                                    <span>{{ $video->stat2_number }}</span>
                                    <p>{{ $video->stat2_text }}</p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ $video->button_url }}" class="lab-btn">{{ $video->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- ==========Video Section Ends Here========== -->


    <!-- ==========Team Section Start Here========== -->
    <div class="team padding-tb" id="team">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our expert Doctor team</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @php
                    $doctors=App\Models\Doctor::paginate(1);
                    @endphp
                    @foreach($doctors as $doctor)
                    @if(!empty($doctor))
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('storage/public/doctors/'.$doctor->image)}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="{{route('single_doctor',$doctor->id)}}">{{$doctor->name}}</a></h6>
                                <span>{{$doctor->speciali}}</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                           {{ $doctors->links('pagination::bootstrap-4') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Team Section Ends Here========== -->



    <!-- ==========Testmonial Section Start Here========== -->
    <div class="testimonial padding-tb bg-img" id="testimonial" style="background-image: url({{asset('frontend/assets/images/bg/01.jpg')}});">
        <div class="container">
            <div class="section__header text-center">
                <h2>our Client Testimonials</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="testimonial__slider overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach( App\Models\Testimonial::all() as $testimonial )
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('storage/public/testimonial/'.$testimonial->image)}}" alt="webcodeltd">
                                    <div class="testimonial__thumb--quote">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p>{{$testimonial->text}}</p>
                                    <div class="testimonial__content--bottom">
                                        <div class="left">
                                            <h6>{{$testimonial->name}}</h6>
                                            <span>{{$testimonial->author}}</span>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $testimonial->rating)
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    @else
                                                        <li><i class="fa-regular fa-star"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center mt-5">
                    <div class="number__pagination testimonial__pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Testmonial Section Ends Here========== -->



    <!-- ==========Result Section Start Here========== -->
    <div class="result padding-tb" id="result">
        <div class="container">
            <div class="row g-lg-0 g-5 align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="result__content">
                        <h2>{{ $secondvideo->title }}</h2>
                        <p>{{ $secondvideo->description }}</p>
                        <a href="{{ asset('storage/public/' . $secondvideo->video_url) }}" class="lab-btn" data-rel="lightcase">{{ $secondvideo->button_text }} <i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="result__thumb">
                        <img src="{{ asset('storage/public/' . $secondvideo->thumb_image) }}" alt="webcodeltd">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Result Section Ends Here========== -->



    <!-- ==========Blog Section Start Here========== -->
    <div class="blog padding-tb" id="blog">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our blogs</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @php
                    $blogs=App\Models\Blog::take(3)->get();
                    @endphp
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="blog__item">
                                <div class="blog__thumb">
                                    <a href="{{route('single_blog',$blog->id)}}"><img src="{{asset('storage/public/blog/'.$blog->thumbnail)}}"></a>
                                </div>
                                <div class="blog__content">
                                    <h4><a href="{{route('single_blog',$blog->id)}}">{{$blog->title}} </a></h4>
                                    <ul>
                                        @php
                                            $date = date('F j,Y', strtotime($blog->created_at));
                                        @endphp
                                        <li><i class="fa-solid fa-calendar"></i>@php echo $date @endphp</li>
                                        <li><i class="fa-regular fa-folder"></i>{{$blog->blog_category->name}}</li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="{{route('blog')}}" class="lab-btn">view all blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->


    <!-- ==========Appointment Section Start Here========== -->
    <div class="appointment padding-tb">
        <div class="container">
            <div class="row g-lg-0 g-5 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="appointment__thumb">
                        <img src="{{ asset('storage/public/banners/' . $general_info->appointment_banner) }}" alt="webcodeltd">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="appointment__content" id="appointment">
                        <div class="title">
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
                            <h2>Take an Appointment</h2>
                            <p>Please fill in the details below to schedule an appointment.</p>
                        </div>
                        <form action="{{route('admin.take_appointment')}}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6 col-12">
                                    <input name="name" type="text" placeholder="full name*" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input name="phone" type="text" placeholder="Phone Number" required>
                                </div>
                                <div class="col-12">
                                    <input name="email" type="email" placeholder="email address" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <select name="gender" required>
                                        <option value="">Sex</option>
                                        <option name="gender" value="male">Male</option>
                                        <option name="gender" value="female">Female</option>
                                        <option name="gender" value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input id="datepicker" name="date" type="date" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-12">
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
        </div>
    </div>
    <!-- ==========Appointment Section Ends Here========== -->



    <!-- ==========contact Section start Here========== -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="{{asset('frontend/assets/images/info/01.jpg')}}" alt="webcodeltd">
                        </div>
                        @if(!@empty($general_info))
                        <div class="contact__content">
                            <p>{{$general_info->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="{{asset('frontend/assets/images/info/02.jpg')}}" alt="webcodeltd">
                        </div>
                        <div class="contact__content">
                            <p>{{$general_info->title}}</p>
                            <p>Enquiry: {{$general_info->enquiry_number}}</p>
                            <p>Appointment: {{$general_info->appointment_number}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="{{asset('frontend/assets/images/info/03.jpg')}}" alt="webcodeltd">
                        </div>
                        <div class="contact__content">
                            <p><a href="#">{{$general_info->help_email}}</a></p>
                            <p><a href="#"></a>{{$general_info->support_email}}</p>
                            <p><a href="#">www.stemcellcentre</a></p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========contact Section Ends Here========== -->
@endsection