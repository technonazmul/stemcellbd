<?php $__env->startSection('content'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Manage Coupons</h4>
                        <div>
                            <a href="<?php echo e(route('shipping.index')); ?>" class="btn btn-secondary">Shipping Settings</a>
                            <a href="<?php echo e(route('coupons.create')); ?>" class="btn btn-primary">Add New Coupon</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Value</th>
                                        <th>Min Amount</th>
                                        <th>Usage</th>
                                        <th>Expires</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><code><?php echo e($coupon->code); ?></code></td>
                                            <td><?php echo e($coupon->name); ?></td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    <?php echo e(ucfirst(str_replace('_', ' ', $coupon->type))); ?>

                                                </span>
                                            </td>
                                            <td>
                                                <?php if($coupon->type == 'percentage'): ?>
                                                    <?php echo e($coupon->value); ?>%
                                                <?php elseif($coupon->type == 'fixed'): ?>
                                                    $<?php echo e($coupon->value); ?>

                                                <?php else: ?>
                                                    Free Shipping
                                                <?php endif; ?>
                                            </td>
                                            <td>$<?php echo e($coupon->minimum_amount); ?></td>
                                            <td>
                                                <?php echo e($coupon->used_count); ?>

                                                <?php if($coupon->usage_limit): ?>
                                                    / <?php echo e($coupon->usage_limit); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($coupon->expires_at): ?>
                                                    <?php echo e($coupon->expires_at->format('M d, Y')); ?>

                                                <?php else: ?>
                                                    Never
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($coupon->is_active && (!$coupon->expires_at || $coupon->expires_at->gt(now()))): ?>
                                                    <span class="badge bg-success">Active</span>
                                                <?php else: ?>
                                                    <span class="badge bg-danger">Inactive</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="<?php echo e(route('coupons.show', $coupon)); ?>" 
                                                       class="btn btn-sm btn-outline-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="<?php echo e(route('coupons.edit', $coupon)); ?>" 
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="<?php echo e(route('coupons.destroy', $coupon)); ?>" 
                                                          method="POST" 
                                                          style="display: inline;"
                                                          onsubmit="return confirm('Are you sure?')">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="9" class="text-center">No coupons found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <?php echo e($coupons->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/coupons/index.blade.php ENDPATH**/ ?>