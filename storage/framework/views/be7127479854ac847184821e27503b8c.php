<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Video Section</h2>
    

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Video</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($video->thumb_image): ?>
                        <img src="<?php echo e(asset('storage/public/' . $video->thumb_image)); ?>" alt="thumb" width="100" />
                    <?php endif; ?>
                </td>
                <td><?php echo e($video->title); ?></td>
                <td>
                    <?php if($video->video_url): ?>
                        <video width="150" controls>
                            <source src="<?php echo e(asset('storage/public/' . $video->video_url)); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('video.edit', $video->id)); ?>" class="btn btn-sm btn-warning">Edit</a>

                    <form action="<?php echo e(route('video.destroy', $video->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/video/index.blade.php ENDPATH**/ ?>