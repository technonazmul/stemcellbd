<?php $__env->startSection('content'); ?>
<div class="container">

    <!-- Display validation errors -->
    <form action="<?php echo e(route('save_doctor')); ?>" method="Post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="row ">  
        <div class="col-md-7 my-2 mx-auto">
            <h2 class="text-center">Add Doctor</h2>
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
                          <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label> 
                        <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your email" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Specialization</label>
                        <input name="Specialization" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Specialization ">
                     </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Chamber</label>
                            <input name="chamber" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Chamber Addrress ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Responsibility</label>
                            <input name="responsibility" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your responsibility " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Experience</label>
                            <input name="experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your experience " >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                            <input name="facebook" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your facebook Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                            <input name="instagram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Instagram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telegram</label>
                            <input name="telegram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Telegram Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                            <input name="linkedin" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Linkedin Profile Link">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                            <input name="twitter" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Twitter Profile Link" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Available Days</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Saturday" id="daySaturday">
                                <label class="form-check-label" for="daySaturday">Saturday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Sunday" id="daySunday">
                                <label class="form-check-label" for="daySunday">Sunday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Monday" id="dayMonday">
                                <label class="form-check-label" for="dayMonday">Monday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Tuesday" id="dayTuesday">
                                <label class="form-check-label" for="dayTuesday">Tuesday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Wednesday" id="dayWednesday">
                                <label class="form-check-label" for="dayWednesday">Wednesday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Thursday" id="dayThursday">
                                <label class="form-check-label" for="dayThursday">Thursday</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="available_days[]" value="Friday" id="dayFriday">
                                <label class="form-check-label" for="dayFriday">Friday</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">About</label>
                            <textarea name="about" class="form-control <?php $__env->startSection('extra_script'); ?>
                            <script>
                                 $(document).ready(function() {
                              $('.summernote').summernote({
                                height: 150
                              });
                            });
                            </script>
                            <?php $__env->stopSection(); ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      <button class="btn btn-lg btn-primary"> Add Doctor</button>
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
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/doctor/add_doctor.blade.php ENDPATH**/ ?>