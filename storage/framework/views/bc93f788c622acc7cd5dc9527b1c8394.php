<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Shipping & Offer Settings</h4>
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
                            <label for="inside_dhaka_cost" class="form-label">Inside Dhaka Shipping Cost (৳)</label>
                            <input type="number" class="form-control" id="inside_dhaka_cost" name="inside_dhaka_cost" step="0.01" min="0"
                                value="<?php echo e(old('inside_dhaka_cost', $settings->inside_dhaka_cost)); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="outside_dhaka_cost" class="form-label">Outside Dhaka Shipping Cost (৳)</label>
                            <input type="number" class="form-control" id="outside_dhaka_cost" name="outside_dhaka_cost" step="0.01" min="0"
                                value="<?php echo e(old('outside_dhaka_cost', $settings->outside_dhaka_cost)); ?>">
                        </div>


                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="enable_free_shipping" name="enable_free_shipping" 
                                    <?php echo e(old('enable_free_shipping', $settings->enable_free_shipping) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="enable_free_shipping">
                                    Enable Free Shipping
                                </label>
                            </div>
                        </div>

                        
                        <div class="mb-3" id="free_shipping_threshold_group">
                            <label for="free_shipping_threshold" class="form-label">Free Shipping Threshold (৳)</label>
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
                                   step="0.01" min="0" required>
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

                        <hr>

                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="enable_discount_offer" name="enable_discount_offer"
                                    <?php echo e(old('enable_discount_offer', $settings->enable_discount_offer) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="enable_discount_offer">
                                    Enable 15% Discount Offer
                                </label>
                            </div>
                        </div>

                        
                        <div class="mb-3" id="discount_percent_group">
                            <label for="discount_percent" class="form-label">Discount Percent (%)</label>
                            <input type="number" 
                                   class="form-control <?php $__errorArgs = ['discount_percent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="discount_percent" 
                                   name="discount_percent" 
                                   value="<?php echo e(old('discount_percent', $settings->discount_percent)); ?>" 
                                   step="0.01" min="0" max="100" required>
                            <?php $__errorArgs = ['discount_percent'];
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

                        
                        <div class="mb-3" id="discount_minimum_total_group">
                            <label for="discount_minimum_total" class="form-label">Discount Minimum Order Total (৳)</label>
                            <input type="number" 
                                   class="form-control <?php $__errorArgs = ['discount_minimum_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="discount_minimum_total" 
                                   name="discount_minimum_total" 
                                   value="<?php echo e(old('discount_minimum_total', $settings->discount_minimum_total)); ?>" 
                                   step="0.01" min="0" required>
                            <?php $__errorArgs = ['discount_minimum_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-text">Orders above this amount get the discount</div>
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
    function toggleDiscountInputs() {
        const checked = document.getElementById('enable_discount_offer').checked;
        document.getElementById('discount_percent_group').style.opacity = checked ? '1' : '0.5';
        document.getElementById('discount_minimum_total_group').style.opacity = checked ? '1' : '0.5';
        document.getElementById('discount_percent').disabled = !checked;
        document.getElementById('discount_minimum_total').disabled = !checked;
    }

    function toggleFreeShippingInputs() {
        const checked = document.getElementById('enable_free_shipping').checked;
        document.getElementById('free_shipping_threshold_group').style.opacity = checked ? '1' : '0.5';
        document.getElementById('free_shipping_threshold').disabled = !checked;
    }

    document.addEventListener('DOMContentLoaded', function () {
        toggleDiscountInputs();
        toggleFreeShippingInputs();

        document.getElementById('enable_discount_offer').addEventListener('change', toggleDiscountInputs);
        document.getElementById('enable_free_shipping').addEventListener('change', toggleFreeShippingInputs);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/shipping/index.blade.php ENDPATH**/ ?>