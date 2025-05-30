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
        <div class="col-md-5">
            <h3>Add Service Category</h3>
            <form method="POST" action="<?php echo e(route('admin.add_service_category')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="<?php echo e(old('name')); ?>" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="short_description">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Enter short description"><?php echo e(old('short_description')); ?></textarea>
                </div>
                
                <div class="form-group mb-3">
                    <label for="parent_id">Parent Category</label>
                    <select class="form-control" id="parent_id" name="parent_id">
                        <option value="">Select Parent Category (Optional)</option>
                        <?php
                        $parent_categories = App\Models\ServiceCategory::whereNull('parent_id')->get();
                        ?>
                        <?php $__currentLoopData = $parent_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($parent->id); ?>" <?php echo e(old('parent_id') == $parent->id ? 'selected' : ''); ?>>
                                <?php echo e($parent->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label for="image">Category Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <small class="text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <div class="col-md-7">
            <h3>All Service Categories</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Si.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Parent Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php
                        $service_categories = App\Models\ServiceCategory::with('parent')->get();
                        ?>
                        <?php $__currentLoopData = $service_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php $i++ ?>
                            <td><?php echo e($i); ?></td>
                            <td>
                                <?php if($service_category->image): ?>
                                    <img src="<?php echo e(asset('storage/public/service_categories/' . $service_category->image)); ?>" 
                                         alt="<?php echo e($service_category->name); ?>" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                <?php else: ?>
                                    <span class="text-muted">No Image</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($service_category->name); ?></td>
                            <td>
                                <?php if($service_category->parent): ?>
                                    <span class="badge badge-info"><?php echo e($service_category->parent->name); ?></span>
                                <?php else: ?>
                                    <span class="text-muted">Root Category</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($service_category->short_description): ?>
                                    <?php echo e(Str::limit($service_category->short_description, 50)); ?>

                                <?php else: ?>
                                    <span class="text-muted">No description</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.edit_service_category',$service_category->id)); ?>">
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                </a>
                                <a href="<?php echo e(route('admin.delete_service_category', $service_category->id)); ?>" 
                                   onclick="return confirm('Are you sure? This will also delete all subcategories and associated services.')">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/service_category.blade.php ENDPATH**/ ?>