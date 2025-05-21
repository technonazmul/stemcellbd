<?php $__env->startSection("content"); ?>
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>);">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo e($show_services->name); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($show_services->name); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->

 <!-- ==========Service Section Start Here========== -->
 <div class="service padding-tb section-bg" id="service">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <?php
                        $services=App\Models\Service::where('service_category_id',$show_services->id)->paginate(6);
                    ?>
                    <?php if(!empty($services)): ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="<?php echo e(route('single_service',$service->id)); ?>">
                                    <img src="<?php echo e(asset('storage/public/service/'.$service->thumbnail)); ?>" alt="webcodetechnology">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="<?php echo e(route('single_service',$service->id)); ?>"><?php echo e($service->title); ?></a></h5>
                                <p>
                                    <?php echo Illuminate\Support\Str::limit(strip_tags($service->description), 150); ?>

                                </p>
                                
                                <a href="<?php echo e(route('single_service',$service->id)); ?>" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                       <?php echo e($services->links('pagination::bootstrap-4')); ?>

                    </ul>
                </nav>
            </div>
        </div>
</div>
    <!-- ==========Service Section Ends Here========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/Laravel/stemcellbd/resources/views/frontend/pages/service/show_services.blade.php ENDPATH**/ ?>