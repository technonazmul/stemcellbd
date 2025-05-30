<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
           
            <h2>Edit Category</h2>
            <form action="<?php echo e(route('update_product_category',$editcategory->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="<?php echo e($editcategory->name); ?>" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="parent_category">Parent Category</label>
                            
                            <select class="form-control" id="parent_category" name="parent_category">
                                <?php 
                                $categories = App\Models\Category::where('parent_id', 0)->get();
                                ?>
                                <option value="0" <?php if($editcategory->id == 0): ?> selected <?php endif; ?> >Select Parent ID</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php $__currentLoopData = App\Models\Category::where('parent_id', $category->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($subcategory->id); ?>" <?php if($editcategory->id == $subcategory->id): ?> selected <?php endif; ?>>&nbsp; - <?php echo e($subcategory->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </select>
                          </div>
                        <div class="mt-2">
                            <input type="submit" class="btn btn-success" value="Save" id="submit">
                        </div>
        
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php if(Session::has("success")): ?>
<?php $__env->startSection("extra_script"); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $( document ).ready(function() {
    var message = "<?php echo e(Session::get('success')); ?> ";
    toastr.success(message);
});
</script>

<?php $__env->stopSection(); ?>
  <?php endif; ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/category/edit.blade.php ENDPATH**/ ?>