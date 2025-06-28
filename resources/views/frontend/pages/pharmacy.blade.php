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
    <div class="pageheader bg-img" style="background-image: url({{asset('storage/public/visual_edits/' . $visualEditPharmacyContent['header_background_image'] ?? '')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $visualEditPharmacyContent['title'] ?? '' }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ $visualEditPharmacyContent['breadcrumb_first_item_link'] ?? '' }}">{{ $visualEditPharmacyContent['breadcrumb_first_item_text'] ?? '' }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $visualEditPharmacyContent['breadcrumb_second_item_text'] ?? '' }}</li>
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
                <div class="col-12">
                    <div class="service__maincontent">
                       {!! $visualEditPharmacyContent['pharmacy_description'] ?? 'Your online pharmacy' !!}
                        <form action="{{route('pharmacySubmit')}}" id="contact-form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Name*" name="name" id="name" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Phone Number*" name="phone" id="phone">
                                </div>

                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Address*" name="subject" id="subject">
                                </div>

                                <!-- Prescription Photo Upload without label -->
                                <div class="col-sm-6 col-12">
                                    <input type="file" name="prescription_photo" id="prescription_photo" accept="image/*,application/pdf" class="form-control" 
                                        oninput="this.className = 'form-control uploaded'" 
                                        style="padding: 10px;">
                                    <small id="prescription_placeholder" class="text-muted">Upload Prescription*</small>
                                </div>

                                <div class="col-12">
                                    <textarea name="message" id="massage" rows="3" placeholder="Medicine Name (optional)"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="lab-btn">Order Now</button>
                                </div>
                            </div>
                        </form>

<!-- Optional JS to hide placeholder when file is selected -->
<script>
    document.getElementById('prescription_photo').addEventListener('change', function() {
        const placeholder = document.getElementById('prescription_placeholder');
        if (this.files.length > 0) {
            placeholder.style.display = 'none';
        } else {
            placeholder.style.display = 'inline';
        }
    });
</script>


                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->

@endsection