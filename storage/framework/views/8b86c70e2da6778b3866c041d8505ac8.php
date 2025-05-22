<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h4>Edit Step</h4>
    <form action="<?php echo e(route('steps.update', $step->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label>Step Number</label>
            <input type="text" name="step_number" class="form-control" value="<?php echo e($step->step_number); ?>" required>
        </div>
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo e($step->title); ?>" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required><?php echo e($step->description); ?></textarea>
        </div>
        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="<?php echo e(asset('storage/public/step/' . $step->image)); ?>" width="100">
        </div>
        <div class="mb-3">
            <label>New Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/step/edit.blade.php ENDPATH**/ ?>