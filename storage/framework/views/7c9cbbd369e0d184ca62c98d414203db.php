<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset("backend/libs/css/tagify.css")); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-center">All Category</h2><hr>
    <div class="row">
       <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-md-2 text-center">
            <div class="card card-body">
                <a class="btn btn-sm" href="<?php echo e(route('admin.show_service',$category->id)); ?>"><?php echo e($category->name); ?></a>
            </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/all_service.blade.php ENDPATH**/ ?>