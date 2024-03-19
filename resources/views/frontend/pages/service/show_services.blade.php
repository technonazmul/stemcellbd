@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{$show_services->name}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$show_services->name}}</li>
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
                    @php
                        $services=App\Models\Service::where('service_category_id',$show_services->id)->get();
                    @endphp
                    @foreach($services as $services)
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="service-single.html">
                                    <img src="{{asset('storage/service/'.$services->thumbnail)}}" style="height:200px;width:auto;" alt="webcodeltd">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="{{route('single_service',$services->id)}}">{{$services->title}}</a></h5>
                                <p>
                                    {!! Illuminate\Support\Str::limit(strip_tags($services->description), 150) !!}
                                </p>
                                
                                <a href="{{route('single_service',$services->id)}}" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
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
    <!-- ==========Service Section Ends Here========== -->
@endsection