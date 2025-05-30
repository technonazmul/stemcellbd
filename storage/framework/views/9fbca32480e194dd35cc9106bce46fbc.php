<?php
$general_info=App\Models\GeneralInfo::findOrFail(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo e($general_info->meta_name); ?></title>
<?php echo $__env->make('frontend.layouts.inc.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('extra_css'); ?>
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
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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


    <!-- ==========Header Section Starts Here========== -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row g-1 g-lg-3 align-items-center">
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span><?php echo e($general_info->email); ?></span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>Hotline - <?php echo e($general_info->hotline); ?></span>
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
                                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                    
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
                        <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('frontend/assets/images/header/logo.png')); ?>" alt="logo"></a>
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
                                <li><a href="<?php echo e(route('index')); ?>" class="active">Home</a></li>
                                <li>
                                    <a>Service</a>
                                    <?php
                                    $service_category = App\Models\ServiceCategory::all();
                                    ?>
                                    
                                    <ul>
                                        <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('show_services',$service_category->id)); ?>"><?php echo e(ucfirst($service_category->name)); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    
                                </li>
                                <li><a href="<?php echo e(route('doctors')); ?>">Doctors</a></li>
                                <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                                <li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
                                <li><a href="<?php echo e(route('pages.public', 'about-us')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                <li><a href="<?php echo e(route('eb_registration')); ?>">E.B Registration</a></li>
                            </ul>
                        </div>
                        <div class="cartbtn">
                            
                            <div class="headerbtn">
                                <a href="<?php echo e(route('index')); ?>#appointment" class="lab-btn">appointment <i class="fa-solid fa-border-all"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    <?php echo $__env->yieldContent("content"); ?>
    <!-- ==========Footer Section Ends Here========== -->
    <footer class="footer bg-img" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/03.jpg')); ?>);">
         <div class="footer__top">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--title">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__top--form">
                            <form action="#">
                                <input type="email" placeholder="enter email address">
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
                                <h5>about us</h5>
                            </div>
                            <p><?php echo e($general_info->about_us); ?></p>
                            <h6>follow us</h6>
                            <ul>
                                <li>
                                    <a href="<?php echo e($general_info->facebook); ?>" target="blank" class="facebook"><i class="fa-brands fa-facebook-f"></i> <span>Facebook</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo e($general_info->youtube); ?>" target="blank" class="linkedin"><i class="fa-brands fa-youtube"></i> <span>Youtube</span></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title">
                                <h5>Products</h5>
                            </div>
                            <ul>
                                 <?php $__currentLoopData = App\Models\Product::where('show_footer', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $image_to_array = explode(',', $item->images);

                                ?>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="<?php echo e(route('shop_single', $item->slug)); ?>"><img src="<?php echo e(asset('storage/public/products/'.$image_to_array[0])); ?>" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="<?php echo e(route('shop_single', $item->slug)); ?>"><?php echo e($item->name); ?></a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="footer__title">
                                <h5>Blogs</h5>
                            </div>
                            <ul>
                                <?php
                                $blogs=App\Models\Blog::take(3)->get();
                                ?>
                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="<?php echo e(route('single_blog',$blog->id)); ?>"><img src="<?php echo e(asset('storage/public/blog/'.$blog->thumbnail)); ?>" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="<?php echo e(route('single_blog',$blog->id)); ?>"><?php echo e($blog->title); ?></a></h6>
                                        <?php
                                            $date = date('F j,Y', strtotime($blog->created_at));
                                        ?>
                                        <span><?php echo $date ?></span>
                                    </div>
                                </li>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__gallery">
                            <div class="footer__title">
                                <h5>Our photo gallery</h5>
                            </div>
                            <ul>
                                <?php $__currentLoopData = App\Models\Gallery::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(asset('storage/public/gallery/' . $gallery->image)); ?>" data-rel="lightcase">
                                            <img src="<?php echo e(asset('storage/public/gallery/' . $gallery->image)); ?>" alt="gallery image">
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
        <div class="footer__bottom">
            <div class="container">
                <div class="text-center">
                    <p><?php echo e($general_info->copyright); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->


    
    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-turn-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- All Scripts -->
    <?php echo $__env->make('frontend.layouts.inc.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('extra_script'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/layouts/template.blade.php ENDPATH**/ ?>