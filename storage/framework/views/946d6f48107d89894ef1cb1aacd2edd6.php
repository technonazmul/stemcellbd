<?php $__env->startSection('content'); ?>
<div class="container">
    <h2><?php echo e(isset($video) ? 'Edit' : 'Create'); ?> Video Section</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
        </div>
    <?php endif; ?>

    <form 
        action="<?php echo e(isset($video) ? route('video.update', $video->id) : route('video.store')); ?>" 
        method="POST" 
        enctype="multipart/form-data"
    >
        <?php echo csrf_field(); ?>
        <?php if(isset($video)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <div class="mb-3">
            <label>Thumbnail Image</label>
            <input type="file" name="thumb_image" class="form-control" accept="image/*" />
            <?php if(isset($video) && $video->thumb_image): ?>
                <img src="<?php echo e(asset('storage/' . $video->thumb_image)); ?>" width="150" alt="thumb" />
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label>Video File (MP4)</label>
            <input type="file" name="video_url" class="form-control" accept="video/mp4" />
            <?php if(isset($video) && $video->video_url): ?>
                <video width="150" controls>
                    <source src="<?php echo e(asset('storage/' . $video->video_url)); ?>" type="video/mp4" />
                </video>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $video->title ?? '')); ?>" required />
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required><?php echo e(old('description', $video->description ?? '')); ?></textarea>
        </div>

        <hr>
        <h4>Stat 1</h4>

        <div class="mb-3">
            <label>Stat 1 Icon</label>
            <input type="file" name="stat1_icon" class="form-control" accept="image/*" />
            <?php if(isset($video) && $video->stat1_icon): ?>
                <img src="<?php echo e(asset('storage/' . $video->stat1_icon)); ?>" width="50" alt="icon1" />
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label>Stat 1 Number</label>
            <input type="text" name="stat1_number" class="form-control" value="<?php echo e(old('stat1_number', $video->stat1_number ?? '')); ?>" />
        </div>

        <div class="mb-3">
            <label>Stat 1 Text</label>
            <input type="text" name="stat1_text" class="form-control" value="<?php echo e(old('stat1_text', $video->stat1_text ?? '')); ?>" />
        </div>

        <hr>
        <h4>Stat 2</h4>

        <div class="mb-3">
            <label>Stat 2 Icon</label>
            <input type="file" name="stat2_icon" class="form-control" accept="image/*" />
            <?php if(isset($video) && $video->stat2_icon): ?>
                <img src="<?php echo e(asset('storage/' . $video->stat2_icon)); ?>" width="50" alt="icon2" />
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label>Stat 2 Number</label>
            <input type="text" name="stat2_number" class="form-control" value="<?php echo e(old('stat2_number', $video->stat2_number ?? '')); ?>" />
        </div>

        <div class="mb-3">
            <label>Stat 2 Text</label>
            <input type="text" name="stat2_text" class="form-control" value="<?php echo e(old('stat2_text', $video->stat2_text ?? '')); ?>" />
        </div>

        <hr>

        <div class="mb-3">
            <label>Button URL</label>
            <input type="url" name="button_url" class="form-control" value="<?php echo e(old('button_url', $video->button_url ?? '')); ?>" />
        </div>

        <div class="mb-3">
            <label>Button Text</label>
            <input type="text" name="button_text" class="form-control" value="<?php echo e(old('button_text', $video->button_text ?? '')); ?>" />
        </div>

        <button type="submit" class="btn btn-success"><?php echo e(isset($video) ? 'Update' : 'Create'); ?></button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/video/create.blade.php ENDPATH**/ ?>