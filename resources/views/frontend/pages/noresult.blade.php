@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>Search Result</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Seaerch Result</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
    <!-- ==========Blog Section Start Here========== -->
    <div class="blog padding-tb" id="blog">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="p-3 mb-2 bg-info text-dark">No result found.</div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
@endsection