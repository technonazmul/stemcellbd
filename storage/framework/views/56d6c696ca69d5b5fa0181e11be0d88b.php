<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('about.edit', $about->id)); ?>" class="btn btn-primary mb-3">Edit About</a>
<div>
    <h2><?php echo e($about->headline); ?></h2>
    <h6><?php echo e($about->sub_headline); ?></h6>
    <p><?php echo e($about->description); ?></p>
    <p><strong><?php echo e($about->experience_years); ?>+</strong> <?php echo e($about->experience_text); ?></p>
    <img src="<?php echo e(asset('storage/public/about/' . $about->image)); ?>" width="200" alt="Main Image">
    <img src="<?php echo e(asset('storage/public/about/' . $about->icon)); ?>" width="100" alt="Icon Image">
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/about/index.blade.php ENDPATH**/ ?>