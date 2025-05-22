<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Step Section Header</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('step-section.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="title">Section Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $section->title)); ?>" required>
        </div>

        <div class="form-group">
            <label for="subtitle">Section Subtitle</label>
            <textarea name="subtitle" class="form-control" rows="4" required><?php echo e(old('subtitle', $section->subtitle)); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Section</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/step/section_edit.blade.php ENDPATH**/ ?>