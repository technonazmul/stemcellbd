<?php
$general_info=App\Models\GeneralInfo::findOrFail(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php echo $__env->make('frontend.layouts.inc.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('extra_css'); ?>
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
                                
                                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                <li><a href="<?php echo e(route('eb_registration')); ?>">E.B Registration</a></li>
                            </ul>
                        </div>
                        <div class="cartbtn">
                            <div class="cart">
                                <a href="cart.html"><i class="fa-solid fa-basket-shopping"></i></a>
                            </div>
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
                                    <a href="<?php echo e($general_info->linkedin); ?>" target="blank" class="linkedin"><i class="fa-brands fa-linkedin-in"></i> <span>linkedin</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo e($general_info->twitter); ?>" target="blank" class="twitter"><i class="fa-brands fa-twitter"></i> <span>twitter</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title">
                                <h5>Eco Products</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="shop-single.html"><img src="<?php echo e(asset('frontend/assets/images/footer/product/01.jpg')); ?>" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="shop-single.html">Safe and Organic eco cleaning product</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__product--thumb">
                                        <a href="shop-single.html"><img src="<?php echo e(asset('frontend/assets/images/footer/product/02.jpg')); ?>" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__product--content">
                                        <h6><a href="shop-single.html">Safe and Organic eco cleaning product</a></h6>
                                        <div class="footer__product--rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="footer__title">
                                <h5>Recent news</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="blog-single.html"><img src="<?php echo e(asset('frontend/assets/images/footer/post/01.jpg')); ?>" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="blog-single.html">industry leaders soften change their.</a></h6>
                                        <span>15 July 2023</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__post--thumb">
                                        <a href="blog-single.html"><img src="<?php echo e(asset('frontend/assets/images/footer/post/02.jpg')); ?>" alt="webcodeltd"></a>
                                    </div>
                                    <div class="footer__post--content">
                                        <h6><a href="blog-single.html">Food industry leaders soften change their promoter.</a></h6>
                                        <span>19 July 2023</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__gallery">
                            <div class="footer__title">
                                <h5>Our photo gallery</h5>
                            </div>
                            <ul>
                                <li>
                                    <a href="<?php echo e(asset('frontend/assets/images/footer/gallery/01.jpg')); ?>" data-rel="lightcase"><img src="<?php echo e(asset('frontend/assets/images/footer/gallery/01.jpg')); ?>" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('frontend/assets/images/footer/gallery/02.jpg')); ?>" data-rel="lightcase"><img src="<?php echo e(asset('frontend/assets/images/footer/gallery/02.jpg')); ?>" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('frontend/assets/images/footer/gallery/03.jpg')); ?>" data-rel="lightcase"><img src="<?php echo e(asset('frontend/assets/images/footer/gallery/03.jpg')); ?>" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('frontend/assets/images/footer/gallery/04.jpg')); ?>" data-rel="lightcase"><img src="<?php echo e(asset('frontend/assets/images/footer/gallery/04.jpg')); ?>" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('frontend/assets/images/footer/gallery/05.jpg')); ?>" data-rel="lightcase"><img src="<?php echo e(asset('frontend/assets/images/footer/gallery/05.jpg')); ?>" alt="webcodeltd"></a>
                                </li>
                                <li>
                                    <a href="<?php echo e(asset('frontend/assets/images/footer/gallery/06.jpg')); ?>" data-rel="lightcase"><img src="<?php echo e(asset('frontend/assets/images/footer/gallery/06.jpg')); ?>" alt="webcodeltd"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="footer__bottom">
            <div class="container">
                <div class="text-center">
                    <p><?php echo e($general_info->copyright); ?><a href="https://advancellhealth.com">Advancell Health</a></p>
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
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/layouts/template.blade.php ENDPATH**/ ?>