<?php $__env->startSection("content"); ?>
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>);">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Team Members</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team Members</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== --> 
    <!-- ==========Team Section Start Here========== -->
    <div class="team padding-tb section-bg" id="team">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="<?php echo e(asset('storage/public/doctors/'.$doctor->image)); ?>" alt="webcodeltd"  >
                            </div>
                            <div class="team__content">
                                <h6><a href="<?php echo e(route('single_doctor',$doctor->id)); ?>"><?php echo e($doctor->name); ?></a></h6>
                                <span><?php echo e($doctor->specialization); ?></span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href=""><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                       <?php echo e($doctors->links('pagination::bootstrap-4')); ?>

                    </ul>
                </nav>
                
            </div>
        </div>
    </div>
    <!-- ==========Team Section Ends Here========== -->
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/Laravel/stemcellbd/resources/views/frontend/pages/doctors.blade.php ENDPATH**/ ?>