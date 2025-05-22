<?php $__env->startSection('content'); ?>
    <h3>Create Hospital Info</h3>
    <form action="<?php echo e(route('hospitalinfo.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo $__env->make('backend.hospitalinfo._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/hospitalinfo/create.blade.php ENDPATH**/ ?>