<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center">Doctors list</h1>
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
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Si.No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Specialization</th>
                <th>Image</th>
                <th>Action</th>
                
            </tr>
        </thead>
        </thead>
        <?php $i=0 ?>
        <?php if(!empty( $doctor)): ?>
        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <?php $i++?>
                <td> <?php echo $i ?> </td>
                <td><?php echo e($doctor->name); ?></td>
                <td><?php echo e($doctor->phone); ?></td>
                <td><?php echo e($doctor->specialization); ?></td>
                <td> <img height="200" width="80" src="<?php echo e(asset('storage/public/doctors/'.$doctor->image)); ?>" class="card-img-top" alt="..."></td>
                <td>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo e($doctor->id); ?>">
                        See More
                      </button>
                    <a href="<?php echo e(route('admin.edit_doctor', ['id' => $doctor->id])); ?>">
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo e(route('admin.delete_doctor', ['id' => $doctor->id])); ?>">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
                
                <div class="modal fade" id="exampleModal<?php echo e($doctor->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Doctor details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-body">
                                <h3>Name: <?php echo e($doctor->name); ?></h3>
                                <p>Phone: <?php echo e($doctor->phone); ?></p>
                                <p>Email: <?php echo e($doctor->email); ?></p>
                                <p>Specialization: <?php echo e($doctor->specialization); ?></p>
                                <p>Chamber: <?php echo e($doctor->chamber); ?></p>
                                <p>Responsibility: <?php echo e($doctor->responsibility); ?></p>
                                <p>Experience: <?php echo e($doctor->experience); ?></p>
                                <p>Facebook: <?php echo e($doctor->facebook); ?></p>
                                <p>Instagram: <?php echo e($doctor->instagram); ?></p>
                                <p>Telegram: <?php echo e($doctor->telegram); ?></p>
                                <p>LinkedIn: <?php echo e($doctor->linkedin); ?></p>
                                <p>Twitter: <?php echo e($doctor->twitter); ?></p>
                                <p>About: <?php echo Illuminate\Support\Str::limit(strip_tags($doctor->about),90); ?></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                </div>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
                        
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/Laravel/stemcellbd/resources/views/backend/doctor/doctor.blade.php ENDPATH**/ ?>