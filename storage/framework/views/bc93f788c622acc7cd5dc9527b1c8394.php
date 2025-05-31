<?php $__env->startSection('content'); ?>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Shipping Settings</h4>
                    </div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('shipping.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            
                            <div class="mb-3">
                                <label for="default_shipping_cost" class="form-label">Default Shipping Cost ($)</label>
                                <input type="number" 
                                       class="form-control <?php $__errorArgs = ['default_shipping_cost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="default_shipping_cost" 
                                       name="default_shipping_cost" 
                                       value="<?php echo e(old('default_shipping_cost', $settings->default_shipping_cost)); ?>" 
                                       step="0.01" 
                                       min="0" 
                                       required>
                                <?php $__errorArgs = ['default_shipping_cost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           id="enable_free_shipping" 
                                           name="enable_free_shipping" 
                                           <?php echo e(old('enable_free_shipping', $settings->enable_free_shipping) ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="enable_free_shipping">
                                        Enable Free Shipping
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3" id="free_shipping_threshold_group">
                                <label for="free_shipping_threshold" class="form-label">Free Shipping Threshold ($)</label>
                                <input type="number" 
                                       class="form-control <?php $__errorArgs = ['free_shipping_threshold'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="free_shipping_threshold" 
                                       name="free_shipping_threshold" 
                                       value="<?php echo e(old('free_shipping_threshold', $settings->free_shipping_threshold)); ?>" 
                                       step="0.01" 
                                       min="0" 
                                       required>
                                <?php $__errorArgs = ['free_shipping_threshold'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="form-text">Orders above this amount will get free shipping</div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Settings</button>
                            <a href="<?php echo e(route('coupons.index')); ?>" class="btn btn-secondary">Manage Coupons</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('enable_free_shipping').addEventListener('change', function() {
            const thresholdGroup = document.getElementById('free_shipping_threshold_group');
            thresholdGroup.style.opacity = this.checked ? '1' : '0.5';
            document.getElementById('free_shipping_threshold').disabled = !this.checked;
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('enable_free_shipping');
            const thresholdGroup = document.getElementById('free_shipping_threshold_group');
            thresholdGroup.style.opacity = checkbox.checked ? '1' : '0.5';
            document.getElementById('free_shipping_threshold').disabled = !checkbox.checked;
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/shipping/index.blade.php ENDPATH**/ ?>