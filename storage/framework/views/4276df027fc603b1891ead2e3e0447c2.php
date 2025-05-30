<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-center mb-5">Appointments</h2>
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
                <th>Doctor</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Treatment Types</th>
                <th>Week Day</th>
                <th>Message</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        </thead>
        <?php $i=0 ?>
        <?php $__currentLoopData = $appointmet_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <?php $i++?>
                <td> <?php echo $i ?> </td>
                <?php if($data->doctor_id != null): ?>
                    <?php
                    $doctor = \App\Models\Doctor::where('id', $data->doctor_id)->first();
                    ?>
                    <?php if($doctor): ?>
                    <td><?php echo e($doctor->name); ?></td>
                    <?php else: ?>
                    <td>Not Assigned</td>
                    <?php endif; ?>
                <?php else: ?>
                    <td>Not Assigned</td>
                <?php endif; ?>
                
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->phone); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->gender); ?></td>
                <td><?php echo e($data->date); ?></td>
                <td><?php echo e($data->treatment_types); ?></td>
                <td><?php echo e($data->day); ?></td>
                <td><?php echo e($data->message); ?></td>
                <td><?php echo e($data->notes); ?></td>
                <td><?php echo e($data->status); ?></td>
                <td><a href="<?php echo e(route('admin.edit_appointment',['id'=>$data->id])); ?>"><button class="btn btn-warning btn-sm">Edit</button></a></td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>   
    
    
    
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/appointment/appointmet_data.blade.php ENDPATH**/ ?>