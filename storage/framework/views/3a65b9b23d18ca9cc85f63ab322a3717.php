<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center">Contact Form Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Si.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0 ?>
            <?php $__currentLoopData = $contact_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $i++ ?>
                    <td> <?php echo $i ?> </td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->company); ?></td>
                    <td><?php echo e($data->subject); ?></td>
                    <td><?php echo e($data->message); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/contact/contact_form_data.blade.php ENDPATH**/ ?>