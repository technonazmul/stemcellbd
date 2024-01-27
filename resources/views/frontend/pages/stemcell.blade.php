@extends('frontend.layouts.template')
@section("stemcell")
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

 <!-- ==========Service Section Start Here========== -->
 <div class="service padding-tb section-bg" id="service">
        <div class="container">
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
</div>
    <!-- ==========Service Section Ends Here========== -->
@endsection