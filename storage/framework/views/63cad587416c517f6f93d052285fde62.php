<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(!@empty($general_info)): ?>
    <form action="<?php echo e(route('admin.update_general_info',$general_info)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12 card card-body">
                <h2 class="text-center">Update General Information</h2>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input value="<?php echo e($general_info->email); ?>" name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hotline</label>
                    <input value="<?php echo e($general_info->hotline); ?>" name="hotline" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hotline">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enquiry Number</label>
                    <input value="<?php echo e($general_info->enquiry_number); ?>" name="enquiry_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enquiry Number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Appointment Number</label>
                    <input value="<?php echo e($general_info->appointment_number); ?>" name="appointment_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Appointment Number">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                
                            <textarea name="address" class="form-control <?php $__env->startSection('extra_script'); ?>
                                <script>
                                    $(document).ready(function() {
                                $('.summernote').summernote({
                                    height: 150
                                });
                                });
                                </script>
                                <?php $__env->stopSection(); ?>" id="exampleFormControlTextarea1" rows="3">
                                <?php echo e($general_info->address); ?>

                            </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Help Email</label>
                    <input value="<?php echo e($general_info->help_email); ?>" name="help_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Help Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Suport Email</label>
                    <input value="<?php echo e($general_info->support_email); ?>" name="support_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Suport Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">About Us</label>
                    <textarea  name="about_us" class="form-control <?php $__env->startSection('extra_script'); ?>
                                <script>
                                    $(document).ready(function() {
                                $('.summernote').summernote({
                                    height: 150
                                });
                                });
                                </script>
                                <?php $__env->stopSection(); ?>" id="exampleFormControlTextarea1" rows="3">
                                <?php echo e($general_info->about_us); ?>

                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                    <input value="<?php echo e($general_info->facebook); ?>" name="facebook" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Facebook" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                    <input value="<?php echo e($general_info->instagram); ?>" name="instagram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Instagram" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Youtube</label>
                    <input value="<?php echo e($general_info->youtube); ?>" name="youtube" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Youtube" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                    <input value="<?php echo e($general_info->twitter); ?>" name="twitter" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Twitter" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                    <input value="<?php echo e($general_info->linkedin); ?>" name="linkedin" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Linkedin" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telegram</label>
                    <input value="<?php echo e($general_info->telegram); ?>" name="telegram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telegram" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">CopyRight</label>
                    <input value="<?php echo e($general_info->copyright); ?>" name="copyright" type="text" class="form-control" id="exampleFormControlInput1" placeholder="CopyRight">
                </div>
            </div>
        
        </div>
        <button class="btn btn-info btn-lg my-2">Update</button>
    </form>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/Laravel/stemcellbd/resources/views/backend/generalinfo/general_info.blade.php ENDPATH**/ ?>