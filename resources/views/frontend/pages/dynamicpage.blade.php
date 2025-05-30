<?php
$general_info = App\Models\GeneralInfo::findOrFail(1);
?>
@extends('frontend.layouts.template')
@section("content")
<!-- ==========Page Header Section Start Here========== -->
            <div
            class="pageheader bg-img"
            style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}})"
        >
            <div class="container">
                <div class="pageheader__content">
                    <h2>{{$page->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                {{$page->title }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
 
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <article class="page-content">
                {!! $page->content !!}
            </article>

            
        </div>
    </div>

@endsection