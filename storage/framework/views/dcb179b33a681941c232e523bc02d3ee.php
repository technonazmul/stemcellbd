<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Order #<?php echo e($order->order_number); ?></h2>
        <button onclick="printOrder()" class="btn btn-secondary">🖨️ Print</button>
    </div>

    <div id="printableArea">
        <p><strong>Customer:</strong> <?php echo e($order->customer_name); ?> (<?php echo e($order->customer_phone); ?>)</p>
        <p><strong>Shipping Address:</strong> <?php echo e($order->shipping_address); ?></p>
        <p><strong>Status:</strong> <?php echo e($order->status); ?> | <strong>Payment:</strong> <?php echo e($order->payment_status); ?></p>
        <p><strong>Total:</strong> <?php echo e(number_format($order->total_amount, 2)); ?>৳</p>

        <h4 class="mt-4">Order Items</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->product_name); ?></td>
                    <td><img src="<?php echo e(asset('storage/public/products/'.$item->product_image)); ?>" width="50"></td>
                    <td><?php echo e(number_format($item->price, 2)); ?></td>
                    <td><?php echo e($item->quantity); ?></td>
                    <td><?php echo e(number_format($item->total, 2)); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <hr>

    <form method="POST" action="<?php echo e(route('admin.orders.update', $order->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <?php $__currentLoopData = ['pending','confirmed','processing','shipped','delivered','cancelled']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($status); ?>" <?php echo e($order->status === $status ? 'selected' : ''); ?>>
                        <?php echo e(ucfirst($status)); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label>Payment Status</label>
            <select name="payment_status" class="form-control" required>
                <?php $__currentLoopData = ['pending','paid','failed','refunded']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($pay_status); ?>" <?php echo e($order->payment_status === $pay_status ? 'selected' : ''); ?>>
                        <?php echo e(ucfirst($pay_status)); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label>Notes</label>
            <textarea name="notes" class="form-control" rows="3"><?php echo e($order->notes); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_script'); ?>
<script>
function printOrder() {
    const printContents = document.getElementById('printableArea').innerHTML;
    const originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    location.reload(); // Reload to restore JS, styles, etc.
}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_css'); ?>
<style>
@media print {
    

    #printableArea, #printableArea * {
        visibility: visible;
    }

    #printableArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }

    button, form {
        display: none !important;
    }

    img {
        max-width: 100px !important;
    }

}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/orders/show.blade.php ENDPATH**/ ?>