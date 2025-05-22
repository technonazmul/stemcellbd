<?php echo csrf_field(); ?>
<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $info->title ?? '')); ?>">
</div>
<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control"><?php echo e(old('description', $info->description ?? '')); ?></textarea>
</div>
<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    <?php if(!empty($info->image)): ?>
        <img src="<?php echo e(asset('storage/public/hospitalinfos/' . $info->image)); ?>" height="60">
    <?php endif; ?>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/hospitalinfo/_form.blade.php ENDPATH**/ ?>