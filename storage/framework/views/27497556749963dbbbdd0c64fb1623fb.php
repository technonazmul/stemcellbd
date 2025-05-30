<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-6"><h4>Product Reviews</h4></div>
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
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Rating</th>
        <th scope="col">Message</th>
        <th scope="col">Product</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $i = 1;
      ?>
      <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($i); ?></th>
        <td><?php echo e($item->name); ?></td>
        <td><?php echo e($item->email); ?> </td>
        <td><?php echo e($item->rating); ?> </td>
        <td><?php echo e($item->message); ?> </td>

        <td>
            <p><?php echo e($item->product->name); ?></p>
            <a href="<?php echo e(route('shop_single',$item->product->slug)); ?>" target="__blank" >View</a>
        </td>
        
        <td>
            <?php if($item->status ==0): ?>
            <a href="<?php echo e(route('admin.product_reviews_approve', $item->id)); ?>" class="btn btn-warning btn-sm mr-2">Publish</a> 
            <?php else: ?>
            <a href="<?php echo e(route('admin.product_reviews_approve', $item->id)); ?>" class="btn btn-outline-primary btn-sm mr-2">Unpublish</a> 
            <?php endif; ?>
            
          <a href="<?php echo e(route('admin.product_reviews_delete', $item->id)); ?>" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
      </tr>
      <?php
          $i++;
      ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      
    </tbody>
  </table>
  <?php echo e($reviews->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/product/product_reviews.blade.php ENDPATH**/ ?>