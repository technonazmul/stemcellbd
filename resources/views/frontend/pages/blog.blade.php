@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Blog Post</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                    @foreach($blog as $blog)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="blog__item">
                                <div class="blog__thumb">
                                    <a href="{{route('single_blog',$blog->id)}}"><img src="{{asset('storage/blog/'.$blog->thumbnail)}}" alt="webcodeltd" style="max-width: auto; height:400px;"></a>
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
    <!-- ==========Blog Section Ends Here========== -->
@endsection