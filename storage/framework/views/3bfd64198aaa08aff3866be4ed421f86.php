<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('hospitalinfo.create')); ?>" class="btn btn-success mb-2">Add New Info</a>
    <table class="table">
        <thead>
            <tr><th>Title</th><th>Description</th><th>Image</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($info->title); ?></td>
                    <td><?php echo e(Str::limit($info->description, 100)); ?></td>
                    <td>
                        <?php if($info->image): ?>
                            <img src="<?php echo e(asset('storage/public/hospitalinfos/' . $info->image)); ?>" height="50"/>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('hospitalinfo.edit', $info->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('hospitalinfo.destroy', $info->id)); ?>" method="POST" style="display:inline-block">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/hospitalinfo/index.blade.php ENDPATH**/ ?>