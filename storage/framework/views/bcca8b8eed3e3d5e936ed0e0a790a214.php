<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Early Bird Form Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Name</th>
                    <th>Registration Type</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Preferred Date</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0 ?>
                <?php $__currentLoopData = $eb_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php $i++ ?>
                        <td> <?php echo $i ?> </td>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->registration_type); ?></td>
                        <td><?php echo e($data->date_of_birth); ?></td>
                        <td><?php echo e($data->gender); ?></td>
                        <td><?php echo e($data->preferred_date); ?></td>
                        <td><?php echo e($data->phone); ?></td>
                        <td>
                            <!-- Large modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo e($data->id); ?>">See More</button>
                        </td>
                        <div class="modal fade bd-example-modal-lg<?php echo e($data->id); ?> " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg  ">
                              <div class="modal-content card">
                                    <div class="card-body" id="printable-content">
                                        <p><strong>Name:</strong> <?php echo e($data->name); ?></p>
                                        <p><strong>Registration Type:</strong> <?php echo e($data->registration_type); ?></p>
                                        <p><strong>Date of Birth:</strong> <?php echo e($data->date_of_birth); ?></p>
                                        <p><strong>Gender:</strong> <?php echo e($data->gender); ?></p>
                                        <p><strong>Current Health Condition:</strong> <?php echo e($data->c_health_condition); ?></p>
                                        <p><strong>Previous Medical History:</strong> <?php echo e($data->p_medical_history); ?></p>
                                        <p><strong>Treatment of Interest:</strong> <?php echo e($data->treatment_of_interest); ?></p>
                                        <p><strong>Preferred Date:</strong> <?php echo e($data->preferred_date); ?></p>
                                        <p><strong>Profession:</strong> <?php echo e($data->profession); ?></p>
                                        <p><strong>Address:</strong> <?php echo e($data->address); ?></p>
                                        <p><strong>Email:</strong> <?php echo e($data->email); ?></p>
                                        <p><strong>Phone:</strong> <?php echo e($data->phone); ?></p>
                                        <p><strong>Message:</strong> <?php echo e($data->message); ?></p>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/eb_form_data.blade.php ENDPATH**/ ?>