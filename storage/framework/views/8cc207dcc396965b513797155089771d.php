<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset("backend/libs/css/tagify.css")); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
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
            <h2 class="text-center">Add service</h2>
            <form method="post" action="<?php echo e(route('admin.create_service')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" required>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                                <input type="file" name="thumbnail" id="">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <textarea name="description" class="summernote"  >
                               
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Tags</label>
                            <input name="tags" placeholder="" value="">
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="exampleFormControlInput1">service Category</label>
                            <select name="service_category_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="">Select service Category</option>
                                <?php
                                $service_category= App\Models\ServiceCategory::get();
                                ?>
                                <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($service_category->id); ?>"><?php echo e($service_category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                          <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Meta Title</label>
                            <input name="meta_title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Meta Title">
                          </div>
                          <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Meta Description</label>
                            <input name="meta_description" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Meta Description">
                          </div>
                        <div class="form-group mt-2">
                            <input type="submit" class="btn btn-success" value="Save service" id="submit">
                        </div>
        
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("extra_script"); ?>
<script src="<?php echo e(asset("backend/vendor/drug-drop-image-upload/product-image-uploader.js")); ?>"></script>
<script src="<?php echo e(asset("backend/libs/js/tagify.min.js")); ?>"></script>

<script>
    $(document).ready(function() {
  $('.summernote').summernote({
    height: 250,   //set editable area's height
  });
  //script for tags
// Vanilla JavaScript
var input = document.querySelector('input[name=tags]'),
tagify =new Tagify( input );

});
$('.input-images').imageUploader();
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="form-group col-md-8" style="padding-left: 0"><label>Add Attribute</label><input type="text" name="field_name[]" class="form-control" placeholder="Title" value="" /><br><textarea name="attribute_options[]" class="form-control" placeholder="Attribute option must need to separate by ," value=""></textarea><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            //$(wrapper).append(fieldHTML); //Add field html
            $(wrapper).append('<div class="form-group col-md-8" style="padding-left: 0"><label>Add Attribute</label><br><label style="font-size: 13px;">Title (Ex Color)</label><input type="text" name="attribute_name[]" class="form-control" placeholder="Title" value="" /><br><label style="font-size: 13px;">Options (Ex Green,Red,White)</label><br><textarea name="attribute_option[]" class="form-control" placeholder="Attribute option must need to separate by ," value=""></textarea><br><a href="javascript:void(0);" class="remove_button btn btn-warning">Remove</a></div>');
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});



</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/add_service.blade.php ENDPATH**/ ?>