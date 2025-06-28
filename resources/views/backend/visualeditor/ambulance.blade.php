@php
    $general_info=App\Models\GeneralInfo::findOrFail(1);
    $doctors = App\Models\Doctor::all(); // Get all doctors for appointment form
    $services = App\Models\Treatment_type::all(); // For appointment form services
@endphp
@extends('backend.visualeditor.layouts.template')
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
            <div
            class="pageheader bg-img"
            style="background-image: url({{asset('storage/public/visual_edits/' . $visualEditAmbulanceContent['header_background_image'] ?? '')}})"
        >
            <div class="container">
               


                <div class="pageheader__content">
                     <form action="{{ route('admin.visual_edit.update') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light">
                    @csrf
                    <input type="hidden" name="section" value="ambulance_page">
                    <input type="hidden" name="key" value="header_background_image">

                    <div class="mb-3">
                        <label for="file" class="form-label fw-bold">Upload Background Image</label>
                        <input type="file" name="file" class="form-control" id="file" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-upload me-1"></i> Upload
                    </button>
                </form>
                   <div class="col-md-4 my-2 mx-auto text-center">
                    <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="section" value="ambulance_page">
                        <input type="hidden" name="key" value="title">

                        <div class="">
                            {{-- Editable H2 --}}
                            <div class="form-group mb-3">
                                <input type="text" name="input_value" class="form-control"
                                    
                                    value="{{ $visualEditAmbulanceContent['title'] ?? '' }}">
                            </div>

                            

                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                   </div>
                    
                    <br>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                
                                <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="section" value="ambulance_page">
                                            <input type="hidden" name="key" value="breadcrumb_first_item_text">

                                            <div class="">
                                                {{-- Editable H2 --}}
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="{{ $visualEditAmbulanceContent['breadcrumb_first_item_text'] ?? '' }}">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                        <br>
                                        <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="section" value="ambulance_page">
                                            <input type="hidden" name="key" value="breadcrumb_first_item_link">

                                            <div class="">
                                                {{-- Editable H2 --}}
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="{{ $visualEditAmbulanceContent['breadcrumb_first_item_link'] ?? '' }}">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="section" value="ambulance_page">
                                            <input type="hidden" name="key" value="breadcrumb_second_item_text">

                                            <div class="">
                                                {{-- Editable H2 --}}
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="{{ $visualEditAmbulanceContent['breadcrumb_second_item_text'] ?? '' }}">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                        <br>
                                        <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="section" value="ambulance_page">
                                            <input type="hidden" name="key" value="breadcrumb_second_item_link">

                                            <div class="">
                                                {{-- Editable H2 --}}
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="{{ $visualEditAmbulanceContent['breadcrumb_second_item_link'] ?? '' }}">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                            </li>
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
                        
                        <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="section" value="ambulance_page">
                            <input type="hidden" name="key" value="ambulance_description">

                            <div class="form-group mb-3">
                                <label for="ambulance_description" class="form-label fw-bold">Description</label>
                                <textarea name="input_value" class="form-control wysiwyg-editor" id="ambulance_description">{{ $visualEditAmbulanceContent['ambulance_description'] ?? 'Your online pharmacy' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->

@endsection

@push('scripts')
   <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '.wysiwyg-editor',
    height: 300,
    menubar: false,
    plugins: 'code',
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | code',
    branding: false
  });
</script>


@endpush