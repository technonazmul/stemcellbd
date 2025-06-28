<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Appointments</h5>
                    <p class="card-text"><?php echo e($todayAppointments); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Doctors</h5>
                    <p class="card-text"><?php echo e($totalDoctors); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">New Messages / Inquiries</h5>
                    <p class="card-text">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Early Bird Registrations</h5>
                    <p class="card-text"><?php echo e($earlybirdformdata); ?></p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Products in Store</h5>
                    <p class="card-text"><?php echo e($totalProducts); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Shop Orders Today</h5>
                    <p class="card-text"><?php echo e($totalOrders); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pharmacy Orders</h5>
                    <p class="card-text"><?php echo e($pharmacyOrders); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pathology Request</h5>
                    <p class="card-text"><?php echo e($pathologyRequests); ?></p>
                </div>
            </div>
        </div>
    </div>

    

    
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">Recent Appointments</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>D-TM</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    
                                    <td><?php echo e($data->name); ?></td>
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
                                    <td><?php echo e($data->day); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/main.blade.php ENDPATH**/ ?>