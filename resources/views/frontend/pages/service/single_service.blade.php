@php
    $general_info=App\Models\GeneralInfo::findOrFail(1);
    $doctors = App\Models\Doctor::all(); // Get all doctors for appointment form
    $services = App\Models\Treatment_type::all(); // For appointment form services
@endphp
@extends('frontend.layouts.template')
@section("content")
<style>
    .form-container {
        position: relative;
        margin-bottom: 1rem;
    }
    
    .form-container label {
        position: absolute;
        top: -12px;
        left: 8px;
        color: #333;
        font-size: 12px;
        font-weight: 600;
        background: white;
        padding: 0 4px;
        pointer-events: none;
        transition: 0.2s;
        z-index: 1;
    }
    
    .form-container input,
    .form-container select,
    .form-container textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #e9ecef;
        border-radius: 4px;
        font-size: 14px;
        background: white;
        transition: border-color 0.2s;
    }
    
    .form-container input:focus,
    .form-container select:focus,
    .form-container textarea:focus {
        outline: none;
        border-color: #2196f3;
    }
    
    .form-container input:focus + label,
    .form-container select:focus + label,
    .form-container textarea:focus + label {
        color: #2196f3;
    }
    
    .form-container textarea {
        resize: vertical;
        min-height: 100px;
    }
    
    .available-days {
        font-size: 12px;
        color: #666;
        margin-top: 5px;
    }
    
    .available-days span {
        background: #e8f5e8;
        color: #2d5a2d;
        padding: 2px 6px;
        border-radius: 10px;
        margin-right: 4px;
        font-size: 10px;
    }
    
    .sidebar__appointment .appointment__content {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
    }
    
    .sidebar__appointment .head h6 {
        margin-bottom: 15px;
        color: #333;
        font-weight: 600;
    }
</style>
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{$single_service->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$single_service->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
    @include('frontend.flashmessage')
    <!-- ==========Service Section Start Here========== -->
    <div class="service service--details section-bg padding-tb">
        <div class="container">
            <div class="row flex-row-reverse g-4">
                <div class="col-lg-8 col-12">
                    <div class="service__maincontent">
                        <img src="{{asset('storage/public/service/'.$single_service->thumbnail)}}" alt="webcode" class="mb-4 w-100">
                        <h5>{{$single_service->title}}</h5>
                        <p>{!!$single_service->description !!}</p>
                        
                        
                        
                        <h5 class="mb-4">Get A Free Consultancy</h5>
                        <form action="{{route('free_consultancy')}}" id="contact-form" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Name*" name="name" id="name" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Company" name="company" id="company">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="email" placeholder="Email*" name="email" id="email" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Subject" name="subject" id="subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="massage" rows="5" placeholder="Massage*" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="lab-btn">send your massage</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sidebar">
                        

                        <div class="sidebar__appointment mt-0">
                            <div class="appointment">
                                <div class="appointment__content">
                                    <div class="head">
                                        <h6>Take an Appointment</h6>
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
                                    <form action="{{route('admin.take_appointment')}}" method="post">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-12 form-container">
                                                <input name="name" type="text" placeholder=" " required>
                                                <label for="name">Full Name *</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <input name="phone" type="text" placeholder=" " required>
                                                <label for="phone">Phone Number *</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <input name="email" type="email" placeholder=" " required>
                                                <label for="email">Email Address *</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <select name="gender" required>
                                                    <option value="">Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <label for="gender">Gender *</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <input name="date" type="date" min="<?php echo date('Y-m-d'); ?>" required placeholder=" ">
                                                <label for="date">Birthdate *</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <select name="doctor_id" id="doctor-select">
                                                    <option value="">Select Doctor (Optional)</option>
                                                    @foreach($doctors as $doctor)
                                                        <option value="{{ $doctor->id }}" 
                                                                data-specialty="{{ $doctor->speciali }}"
                                                                data-available-days="{{ $doctor->available_days }}">
                                                            Dr. {{ $doctor->name }} - {{ $doctor->speciali }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="doctor-select">Choose Doctor</label>
                                            </div>
                                            <div class="col-12 form-container" id="available-days-container" style="display: none;">
                                                <select name="appointment_day" id="appointment-day-select">
                                                    <option value="">Choose a day</option>
                                                </select>
                                                <label for="appointment-day-select">Available Days</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <select name="treatment_types" required>
                                                    <option value="">Select Treatment</option>
                                                    @if(isset($single_service))
                                                        <option value="{{$single_service->title}}" selected>{{$single_service->title}}</option>
                                                    @endif
                                                    @foreach($services as $service)
                                                        @if(!isset($single_service) || $service->title !== $single_service->title)
                                                            <option value="{{$service->title}}">{{$service->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <label for="treatment_types">Need Appointment For *</label>
                                            </div>
                                            <div class="col-12 form-container">
                                                <textarea name="message" rows="4" placeholder=" " required></textarea>
                                                <label for="message">Message *</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="lab-btn">take an appointment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__help">
                            <div class="head">
                                <h6>Need any Help?</h6>
                            </div>
                            <div class="body">
                                <iframe src="{{$general_info->map}}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/sidebar/icon/01.png')}}" alt="webcode">
                                        </div>
                                        <div class="content">
                                            <p>{{$general_info->office_day}}</p>
                                            <p><b>{{$general_info->official_hour}}</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/sidebar/icon/02.png')}}" alt="webcode">
                                        </div>
                                        <div class="content">
                                            <p>Email Address</p>
                                            <p><b>{{$general_info->email}}</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('assets/images/sidebar/icon/03.png')}}" alt="webcode">
                                        </div>
                                        <div class="content">
                                            <p>Address</p>
                                            <p><b>{{$general_info->address}}</b></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const doctorSelect = document.getElementById('doctor-select');
    const availableDaysContainer = document.getElementById('available-days-container');
    const appointmentDaySelect = document.getElementById('appointment-day-select');
    
    // Function to handle label animations for selects
    function handleSelectLabels() {
        const selects = document.querySelectorAll('.form-container select');
        selects.forEach(select => {
            const label = select.nextElementSibling;
            if (label && label.tagName === 'LABEL') {
                if (select.value && select.value !== '') {
                    label.classList.add('active');
                } else {
                    label.classList.remove('active');
                }
            }
        });
    }
    
    // Function to populate available days
    function populateAvailableDays(availableDaysString) {
        if (!availableDaysString) {
            availableDaysContainer.style.display = 'none';
            return;
        }
        
        const days = availableDaysString.split(',').map(day => day.trim());
        appointmentDaySelect.innerHTML = '<option value="">Choose a day</option>';
        
        days.forEach(day => {
            if (day) {
                const option = document.createElement('option');
                option.value = day;
                option.textContent = day;
                appointmentDaySelect.appendChild(option);
            }
        });
        
        availableDaysContainer.style.display = 'block';
        handleSelectLabels(); // Update label positions after showing container
    }
    
    // Handle doctor selection change
    doctorSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const availableDays = selectedOption.getAttribute('data-available-days');
        
        if (this.value) {
            populateAvailableDays(availableDays);
        } else {
            availableDaysContainer.style.display = 'none';
        }
        handleSelectLabels();
    });
    
    // Handle all select changes for label animation
    document.querySelectorAll('.form-container select').forEach(select => {
        select.addEventListener('change', handleSelectLabels);
        select.addEventListener('focus', handleSelectLabels);
        select.addEventListener('blur', handleSelectLabels);
    });
    
    // Initial label check on page load
    handleSelectLabels();
});
</script>
@endsection