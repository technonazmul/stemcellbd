<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Update Appointment Banner</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('update-appointment-banner', 1)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?> 

        <div class="form-group">
            <label for="image">Background Image <span class="text-danger">*</span></label><br>
            <?php if($banner->appointment_banner): ?>
                <img src="<?php echo e(asset('storage/public/banners/' . $banner->appointment_banner)); ?>" alt="Current Banner" style="max-width: 300px; margin-bottom: 10px;">
            <?php endif; ?>
            <input type="file" class="form-control-file" name="image" id="image" required>
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger d-block"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/generalinfo/edit_appointment_banner.blade.php ENDPATH**/ ?>