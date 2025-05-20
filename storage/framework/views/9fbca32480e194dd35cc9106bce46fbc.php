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