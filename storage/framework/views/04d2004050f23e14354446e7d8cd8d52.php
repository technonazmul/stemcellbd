<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Service Category</h3>
                    <a href="<?php echo e(route('admin.service_category')); ?>" class="btn btn-secondary btn-sm float-right">Back to List</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('admin.update_service_category', $service_category->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" 
                                   value="<?php echo e(old('name', $service_category->name)); ?>" 
                                   placeholder="Enter category name" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="short_description">Short Description</label>
                            <textarea class="form-control" id="short_description" name="short_description" 
                                      rows="3" placeholder="Enter short description"><?php echo e(old('short_description', $service_category->short_description)); ?></textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="parent_id">Parent Category</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="">Select Parent Category (Optional)</option>
                                <?php
                                $parent_categories = App\Models\ServiceCategory::whereNull('parent_id')
                                    ->where('id', '!=', $service_category->id)
                                    ->get();
                                ?>
                                <?php $__currentLoopData = $parent_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($parent->id); ?>" 
                                        <?php echo e(old('parent_id', $service_category->parent_id) == $parent->id ? 'selected' : ''); ?>>
                                        <?php echo e($parent->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small class="text-muted">Leave empty to make this a root category</small>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="image">Category Image</label>
                            <?php if($service_category->image): ?>
                                <div class="mb-2">
                                    <img src="<?php echo e(asset('storage/public/service_categories/' . $service_category->image)); ?>" 
                                         alt="<?php echo e($service_category->name); ?>" 
                                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;">
                                    <p class="text-sm text-muted mt-1">Current image</p>
                                </div>
                            <?php endif; ?>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <small class="text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB). Leave empty to keep current image.</small>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                            <a href="<?php echo e(route('admin.service_category')); ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/edit_service_category.blade.php ENDPATH**/ ?>