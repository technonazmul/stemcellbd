<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-center">Update Banner</h2>
    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>
    <form action="<?php echo e(route('admin.update_banner', $banner->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        
        <div class="mb-3">
            <label for="title" class="form-label">Banner Title</label>
            <input type="text" id="title" name="title" class="form-control"
                   value="<?php echo e(old('title', $banner->title ?? '')); ?>" required>
        </div>

        
        <div class="mb-3">
            <label for="subtitle" class="form-label">Banner Subtitle</label>
            <textarea id="subtitle" name="subtitle" class="form-control" rows="3"><?php echo e(old('subtitle', $banner->subtitle ?? '')); ?></textarea>
        </div>

        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="button1_text" class="form-label">Button 1 Text</label>
                <input type="text" id="button1_text" name="button1_text" class="form-control"
                       value="<?php echo e(old('button1_text', $banner->button1_text ?? '')); ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label for="button1_url" class="form-label">Button 1 URL</label>
                <input type="text" id="button1_url" name="button1_url" class="form-control"
                       value="<?php echo e(old('button1_url', $banner->button1_url ?? '')); ?>">
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="button2_text" class="form-label">Button 2 Text</label>
                <input type="text" id="button2_text" name="button2_text" class="form-control"
                       value="<?php echo e(old('button2_text', $banner->button2_text ?? '')); ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label for="button2_url" class="form-label">Button 2 URL</label>
                <input type="text" id="button2_url" name="button2_url" class="form-control"
                       value="<?php echo e(old('button2_url', $banner->button2_url ?? '')); ?>">
            </div>
        </div>

        
        <div class="mb-3">
            <label for="background_image" class="form-label">Background Image</label>
            <input type="file" name="background_image" id="background_image" class="form-control">
            <?php if(!empty($banner->background_image)): ?>
                <div class="mt-2">
                    <img src="<?php echo e(asset('storage/public/' . $banner->background_image)); ?>" alt="Banner Background"
                         class="img-thumbnail" style="max-width: 300px;">
                </div>
            <?php endif; ?>
        </div>

        
        

        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/generalinfo/banner.blade.php ENDPATH**/ ?>