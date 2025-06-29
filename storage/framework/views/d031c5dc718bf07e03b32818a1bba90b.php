<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="text-center">
        <h1 class="mb-4">Thank You for Your Order!</h1>
        
        <p>Your order has been placed successfully.</p>
        
        <p><strong>Your Order ID:</strong> <span style="font-size:1.5rem; color: #007bff;"><?php echo e($order->order_number); ?></span></p>
        
        <p>Please <strong>take a screenshot</strong> or <strong>save this Order ID</strong> so you can check your order status later.</p>

        <a href="<?php echo e(route('shop')); ?>" class="btn btn-primary mt-4">Continue Shopping</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/thankyou.blade.php ENDPATH**/ ?>