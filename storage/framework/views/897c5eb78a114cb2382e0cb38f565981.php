<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('about.update', $about->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label>Headline</label>
        <input type="text" name="headline" value="<?php echo e($about->headline); ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Sub Headline</label>
        <input type="text" name="sub_headline" value="<?php echo e($about->sub_headline); ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Experience Years</label>
        <input type="number" name="experience_years" value="<?php echo e($about->experience_years); ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Experience Text</label>
        <input type="text" name="experience_text" value="<?php echo e($about->experience_text); ?>" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" rows="5" class="form-control"><?php echo e($about->description); ?></textarea>
    </div>
    <div class="form-group">
        <label>Main Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label>Icon Image</label>
        <input type="file" name="icon" class="form-control">
    </div>
    <div class="mb-3">
        <label for="button_text" class="form-label">Button Text</label>
        <input type="text" class="form-control" name="button_text" id="button_text" value="<?php echo e(old('button_text', $about->button_text ?? '')); ?>">
    </div>

    <div class="mb-3">
        <label for="button_link" class="form-label">Button Link</label>
        <input type="text" class="form-control" name="button_link" id="button_link" value="<?php echo e(old('button_link', $about->button_link ?? '')); ?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/about/edit.blade.php ENDPATH**/ ?>