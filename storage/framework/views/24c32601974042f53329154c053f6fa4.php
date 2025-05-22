<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset("backend/libs/css/tagify.css")); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-center">All testimonial</h2><hr>
    <div class="row">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                  <th scope="col">Si.No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Author</th>
                  <th scope="col">Text</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <?php
              $i=0;
              ?>
              <?php $__currentLoopData = App\Models\Testimonial::orderBy('created_at', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $i++ ?>
              <tbody>
                <td scope="row"><?php echo e($i); ?></td>
                <td><?php echo e($testimonial->name); ?></td>
                <td><?php echo e($testimonial->author); ?></td>
                <td><?php echo Illuminate\Support\Str::limit(strip_tags($testimonial->text),30); ?></td>
                <td> <img src="<?php echo e(asset('storage/public/testimonial/'.$testimonial->image)); ?>" style="height:80px;width:auto;"> </td>
                <td>
                    <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.edit_testimonial',$testimonial->id)); ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="<?php echo e(route('admin.delete_testimonial',$testimonial->id)); ?>">Delete</a>
                </td>
                <tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/generalinfo/show_testimonial.blade.php ENDPATH**/ ?>