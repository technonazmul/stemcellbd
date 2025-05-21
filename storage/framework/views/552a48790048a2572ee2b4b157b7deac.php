<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-6"><h4>Products</h4></div>
    <div class="col-6">
        <form class="form-inline float-right">
            
            <div class="form-group mx-sm-3 mb-2">
              <label for="search" class="sr-only">Search</label>
              <input type="text" class="form-control" id="search" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
          </form>
    </div>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">View</th>
        <th scope="col">Special Item</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $i = 1;
      ?>
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($i); ?></th>
        <td><?php echo e($item->name); ?></td>
        <td><del><?php echo e($item->price); ?></del> <?php echo e($item->offer_price); ?> </td>
        <td>
          <?php if(strpos($item->images, ',')): ?>
          <?php
              $images = explode(',',$item->images);
          ?>
          <img src="<?php echo e(asset('storage/products/'.$images[0])); ?>" alt="" width="100">
          <?php else: ?>
          <img src="<?php echo e(asset('storage/products/'.$item->images)); ?>" alt="" width="100">
          <?php endif; ?>
          </td>
        <td><a href="#">View</a></td>
        
        <td>
          <?php if($item->make_feature == 1): ?>
          <a href="<?php echo e(route('product_make_feature',$item->id)); ?>" class="btn btn-success btn-sm mr-2">Featured</a> 
          <?php else: ?>
          <a href="<?php echo e(route('product_make_feature',$item->id)); ?>" class="btn btn-primary btn-sm mr-2">Make Feature</a> 
          <?php endif; ?>

          <?php if($item->show_footer == 1): ?>
          <a href="<?php echo e(route('product_add_footer',$item->id)); ?>" class="btn btn-success btn-sm mr-2">Added Footer</a> 
          <?php else: ?>
          <a href="<?php echo e(route('product_add_footer',$item->id)); ?>" class="btn btn-primary btn-sm mr-2">Add to Footer</a> 
          <?php endif; ?>
          
        </td>
        <td><a href="<?php echo e(route('product_edit', $item->id)); ?>" class="btn btn-primary btn-sm mr-2">Edit</a> 
          <a href="<?php echo e(route('product_delete', $item->id)); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
      </tr>
      <?php
          $i++;
      ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/product/products.blade.php ENDPATH**/ ?>