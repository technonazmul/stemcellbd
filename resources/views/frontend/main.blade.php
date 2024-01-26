<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/css/favicon.png')}}" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <title>Platinum</title>
</head>

<body>
    
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- ==========Header Section Starts Here========== -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row g-1 g-lg-3 align-items-center">
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>adminstemcell@gmail.com</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>Hotline - 01987-851647</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-12 text-center text-lg-end mb-3 mb-lg-0">
                        <div class="header__top--right text-lg-end">
                            <div class="user">
                                <div class="user__icon">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li>/</li>
                                    <li><a href="signup.html">Register</a></li>
                                </ul>
                            </div>
                            <div class="langauge">
                                <div class="langauge__icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <select class="form-select">
                                    <option value="1">English</option>
                                    <option value="2">Bangla</option>
                                    <option value="3">Hindi</option>
                                    <option value="4">Urdu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom--area">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('frontend/assets/images/header/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header__bararea">
                        <div class="header__bar d-xl-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="header__ellepsis d-xl-none">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="menupart">
                        <div class="menu">
                            <ul>
                                <li><a href="index.html" class="active">Home</a></li>
                                <li>
                                    <a href="#0">Service</a>
                                    <ul>
                                        <li><a href="stemcell.html">Stem Cell</a></li>
                                        <li><a href="cosmetic.html">Cosmetic</a></li>
                                        <li><a href="training.html">Training</a></li>
                                    </ul>
                                </li>
                                <li><a href="team.html">Doctors</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="cartbtn">
                            <div class="cart">
                                <a href="cart.html"><i class="fa-solid fa-basket-shopping"></i></a>
                            </div>
                            <div class="headerbtn">
                                <a href="#appointment" class="lab-btn">appointment <i class="fa-solid fa-border-all"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->



    <!-- ==========Banner Section Start Here========== -->
    <div class="banner bg-img" id="banner" style="background: url({{asset('frontend/assets/images/bg/04.jpg')}}) rgba(0,0,0,.5);">
        <video src="{{asset('frontend/assets/video/01.mp4')}}" muted="" loop="" autoplay=""></video>
        <div class="container">
            <div class="banner__content">
                <h2>Rejuvenate yourself by your own stem cell</h2>
                <p>We help clean all your needs with our various skills and range of awesome services.</p>
                <ul>
                    <li><a href="#" class="lab-btn">our services</a></li>
                    <li><a href="#" class="lab-btn bg-white">Discover more</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->



    <!-- ==========Feture Section Start Here========== -->
    <div class="feature bg-img" id="feature" style="background-image: url({{asset('frontend/assets/images/bg/05.jpg')}});">
        <div class="feature__top">
            <div class="container">
                <div class="feature__top--area">
                    <div class="feature__top--left">
                        <div class="content">
                            <h5>Association With :</h5>
                        </div>
                        <div class="thumb">
                            <img src="{{asset('frontend/assets/images/feature/logo/01.png')}}" alt="feature">
                        </div>
                    </div>
                    <div class="feature__top--right">
                        <div class="content">
                            <h5>SVF Procedure fDA certified :</h5>
                        </div>
                        <div class="thumb">
                            <img src="{{asset('frontend/assets/images/feature/logo/02.png')}}" alt="feature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature__bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="{{asset('frontend/assets/images/feature/01.jpg')}}" alt="feature">
                            </div>
                            <div class="feature__content">
                                <h5>2M+ People Treated</h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="{{asset('frontend/assets/images/feature/02.jpg')}}" alt="feature">
                            </div>
                            <div class="feature__content">
                                <h5>40+ Expert Doctor</h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="{{asset('frontend/assets/images/feature/03.jpg')}}" alt="feature">
                            </div>
                            <div class="feature__content">
                                <h5>99% Success Rate</h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                            </div>
                        </div>
                    </div>
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
                        <img src="{{asset('frontend/assets/images/about/01.jpg')}}" alt="webcodeltd">
                        <div class="about__thumb--content">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/about/icon/01.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="text">
                                <h2><span class="odometer" data-odometer-final="14">0</span><sup>+</sup></h2>
                                <p>Years of Experiences</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__content">
                        <h2>Rejuvenate yourself by your own stem cell</h2>
                        <h6>Get started swiftly & easily by importing a demo of your choice in single click. Over 30 high quality professionally designed per-built website concepts to choose from.</h6>
                        <p>Spiro is a modern business theme, that lets you build stunning high performance  websites using a fully visual interface. Start with any of the demos below or build modern business theme, that lets you build stunning high performance websites using fully visual interface. start with an of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts</p>
                        <a href="#" class="lab-btn">take an appointment</a>
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
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('frontend/assets/images/service/01.jpg')}}" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Beautification (Anti-aging)</a></h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                                <a href="service-single.html" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('frontend/assets/images/service/02.jpg')}}" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Diabetes</a></h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                                <a href="service-single.html" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('frontend/assets/images/service/03.jpg')}}" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Nephrology</a></h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                                <a href="service-single.html" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('frontend/assets/images/service/04.jpg')}}" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Neurosurgery</a></h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                                <a href="service-single.html" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('frontend/assets/images/service/05.jpg')}}" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Orthopedic (Pain Management)</a></h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                                <a href="service-single.html" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('frontend/assets/images/service/06.jpg')}}" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="service-single.html">Burn and Plastic Surgery</a></h5>
                                <p>Get started swiftly and easily importing in demo of professionally designed pre-built website are in concepts to choose from.</p>
                                <a href="service-single.html" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->


    <!-- ==========Step Section Start Here========== -->
    <div class="step padding-tb bg-img" id="step" style="background-image: url({{asset('frontend/assets/images/bg/02.jpg')}});">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our great 3 steps for treatment</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="step__item">
                            <div class="step__thumb">
                                <img src="{{asset('frontend/assets/images/step/01.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="step__content">
                                <span>Step: 01</span>
                                <h5>Doctor Consultation</h5>
                                <p>Get started swiftly and easily by importing demo of your choice in single click</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="step__item">
                            <div class="step__thumb">
                                <img src="{{asset('frontend/assets/images/step/02.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="step__content">
                                <span>Step: 02</span>
                                <h5>Digital Diagnosis</h5>
                                <p>Get started swiftly and easily by importing demo of your choice in single click</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="step__item">
                            <div class="step__thumb">
                                <img src="{{asset('frontend/assets/images/step/03.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="step__content">
                                <span>Step: 03</span>
                                <h5>Doctor Holistic Treatment</h5>
                                <p>Get started swiftly and easily by importing demo of your choice in single click</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="step__item">
                            <div class="step__thumb">
                                <img src="{{asset('frontend/assets/images/step/03.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="step__content">
                                <span>Step: 04</span>
                                <h5>Follow Up</h5>
                                <p>Get started swiftly and easily by importing demo of your choice in single click</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Step Section Ends Here========== -->


    <!-- ==========Video Section Start Here========== -->
    <div class="video padding-tb" id="video">
        <div class="container">
            <div class="row g-lg-0 g-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="video__thumb">
                        <img src="{{asset('frontend/assets/images/video/01.jpg')}}" alt="webcodeltd">
                        <div class="video__thumb--icon">
                            <a href="{{asset('frontend/assets/video/01.mp4')}}" data-rel="lightcase"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="video__content">
                        <h2>World's most advanced stem cell system</h2>
                        <p>Spiro is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build modern business theme, that lets you build stunning high performance websites using fully visual interface. start with an of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts</p>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/video/icon/01.jpg')}}" alt="webcodeltd">
                                </div>
                                <div class="content">
                                    <span>480+</span>
                                    <p>Expert Doctor</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/video/icon/02.jpg')}}" alt="webcodeltd">
                                </div>
                                <div class="content">
                                    <span>6.8K+</span>
                                    <p>Happy Patient</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="lab-btn">take an appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/01.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/02.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/03.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/04.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/05.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/06.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/07.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('frontend/assets/images/team/08.jpg')}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="team-single.html">Dr. Arlene McCoy</a></h6>
                                <span>Dermatologist</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('frontend/assets/images/testimonial/01.jpg')}}" alt="webcodeltd">
                                    <div class="testimonial__thumb--quote">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p>Praised idea and masa cusp veena gelatin turf supine gaseous mustier dictums effacer users edams create pharetra meatilus aquept nullary nullify acre numbers Atenean handwrit laborites</p>
                                    <div class="testimonial__content--bottom">
                                        <div class="left">
                                            <h6>William Thomas</h6>
                                            <span>customer</span>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('frontend/assets/images/testimonial/02.jpg')}}" alt="webcodeltd">
                                    <div class="testimonial__thumb--quote">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p>Praised idea and masa cusp veena gelatin turf supine gaseous mustier dictums effacer users edams create pharetra meatilus aquept nullary nullify acre numbers Atenean handwrit laborites</p>
                                    <div class="testimonial__content--bottom">
                                        <div class="left">
                                            <h6>William Thomas</h6>
                                            <span>customer</span>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h2>99% Proven results! See the difference</h2>
                        <p>Spiro is a modern business theme, that lets you build stunning high performance websites using a fully visual interface. Start with any of the demos below or build modern business theme, that lets you build stunning high performance websites using fully visual interface. start with an of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts</p>
                        <a href="{{asset('frontend/assets/video/02.mp4')}}" class="lab-btn" data-rel="lightcase">view all story <i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="result__thumb">
                        <img src="{{asset('frontend/assets/images/result/01.jpg')}}" alt="webcodeltd">
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
                <h2>Our treatment options</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="blog__item">
                            <div class="blog__thumb">
                                <a href="#"><img src="{{asset('frontend/assets/images/blog/01.jpg')}}" alt="webcodeltd"></a>
                            </div>
                            <div class="blog__content">
                                <h4><a href="blog-single.html">Take best qualitytreatment for Ultimate Wellness</a></h4>
                                <ul>
                                    <li><i class="fa-solid fa-calendar"></i> 08 October 2023</li>
                                    <li><i class="fa-regular fa-folder"></i> Beautification</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="blog__item">
                            <div class="blog__thumb">
                                <a href="#"><img src="{{asset('frontend/assets/images/blog/02.jpg')}}" alt="webcodeltd"></a>
                            </div>
                            <div class="blog__content">
                                <h4><a href="blog-single.html">Take best qualitytreatment for Ultimate Wellness</a></h4>
                                <ul>
                                    <li><i class="fa-solid fa-calendar"></i> 08 October 2023</li>
                                    <li><i class="fa-regular fa-folder"></i> Beautification</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="blog__item">
                            <div class="blog__thumb">
                                <a href="#"><img src="{{asset('frontend/assets/images/blog/03.jpg')}}" alt="webcodeltd"></a>
                            </div>
                            <div class="blog__content">
                                <h4><a href="blog-single.html">Take best qualitytreatment for Ultimate Wellness</a></h4>
                                <ul>
                                    <li><i class="fa-solid fa-calendar"></i> 08 October 2023</li>
                                    <li><i class="fa-regular fa-folder"></i> Beautification</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="blog.html" class="lab-btn">view all blog</a>
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
                        <img src="{{asset('frontend/assets/images/appointment/01.jpg')}}" alt="webcodeltd">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="appointment__content" id="appointment">
                        <div class="title">
                            <h2>Take an Appointment</h2>
                            <p>Please fill in the details below to schedule an appointment.</p>
                        </div>
                        <form action="#">
                            <div class="row g-4">
                                <div class="col-md-6 col-12">
                                    <input type="text" placeholder="full name*" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                <div class="col-12">
                                    <input type="email" placeholder="email address">
                                </div>
                                <div class="col-md-6 col-12">
                                    <select>
                                        <option value="1">Sex</option>
                                        <option value="2">Male</option>
                                        <option value="3">Female</option>
                                        <option value="4">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="date" >
                                </div>
                                <div class="col-12">
                                    <select>
                                        <option value="1">need treatment for</option>
                                        <option value="2">need treatment for</option>
                                        <option value="3">need treatment for</option>
                                        <option value="4">need treatment for</option>
                                        <option value="5">need treatment for</option>
                                        <option value="6">need treatment for</option>
                                        <option value="7">need treatment for</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea rows="4" placeholder="Message"></textarea>
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
                        <div class="contact__content">
                            <p>69/M/1, GH Tower (5th Floor), Panthapath, Opposite to Bashundhara City Shopping Complex, Dhaka-1205</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="{{asset('frontend/assets/images/info/02.jpg')}}" alt="webcodeltd">
                        </div>
                        <div class="contact__content">
                            <p>Platinum Hospital Stem Cell Centre</p>
                            <p>Enquiry: 01234-567890</p>
                            <p>Appointment: 01234-567890</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="{{asset('frontend/assets/images/info/03.jpg')}}" alt="webcodeltd">
                        </div>
                        <div class="contact__content">
                            <p><a href="#">help@adminstemcellcentre</a></p>
                            <p><a href="#">support@adminstemcellcentre</a></p>
                            <p><a href="#">www.stemcellcentre</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========contact Section Ends Here========== -->



    <!-- ==========Footer Section Ends Here========== -->
    <footer class="footer bg-img" style="background-image: url({{asset('frontend/assets/images/bg/03.jpg')}});">
        <div class="footer__top">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--title">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--form">
                            <form action="#">
                                <input type="email" placeholder="enter email address">
                                <button type="submit" class="lab-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__middile">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__about">
                            <div class="footer__title">
                                <h5>about us</h5>
                            </div>
                            <p>We believe that boutque practice we are beter placed info respond quickly client bespoke service</p>
                            <h6>follow us</h6>
                            <ul>
                                <li>
                                    <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i> <span>Facebook</span></a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i> <span>linkedin</span></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i> <span>twitter</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title">
                                <h5>Eco Products</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="shop-single.html"><img src="{{asset('frontend/assets/images/footer/product/01.jpg')}}" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="shop-single.html">Safe and Organic eco cleaning product</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="shop-single.html"><img src="{{asset('frontend/assets/images/footer/product/02.jpg')}}" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="shop-single.html">Safe and Organic eco cleaning product</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="footer__title">
                                <h5>Recent news</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="blog-single.html"><img src="{{asset('frontend/assets/images/footer/post/01.jpg')}}" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="blog-single.html">industry leaders soften change their.</a></h6>
                                        <span>15 July 2023</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="blog-single.html"><img src="{{asset('frontend/assets/images/footer/post/02.jpg')}}" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="blog-single.html">Food industry leaders soften change their promoter.</a></h6>
                                        <span>19 July 2023</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__gallery">
                            <div class="footer__title">
                                <h5>Our photo gallery</h5>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{asset('frontend/assets/images/footer/gallery/01.jpg')}}" data-rel="lightcase"><img src="{{asset('frontend/assets/images/footer/gallery/01.jpg')}}" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="{{asset('frontend/assets/images/footer/gallery/02.jpg')}}" data-rel="lightcase"><img src="{{asset('frontend/assets/images/footer/gallery/02.jpg')}}" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="{{asset('frontend/assets/images/footer/gallery/03.jpg')}}" data-rel="lightcase"><img src="{{asset('frontend/assets/images/footer/gallery/03.jpg')}}" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="{{asset('frontend/assets/images/footer/gallery/04.jpg')}}" data-rel="lightcase"><img src="{{asset('frontend/assets/images/footer/gallery/04.jpg')}}" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="{{asset('frontend/assets/images/footer/gallery/05.jpg')}}" data-rel="lightcase"><img src="{{asset('frontend/assets/images/footer/gallery/05.jpg')}}" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="{{asset('frontend/assets/images/footer/gallery/06.jpg')}}" data-rel="lightcase"><img src="{{asset('frontend/assets/images/footer/gallery/06.jpg')}}" alt="webcodeltd"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="text-center">
                    <p>&copy; 2023 All Rights Reserved. ।। design & develop By <a href="https://doctorsdigitalbranding.com/">WebCode</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->


    
    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-turn-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- All Scripts -->
    <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/circularProgressBar.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/lightcase.js')}}"></script>
    <script src="{{asset('frontend/assets/js/functions.js')}}"></script>
</body>
</html>