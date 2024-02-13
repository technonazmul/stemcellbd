@extends('frontend.layouts.template')
@section("content")
  <!-- ==========Page Header Section Start Here========== -->
  <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
    <div class="container">
        <div class="pageheader__content">
            <h2>{{$doctor->name}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$doctor->name}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- ==========Page Header Section Ends Here========== -->



<!-- ==========Team Section Start Here========== -->
<div class="team team--deatils padding-tb">
    <div class="container">
        <div class="section__wrapper">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-5 col-12">
                    <div class="team__thumb">
                        <img  src="{{asset('storage/doctors/'.$doctor->image)}}" alt="webcode">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="team__thumb team__thumb--info">
                        <h3>{{$doctor->name}}</h3>
                        <span>{{$doctor->specialization}}</span>
                        <ul>
                            <li>
                                <div class="left">
                                    <p>Chember</p>
                                </div>
                                <div class="right">
                                    <p>{{$doctor->chamber}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Responsibility</p>
                                </div>
                                <div class="right">
                                    <p>{{$doctor->responsibility}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Experience</p>
                                </div>
                                <div class="right">
                                    <p>{{$doctor->experience}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Email</p>
                                </div>
                                <div class="right">
                                    <p>{{$doctor->email}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Phone</p>
                                </div>
                                <div class="right">
                                    <p>{{$doctor->phone}}</p>
                                </div>
                            </li>
                            {{-- <li>
                                <div class="left">
                                    <p>Fax</p>
                                </div>
                                <div class="right">
                                    <p>+203 123 965</p>
                                </div>
                            </li> --}}
                            <li>
                                <div class="left">
                                    <p>follow me</p>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="{{$doctor->facebook}}" target="blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="{{$doctor->instagram}}" target="blank" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team__content">
                        <h5>Personal Experience</h5>
                        <p>Since joining Integrio in 2009, Chriss More has helped turn the company from a group of bright technolog minds working with startups into a globa In Chriss’s time as President and CEO of compan the company has experienced explosive growth in size and revenue all while developing is culture that fosters engaged employees around innovation.</p>
                        <p>Chriss is a frequent speaker on the topics of global innovation and digital disruption. He is also an avid cook and histor buff you can find him dining late at night with the chefs of the hotels where he stays during his travels, or reading in his home library.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6 col-12">
                                <h5>Early Years</h5>
                                <p>Since joining Integrio info 2002 in chriss more has helped turn company from a group of brght technolog minds working with starups into global experience explosive growth in size and revenue all while developin are</p>
                                <p class="mb-0">Qhris is a frequen speaker on the topics of global innovation and digital he is also an avid cook and histor buiff yous can find him dining late are atreading in his home library.</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <h5>Professional Skills</h5>
                                <ul class="progressbararea">
                                    <li>
                                        <div class="title">
                                            <p>our experience</p>
                                            <p><span>70%</span></p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <p>our experience</p>
                                            <p><span>56%</span></p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <p>our experience</p>
                                            <p><span>85%</span></p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5>Career Guidelines</h5>
                        <p class="mb-0">Since joining Integrio in 2009, chriss more has helped turn the company from a group of bright technolog minds working with startups into a globa In chriss’s time as President and CEO of compan the company has experienced explosive growth in size and revenue all while developing a culture that fosters engaged employees around innovation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Team Section Ends Here========== -->
@endsection