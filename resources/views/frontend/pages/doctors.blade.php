@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Team Members</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team Members</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== --> 
    <!-- ==========Team Section Start Here========== -->
    <div class="team padding-tb section-bg" id="team">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach($doctor as $doctor)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="{{asset('storage/doctors/'.$doctor->image)}}" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="{{route('single_doctor',$doctor->id)}}">{{$doctor->name}}</a></h6>
                                <span>{{$doctor->specialization}}</span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href=""><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
    <!-- ==========Team Section Ends Here========== -->
@endsection 
