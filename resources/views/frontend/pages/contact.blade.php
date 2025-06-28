<?php
$general_info = App\Models\GeneralInfo::findOrFail(1);
?>
@extends('frontend.layouts.template')
@section("content")
            <!-- ==========Page Header Section Start Here========== -->
            <div
            class="pageheader bg-img"
            style="background-image: url({{asset('storage/public/visual_edits/' . $visualEditContactContent['header_background_image'] ?? '')}})"
        >
            <div class="container">
                <div class="pageheader__content">
                    <h2>{{ $visualEditContactContent['title'] ?? 'Contact Us' }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ $visualEditContactContent['breadcrumb_first_item_link'] ?? '' }}">{{ $visualEditContactContent['breadcrumb_first_item_text'] ?? '' }}</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                {{ $visualEditContactContent['breadcrumb_second_item_text'] ?? 'Contact' }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ==========Page Header Section Ends Here========== -->    
   
        <!-- ==========Contact Section Start Here========== -->
        <div class="contact contact--two" id="contact">
    <div class="container">
        <div class="section__header text-center">
            <h2>{{ $visualEditContactContent['contact_card_title'] ?? '' }}</h2>
            <p>
                {{ $visualEditContactContent['contact_card_description'] ?? '' }}
            </p>
        </div>

        @if(!empty($general_info))
        <div class="row g-4 justify-content-center">
            {{-- Address Section --}}
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="contact__item">
                    <div class="contact__thumb">
                        <img src="{{ asset('frontend/assets/images/info/01.jpg') }}" alt="webcodeltd" />
                    </div>
                    <div class="contact__content">
                        <p>
                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($general_info->address) }}" target="_blank">
                                {{ $general_info->address }}
                            </a>
                        </p>
                    </div>

                </div>
            </div>

            {{-- Phone Section --}}
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="contact__item">
                    <div class="contact__thumb">
                        <img src="{{ asset('frontend/assets/images/info/02.jpg') }}" alt="webcodeltd" />
                    </div>
                    <div class="contact__content">
                        <p>{{ $general_info->title }}</p>
                        <p>
                        Enquiry: 
                            <a href="tel:{{ $general_info->enquiry_number }}">
                                {{ $general_info->enquiry_number }}
                            </a>
                        </p>
                        <p>
                            Appointment: 
                            <a href="tel:{{ $general_info->appointment_number }}">
                                {{ $general_info->appointment_number }}
                            </a>
                        </p>

                    </div>
                </div>
            </div>

            {{-- Email/Website Section --}}
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="contact__item">
                    <div class="contact__thumb">
                        <img src="{{ asset('frontend/assets/images/info/03.jpg') }}" alt="webcodeltd" />
                    </div>
                    <div class="contact__content">
                        <p>
                            <a href="mailto:{{ $general_info->help_email }}">{{ $general_info->help_email }}</a>
                        </p>
                        <p>
                            <a href="mailto:{{ $general_info->support_email }}">{{ $general_info->support_email }}</a>
                        </p>
                        <p>
                            <a href="{{ $general_info->website }}" target="_blank">{{ $general_info->website }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>


        <div class="contactform padding-tb">
            <div class="container">
                <div class="section__header text-center">
                    <h2>{{ $visualEditContactContent['contact_form_title'] ?? '' }}</h2>
                    <p>
                        {{ $visualEditContactContent['contact_form_description'] ?? '' }}
                    </p>
                </div>
                {{-- message --}}
                <div class="col-md-7 my-2 mx-auto">
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
                </div>
                <div class="section__wrapper">
                    <div class="contactform__area">
                        <form action="{{route('contact_form')}}" id="contact-form" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Name*" name="name" id="name" required />
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Company" name="company" id="company" />
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="email" placeholder="Email*" name="email" id="email" required />
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Subject" name="subject" id="subject" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" rows="5" placeholder="Message*" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="lab-btn">Send Your Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==========Contact Section Ends Here========== -->
@endsection