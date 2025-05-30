<?php $__env->startSection('content'); ?>
<?php 
$categories = App\Models\Category::where('parent_id', 0)->get();
?>
  
<ul class="list-group">
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="list-group-item"><?php echo e($category->name); ?> <a href="#" class="btn btn-danger float-right" >Delete</a> <a href="<?php echo e(route('edit_category',$category->id)); ?>" class="btn btn-success float-right mr-3" >Edit</a></li>
    <?php $__currentLoopData = App\Models\Category::where('parent_id', $category->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item">&nbsp;&nbsp;&nbsp; - <?php echo e($subcategory->name); ?> <a href="#" class="btn btn-danger float-right" >Delete</a> <a href="<?php echo e(route('edit_category',$subcategory->id)); ?>" class="btn btn-success float-right mr-3" >Edit</a> </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/category/index.blade.php ENDPATH**/ ?>