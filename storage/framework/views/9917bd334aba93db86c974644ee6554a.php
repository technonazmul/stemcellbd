<?php $__env->startSection('content'); ?>
<div class="container">
    <form method="POST" action="<?php echo e(route('admin.update_treatmen_types',['id'=>$data->id])); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($data->title); ?>" placeholder="Enter title"required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/appointment/edit_treatment_types.blade.php ENDPATH**/ ?>