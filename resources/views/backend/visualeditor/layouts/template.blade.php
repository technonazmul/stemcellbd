@php
$general_info=App\Models\GeneralInfo::findOrFail(1);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
<title>{{$general_info->meta_name}}</title>
@include('frontend.layouts.inc.css')
@yield('extra_css')
<style>
    /* Solution 1: Basic Scrollable Dropdown */
.menu > ul > li > ul {
    max-height: 300px; /* Adjust height as needed */
    overflow-y: auto;
    overflow-x: hidden;
}

/* Solution 2: More Styled Scrollable Dropdown */
.menu > ul > li > ul {
    max-height: 350px;
    overflow-y: auto;
    overflow-x: hidden;
    scrollbar-width: thin;
    scrollbar-color: #888 #f1f1f1;
}

.admin_top_bar {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-align: center;
}

/* Custom scrollbar for webkit browsers */
.menu > ul > li > ul::-webkit-scrollbar {
    width: 6px;
}

.menu > ul > li > ul::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 3px;
}

.menu > ul > li > ul::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 3px;
}

.menu > ul > li > ul::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Solution 3: Enhanced Dropdown with Better UX */
.menu > ul > li {
    position: relative;
}

.menu > ul > li > ul {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    border-radius: 4px;
    min-width: 200px;
    max-height: 400px;
    overflow-y: auto;
    overflow-x: hidden;
    z-index: 1000;
    padding: 10px 0;
    
    /* Smooth scrolling */
    scroll-behavior: smooth;
    
    /* Hide by default */
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

/* Show dropdown on hover */
.menu > ul > li:hover > ul {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Style dropdown items */
.menu > ul > li > ul > li {
    padding: 0;
    margin: 0;
    border-bottom: 1px solid #eee;
}

.menu > ul > li > ul > li:last-child {
    border-bottom: none;
}

.menu > ul > li > ul > li > a {
    display: block;
    padding: 12px 20px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.2s ease;
    font-size: 14px;
}

.menu > ul > li > ul > li > a:hover {
    background-color: #f8f9fa;
    color: #007bff;
}
.modal-backdrop {

    z-index: 1;

}
/* Solution 4: Grid Layout for Many Items (Alternative approach) */
.menu > ul > li > ul.grid-dropdown {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5px;
    max-height: 350px;
    overflow-y: auto;
    min-width: 400px;
    padding: 15px;
}

.menu > ul > li > ul.grid-dropdown > li {
    border: none;
    margin-bottom: 5px;
}

.menu > ul > li > ul.grid-dropdown > li > a {
    padding: 8px 12px;
    border-radius: 4px;
    background-color: #f8f9fa;
    font-size: 13px;
}

/* Solution 5: Mobile Responsive Dropdown */
@media (max-width: 768px) {
    .menu > ul > li > ul {
        position: static;
        max-height: 200px;
        width: 100%;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        margin-top: 10px;
        border-radius: 4px;
    }
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- ==========Top Bar Section Starts Here write something for welcome admin ========== -->
   
    <!-- ==========Header Section Starts Here========== -->
    <header class="header">
        <div class="admin_top_bar">
        <p>Visual Editor</p>
        </div>
        <div class="header__top">
            <div class="container">
                <div class="row g-1 g-lg-3 align-items-center">
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>
                                        <a href="mailto:{{ $general_info->email }}" style="color: white;">
                                            {{ $general_info->email }}
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>
                                        Hotline - 
                                        <a href="tel:{{ $general_info->hotline }}" style="color: white;">
                                            {{ $general_info->hotline }}
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <a href="{{route('admin.general_info')}}" style="color: white;"><i class="icofont-edit"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-12 text-center text-lg-end mb-3 mb-lg-0">
                        <div class="header__top--right text-lg-end">
                            <div class="user">
                                <div class="user__icon">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <ul>
                                    <li>
                                        
                                         <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="section" value="header">
                                            <input type="hidden" name="key" value="login_button_text">

                                            <div class="">
                                                {{-- Editable H2 --}}
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="{{ $headerVisuals['login_button_text'] ?? '' }}">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </li>
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom--area">
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="{{asset('storage/public/logos/'.$general_info->logo)}}" alt="logo"></a>
                         <a href="{{route('admin.general_info')}}" style="color: black;"><i class="icofont-edit"></i></a>
                    </div>
                    <div class="header__bararea">
                        <div class="header__bar d-xl-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="header__ellepsis d-xl-none">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <div class="menupart">
                        <div class="menu">
                            
                            <ul>
                                @foreach ($menus as $menu)
                                    <li>
                                        <a href="{{ getMenuUrl($menu) }}" target="{{ $menu->target }}" class="{{ $menu->css_class }}">
                                            @if ($menu->icon_class)
                                                <i class="{{ $menu->icon_class }}"></i>
                                            @endif
                                            {{ $menu->title }}
                                        </a>

                                        @if ($menu->children && count($menu->children) > 0)
                                            <ul>
                                                @foreach ($menu->children as $child)
                                                    <li>
                                                        <a href="{{ getMenuUrl($child) }}" target="{{ $child->target }}" class="{{ $child->css_class }}">
                                                            @if ($child->icon_class)
                                                                <i class="{{ $child->icon_class }}"></i>
                                                            @endif
                                                            {{ $child->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                                <li><a href="{{route('admin.menus.index')}}" style="color: black;"><i class="icofont-edit"></i></a></li>
                            </ul>
                        </div>
                        <div class="cartbtn">
                            <div class="cart">
                                <a href="{{route('cart.index')}}"><i class="fa-solid fa-basket-shopping"></i></a>
                            </div>
                            <div class="headerbtn">
                                
                                        <!-- Trigger Button -->
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#headerEditModal">
                                Edit {{ $headerVisuals['appointment_button_text'] ?? '' }} Button
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="headerEditModal" tabindex="-1" aria-labelledby="headerEditModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                <div class="modal-header">
                                    <h5 class="modal-title" id="headerEditModalLabel">Edit {{ $headerVisuals['appointment_button_text'] ?? '' }} Button</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                
                                <div class="modal-body">
                                    <!-- Form: Button Text -->
                                    <form action="{{ route('admin.visual_edit.update') }}" method="POST" class="mb-3">
                                    @csrf
                                    <input type="hidden" name="section" value="header">
                                    <input type="hidden" name="key" value="appointment_button_text">

                                    <div class="form-group mb-2">
                                        <label for="appointment_button_text">Button Text</label>
                                        <input type="text" name="input_value" class="form-control"
                                            value="{{ $headerVisuals['appointment_button_text'] ?? '' }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Text</button>
                                    </form>

                                    <!-- Form: Button Link -->
                                    <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="section" value="header">
                                    <input type="hidden" name="key" value="appointment_button_link">

                                    <div class="form-group mb-2">
                                        <label for="appointment_button_link">Button Link</label>
                                        <input type="text" name="input_value" class="form-control"
                                            value="{{ $headerVisuals['appointment_button_link'] ?? '' }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Link</button>
                                    </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>

                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    @yield("content")
    <!-- ==========Footer Section Ends Here========== -->
    <footer class="footer bg-img" style="background-image: url({{asset('frontend/assets/images/bg/03.jpg')}});">
         <div class="footer__top">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--title">
                            
                            <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="section" value="footer">
                                <input type="hidden" name="key" value="newsletter_title">

                                <div class="">
                                    {{-- Editable H2 --}}
                                    <div class="form-group mb-3">
                                        <input type="text" name="input_value" class="form-control border-1 display-5 fw-bold"
                                            style="font-size: 2rem;"
                                            value="{{ $footerVisuals['newsletter_title'] ?? '' }}">
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--form">
                            <form action="{{ route('subscribe.store') }}" method="POST">
                                @csrf
                                <input type="email" placeholder="enter email address" name="email" required>
                                <button type="submit" class="lab-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="footer__middile">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__about">
                            <div class="footer__title">
                                <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="section" value="footer">
                                <input type="hidden" name="key" value="about_us_title">

                                <div class="">
                                    {{-- Editable H2 --}}
                                    <div class="form-group mb-3">
                                        <input type="text" name="input_value" class="form-control border-1 display-5 fw-bold"
                                            style="font-size: 2rem;"
                                            value="{{ $footerVisuals['about_us_title'] ?? '' }}">
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                                
                            </div>
                            <p>{{$general_info->about_us}}</p>
                           
                            <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="section" value="footer">
                                <input type="hidden" name="key" value="follow_us_title">

                                <div class="">
                                    {{-- Editable H2 --}}
                                    <div class="form-group mb-3">
                                        <input type="text" name="input_value" class="form-control border-1 display-5 fw-bold"
                                            style="font-size: 2rem;"
                                            value="{{ $footerVisuals['follow_us_title'] ?? '' }}">
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            <ul>
                                <li>
                                    <a href="{{$general_info->facebook}}" target="blank" class="facebook"><i class="fa-brands fa-facebook-f"></i> <span>Facebook</span></a>
                                </li>
                                <li>
                                    <a href="{{$general_info->youtube}}" target="blank" class="linkedin"><i class="fa-brands fa-youtube"></i> <span>Youtube</span></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title">
                                
                                <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="section" value="footer">
                                <input type="hidden" name="key" value="products_title">

                                <div class="">
                                    {{-- Editable H2 --}}
                                    <div class="form-group mb-3">
                                        <input type="text" name="input_value" class="form-control border-1 display-5 fw-bold"
                                            style="font-size: 2rem;"
                                            value="{{ $footerVisuals['products_title'] ?? '' }}">
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            <br>
                            </div>
                            <ul>
                                 @foreach (App\Models\Product::where('show_footer', 1)->get() as $item)
                                @php
                                    $image_to_array = explode(',', $item->images);

                                @endphp
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="{{route('shop_single', $item->slug)}}"><img src="{{asset('storage/public/products/'.$image_to_array[0])}}" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="{{route('shop_single', $item->slug)}}">{{$item->name}}</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="footer__title">
                                
                            <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="section" value="footer">
                                <input type="hidden" name="key" value="blogs_title">

                                <div class="">
                                    {{-- Editable H2 --}}
                                    <div class="form-group mb-3">
                                        <input type="text" name="input_value" class="form-control border-1 display-5 fw-bold"
                                            style="font-size: 2rem;"
                                            value="{{ $footerVisuals['blogs_title'] ?? '' }}">
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            <br>
                            </div>
                            <ul>
                                @php
                                $blogs=App\Models\Blog::take(3)->get();
                                @endphp
                                @foreach($blogs as $blog)
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="{{route('single_blog',$blog->slug)}}"><img src="{{asset('storage/public/blog/'.$blog->thumbnail)}}" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="{{route('single_blog',$blog->slug)}}">{{$blog->title}}</a></h6>
                                        @php
                                            $date = date('F j,Y', strtotime($blog->created_at));
                                        @endphp
                                        <span>@php echo $date @endphp</span>
                                    </div>
                                </li>
                                
                                @endforeach

                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__gallery">
                            <div class="footer__title">
                               
                                <form action="{{ route('admin.visual_edit.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="section" value="footer">
                                <input type="hidden" name="key" value="photo_gallery_title">

                                <div class="">
                                    {{-- Editable H2 --}}
                                    <div class="form-group mb-3">
                                        <input type="text" name="input_value" class="form-control border-1 display-5 fw-bold"
                                            style="font-size: 2rem;"
                                            value="{{ $footerVisuals['photo_gallery_title'] ?? '' }}">
                                    </div>

                                    

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            <br>
                            </div>
                            <ul>
                                @foreach (App\Models\Gallery::all() as $gallery)
                                    <li>
                                        <a href="{{ asset('storage/public/gallery/' . $gallery->image) }}" data-rel="lightcase">
                                            <img src="{{ asset('storage/public/gallery/' . $gallery->image) }}" alt="gallery image">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
        <div class="footer__bottom">
            <div class="container">
                <div class="text-center">
                    <p>{{$general_info->copyright}}</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->


    
    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-turn-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- All Scripts -->
    @include('frontend.layouts.inc.script')
    @yield('extra_script')
    @stack('scripts')
</body>
</html>