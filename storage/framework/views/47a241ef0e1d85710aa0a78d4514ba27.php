<?php $__env->startSection('content'); ?>
<div class="container">

    <!-- Display validation errors -->
    <form action="<?php echo e(route('admin.update_doctor', ['id' => $doctor->id])); ?>" method="Post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="doctor_id" value="<?php echo e($doctor->id); ?>">
      <div class="row ">  
        <div class="col-md-7 my-2 mx-auto">
            <h2 class="text-center">Update Doctor Details</h2>
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
        </div>
          <div class="col-md-7 my-2 mx-auto">
              <div class="card ">
                  <div class="card-body"> 
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Name</label> <span style="color:red">*</span>
                          <input name="name" value="<?php echo e($doctor->name); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label> 
                        <input name="phone" value="<?php echo e($doctor->phone); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="email" value="<?php echo e($doctor->email); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your email" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Specialization</label>
                        <input name="Specialization" value="<?php echo e($doctor->specialization); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Specialization ">
                     </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Chamber</label>
                            <input name="chamber" value="<?php echo e($doctor->chamber); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Chamber Addrress ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Responsibility</label>
                            <input name="responsibility" value="<?php echo e($doctor->responsibility); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your responsibility " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Experience</label>
                            <input name="experience" value="<?php echo e($doctor->experience); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your experience " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                            <input name="facebook" value="<?php echo e($doctor->facebook); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your facebook Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                            <input name="instagram" value="<?php echo e($doctor->instagram); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Instagram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telegram</label>
                            <input name="telegram" value="<?php echo e($doctor->telegram); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Telegram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                            <input name="linkedin" value="<?php echo e($doctor->linkedin); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Linkedin Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                            <input name="twitter" value="<?php echo e($doctor->twitter); ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Twitter Profile Link" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Old Image</label><br>
                            <img style="width:200px;height:150px;" src="<?php echo e(asset('storage/public/doctors/'.$doctor->image)); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Select New Image</label>
                            <input name="image" type="file" class="form-control" id="exampleFormControlInput1" placeholder="" >
                        </div>
                        <div class="mb-3">
                            <label for="available_days" class="form-label">Available Days</label>
                            <div class="form-check">
                                <?php
                                    $available_days = explode(',', $doctor->available_days);
                                ?>
                                
                                <?php $__currentLoopData = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    
                                    <input class="form-check-input" type="checkbox" name="available_days[]" value="<?php echo e($day); ?>" 
                                        <?php echo e(in_array($day, $available_days) ? 'checked' : ''); ?>>
                                    <label class="form-check-label"><?php echo e($day); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">About</label>
                            <textarea name="about"  class="form-control summernote" id="exampleFormControlTextarea1" rows="3"><?php echo $doctor->about; ?></textarea>
                        </div>

                      <button class="btn btn-lg btn-primary">Update</button>
                  </div>
              </div>
          </div>
      </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_script'); ?>
<script>
     $(document).ready(function() {
  $('.summernote').summernote({
    height: 150
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/doctor/edit_doctor.blade.php ENDPATH**/ ?>