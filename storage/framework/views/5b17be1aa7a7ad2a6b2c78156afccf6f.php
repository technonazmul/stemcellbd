<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Orders</h2>
    <div class="mb-3">
        <strong>Total Orders:</strong> <?php echo e($stats['total_orders']); ?> |
        <strong>Pending:</strong> <?php echo e($stats['pending_orders']); ?> |
        <strong>Completed:</strong> <?php echo e($stats['completed_orders']); ?> |
        <strong>Total Revenue:</strong> <?php echo e(number_format($stats['total_revenue'], 2)); ?>৳
    </div>

    <table id="ordersTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Order No</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Total</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($order->order_number); ?></td>
                <td><?php echo e($order->customer_name); ?></td>
                <td><?php echo e($order->customer_phone); ?></td>
                <td><?php echo e(ucfirst($order->status)); ?></td>
                <td><?php echo e(number_format($order->total_amount, 2)); ?>৳</td>
                <td><?php echo e($order->created_at->format('Y-m-d H:i')); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.orders.show', $order->id)); ?>" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_script'); ?>
<!-- DataTables Scripts -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#ordersTable').DataTable({
            paging: true,
            ordering: true,
            info: true,
            responsive: true
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/orders/index.blade.php ENDPATH**/ ?>