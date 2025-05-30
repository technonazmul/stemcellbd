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
            <h3>Add Treatmen Types</h3>
            <form method="POST" action="<?php echo e(route('admin.add_treatmen_types')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
         <h3>All Treatment Types</h3>
         <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0 ?>
                <?php $__currentLoopData = $treatmentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $i++?>
                    <td> <?php echo $i ?> </td>
                    <td><?php echo e($data->title); ?></td>
                    <td><a href="<?php echo e(route('admin.edit_treatment_types',$data->id)); ?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
                    <td> <a href="<?php echo e(route('admin.delete_treatmen_types', $data->id)); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-sm btn-danger">Delate</button></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
        
          
          <!-- Modal -->
                  
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/appointment/treatment_types.blade.php ENDPATH**/ ?>