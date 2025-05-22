<?php $__env->startSection("content"); ?>
  <!-- ==========Page Header Section Start Here========== -->
  <div class="pageheader bg-img" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>);">
    <div class="container">
        <div class="pageheader__content">
            <h2><?php echo e($doctor->name); ?></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($doctor->name); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- ==========Page Header Section Ends Here========== -->



<!-- ==========Team Section Start Here========== -->
<div class="team team--deatils padding-tb">
    <div class="container">
        <div class="section__wrapper">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-5 col-12">
                    <div class="team__thumb">
                        <img  src="<?php echo e(asset('storage/public/doctors/'.$doctor->image)); ?>" alt="webcode">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="team__thumb team__thumb--info">
                        <h3><?php echo e($doctor->name); ?></h3>
                        <span><?php echo e($doctor->specialization); ?></span>
                        <ul>
                            <li>
                                <div class="left">
                                    <p>Chember</p>
                                </div>
                                <div class="right">
                                    <p><?php echo e($doctor->chamber); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Responsibility</p>
                                </div>
                                <div class="right">
                                    <p><?php echo e($doctor->responsibility); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Experience</p>
                                </div>
                                <div class="right">
                                    <p><?php echo e($doctor->experience); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Email</p>
                                </div>
                                <div class="right">
                                    <p><?php echo e($doctor->email); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Phone</p>
                                </div>
                                <div class="right">
                                    <p><?php echo e($doctor->phone); ?></p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="left">
                                    <p>follow me</p>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="<?php echo e($doctor->facebook); ?>" target="blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo e($doctor->instagram); ?>" target="blank" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="team__content">
                        <?php echo $doctor->about; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Team Section Ends Here========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/single_doctor.blade.php ENDPATH**/ ?>