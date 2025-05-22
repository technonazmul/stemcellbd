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
        <div class="col-md-4">
            <h3>Add service Category</h3>
            <form method="POST" action="<?php echo e(route('admin.add_service_category')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="name" placeholder="Enter name"required>
                </div>
                <div></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
         <h3>All service Category</h3>
         <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Name</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                <?php
                $service_category = App\Models\ServiceCategory::get();
                ?>
                <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $i++?>
                    <td> <?php echo $i ?> </td>
                    <td><?php echo e($service_category->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.edit_service_category',$service_category->id)); ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        <a href="<?php echo e(route('admin.delete_service_category', $service_category->id)); ?>" onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-danger">Delate</button></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>                
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/service_category.blade.php ENDPATH**/ ?>