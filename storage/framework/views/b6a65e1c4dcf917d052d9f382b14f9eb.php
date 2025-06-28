<?php $__env->startSection('content'); ?>
<h2>Subscribers List</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Subscribed At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($subscriber->id); ?></td>
            <td><?php echo e($subscriber->email); ?></td>
            <td><?php echo e($subscriber->created_at); ?></td>
            <td>

                <div class="d-flex">
                <a href="mailto:<?php echo e($subscriber->email); ?>" class="btn btn-primary btn-sm me-2">Email</a>
                &nbsp;
                &nbsp;
                <form action="<?php echo e(route('subscribers.destroy', $subscriber->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this subscriber?')">Delete</button>
                </form>
            </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/subscribers/index.blade.php ENDPATH**/ ?>