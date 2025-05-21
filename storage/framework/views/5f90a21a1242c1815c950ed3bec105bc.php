<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
            <h2>Add Products</h2>
            <form action="<?php echo e(route('save_product')); ?>" method="POST" enctype="multipart/form-data" >
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Product Name" name="name" required>
                        </div>
                        <div class="mt-2">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="summernote" id="description" name="description" required>
                               
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="specification" class="form-label">Specification</label>
                            <textarea class="summernote" id="specification" name="specification">
                                
                              </textarea>
                        </div>
                        <div class="mt-2">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" min=1 required name="price">
                        </div>
                        <div class="mt-2">
                            <label for="offer_price" class="form-label">Offer Price</label>
                            <input type="number" class="form-control" id="offer_price" min=1 name="offer_price" required>
                        </div>
                        <div class="mt-2">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"  min=1 required>
                        </div>
                        <div class="mt-2">
                            <label>Images</label>
                            <div class="input-images"></div>
                        </div>
                        <div class="mt-2">
                            <label for="sku" class="form-label">SKU/ Product Code</label>
                            <input type="text" class="form-control" id="sku" placeholder="" name="sku">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Category</label>
                            <select class="form-control" id="category" name="category">
                                <?php 
                                $categories = App\Models\Category::where('parent_id', 0)->get();
                                ?>
                                <option>Select Category</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php $__currentLoopData = App\Models\Category::where('parent_id', $category->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($subcategory->id); ?>">&nbsp; - <?php echo e($subcategory->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </select>
                          </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save Product" id="submit">
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

<script>
    $(document).ready(function() {
  $('.summernote').summernote({
    height: 150
  });
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
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/product/add_product.blade.php ENDPATH**/ ?>