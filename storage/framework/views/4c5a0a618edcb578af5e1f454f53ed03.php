<?php
$shipping_settings = \App\Models\ShippingSetting::first();
?>


<?php $__env->startSection('content'); ?>
 <!-- ==========Page Header Section Start Here========== -->
   
    <!-- ==========Page Header Section Ends Here========== -->
<div class="cart padding-tb overflow-hidden section-bg mt-5">
    <div class="container">
        <div class="row justify-content-center g-5 g-xl-4">
            <div class="col-xl-8 col-12">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div>
                    <?php if(count($cart) > 0): ?>
                        <div class="cart__top">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ?>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $itemTotal = $details['price'] * $details['quantity'] ?>
                                        <?php $total += $itemTotal ?>
                                        <tr data-id="<?php echo e($id); ?>">
                                            <td class="cart__item">
                                                <div class="cart__thumb">
                                                    <a href="<?php echo e(route('shop_single', $id)); ?>">
                                                        <img src="<?php echo e(asset('storage/public/products/' . $details['image'])); ?>" 
                                                             alt="<?php echo e($details['name']); ?>"
                                                             onerror="this.src='<?php echo e(asset('assets/images/shop/default.jpg')); ?>'">
                                                    </a>
                                                </div>
                                                <div class="cart__content">
                                                    <a href="<?php echo e(route('shop_single', $id)); ?>"><?php echo e($details['name']); ?></a>
                                                </div>
                                            </td>
                                            <td class="item-price">৳<?php echo e(number_format($details['price'], 2)); ?></td>
                                            <td>
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton" onclick="updateQuantity(<?php echo e($id); ?>, 'decrease')">-</div>
                                                    <input class="cart-plus-minus-box quantity-input" 
                                                           type="text" 
                                                           name="quantity" 
                                                           value="<?php echo e($details['quantity']); ?>"
                                                           data-id="<?php echo e($id); ?>"
                                                           readonly>
                                                    <div class="inc qtybutton" onclick="updateQuantity(<?php echo e($id); ?>, 'increase')">+</div>
                                                </div>
                                            </td>
                                            <td class="item-total">৳<?php echo e(number_format($itemTotal, 2)); ?></td>
                                            <td>
                                                <a href="#" onclick="removeFromCart(<?php echo e($id); ?>)" class="remove-item">
                                                    <img src="<?php echo e(asset('assets/images/shop/del.png')); ?>" alt="Remove">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        
                    <?php else: ?>
                        <div class="empty-cart text-center py-5">
                            <h3>Your cart is empty</h3>
                            <p>Looks like you haven't added any items to your cart yet.</p>
                            <a href="<?php echo e(route('shop')); ?>" class="lab-btn">Continue Shopping</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php if(count($cart) > 0): ?>
            <div class="col-xl-4 col-12">
                <div class="sidebar">
                    <div class="sidebar__cartamount">
                        <div class="sidebar__subtotal">
                            <p>Subtotal</p>
                            <span id="subtotal">৳<?php echo e(number_format($total, 2)); ?></span>
                        </div>
                        <div class="sidebar__shipping">
                            <p>Shipping</p>
                            <div class="sidebar__radiolist">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" id="inside_dhaka" value="<?php echo e($shipping_settings->inside_dhaka_cost); ?>" checked>
                                    <div class="formcheck">
                                        <label class="form-check-label" for="inside_dhaka">Inside Dhaka City</label>
                                        <span data-original="<?php echo e($shipping_settings->inside_dhaka_cost); ?>">+৳<?php echo e($shipping_settings->inside_dhaka_cost); ?></span>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" id="outside_dhaka" value="<?php echo e($shipping_settings->outside_dhaka_cost); ?>">
                                    <div class="formcheck">
                                        <label class="form-check-label" for="outside_dhaka">Outside Dhaka City</label>
                                        <span data-original="<?php echo e($shipping_settings->outside_dhaka_cost); ?>">+৳<?php echo e($shipping_settings->outside_dhaka_cost); ?></span>
                                    </div>
                                </div>

                                
                                
                            </div>
                        </div>
                       
                        <form action="<?php echo e(route('order.place')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="sidebar__totalamaunt">
                            <div class="top mb-3">
                                <p>Total</p>
                                <span id="total-amount">৳<?php echo e(number_format($total + 70, 2)); ?></span>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="name">Full Name*</label>
                                <input type="text" name="customer_name" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Phone Number*</label>
                                <input type="text" name="customer_phone" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="address">Delivery Address*</label>
                                <textarea name="address" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="message">Message (Optional)</label>
                                <textarea name="message" class="form-control" rows="2"></textarea>
                            </div>

                            <input type="hidden" name="shipping_cost" id="shipping-cost" value="<?php echo e($shipping_settings->inside_dhaka_cost); ?>">

                            <div class="bottom">
                                <button type="submit" class="lab-btn w-100">Place Order</button>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Hidden forms for AJAX requests -->
<form id="update-quantity-form" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="hidden" name="product_id" id="update-product-id">
    <input type="hidden" name="quantity" id="update-quantity">
</form>

<form id="remove-item-form" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <input type="hidden" name="product_id" id="remove-product-id">
</form>


<?php $__env->startPush('scripts'); ?>
<script>
function updateQuantity(productId, action) {
    let quantityInput = document.querySelector(`input[data-id="${productId}"]`);
    let currentQuantity = parseInt(quantityInput.value);
    let newQuantity = currentQuantity;
    $(".qtybutton").off('click');
    if (action === 'increase') {
        newQuantity = currentQuantity + 1;
    } else if (action === 'decrease' && currentQuantity > 1) {
        newQuantity = currentQuantity - 1;
    }
    
    if (newQuantity !== currentQuantity) {
        // Update the input value
        quantityInput.value = newQuantity;
        
        // Send AJAX request to update cart
        fetch(`<?php echo e(route('cart.update')); ?>`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: newQuantity
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update the item total
                updateItemTotal(productId, data.item_total);
                // Update cart totals
                updateCartTotals();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Revert the quantity on error
            quantityInput.value = currentQuantity;
        });
    }
}

function removeFromCart(productId) {
    if (confirm('Are you sure you want to remove this item from your cart?')) {
        fetch(`<?php echo e(route('cart.remove')); ?>`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                product_id: productId
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove the row from table
                document.querySelector(`tr[data-id="${productId}"]`).remove();
                // Update cart totals
                updateCartTotals();
                
                // Check if cart is empty
                if (data.cart_count === 0) {
                    location.reload(); // Reload to show empty cart message
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}

function updateItemTotal(productId, newTotal) {
    let row = document.querySelector(`tr[data-id="${productId}"]`);
    let totalCell = row.querySelector('.item-total');
    totalCell.textContent = '৳' + parseFloat(newTotal).toFixed(2);
}

function updateCartTotals() {
    let subtotal = 0;

    // 1. Calculate subtotal from item-total cells
    document.querySelectorAll('.item-total').forEach(cell => {
        let amount = parseFloat(cell.textContent.replace(/[৳,]/g, ''));
        subtotal += amount;
    });

    document.getElementById('subtotal').textContent = '৳' + subtotal.toFixed(2);

    // 2. Read current shipping cost from selected option
    let shippingCost = parseFloat(document.querySelector('input[name="shipping"]:checked').value);

    // DISABLED FREE SHIPPING - Uncomment to enable again
    /*
    // 3. Check free shipping settings
    const freeShippingEnabled = <?php echo e($shipping_settings->enable_free_shipping ? 'true' : 'false'); ?>;
    const freeShippingThreshold = parseFloat('<?php echo e($shipping_settings->free_shipping_threshold); ?>');

    if (freeShippingEnabled && subtotal >= freeShippingThreshold) {
        shippingCost = 0;

        // Show "Free" for both shipping labels
        document.querySelectorAll('.formcheck span').forEach(span => {
            span.textContent = 'Free';
        });

        // Show message
        if (!document.getElementById('free-shipping-msg')) {
            const msg = document.createElement('small');
            msg.id = 'free-shipping-msg';
            msg.className = 'text-success mt-1 d-block';
            msg.innerText = 'Free shipping applied!';
            document.querySelector('.sidebar__shipping')?.appendChild(msg);
        }
    } else {
        // Restore original label price
        document.querySelectorAll('.formcheck span').forEach(span => {
            const original = span.getAttribute('data-original');
            span.textContent = '+৳' + parseFloat(original).toFixed(2);
        });

        document.getElementById('free-shipping-msg')?.remove();
    }
    */

    // Since free shipping is disabled, always show original prices
    document.querySelectorAll('.formcheck span').forEach(span => {
        const original = span.getAttribute('data-original');
        span.textContent = '+৳' + parseFloat(original).toFixed(2);
    });

    // Remove any existing free shipping message
    document.getElementById('free-shipping-msg')?.remove();

    // DISABLED DISCOUNT CALCULATION - Uncomment to enable again
    /*
    // 4. Check discount settings
    const discountEnabled = <?php echo e($shipping_settings->enable_discount_offer ? 'true' : 'false'); ?>;
    const discountPercent = parseFloat('<?php echo e($shipping_settings->discount_percent); ?>');
    const discountMinimumTotal = parseFloat('<?php echo e($shipping_settings->discount_minimum_total); ?>');

    let discountAmount = 0;
    if (discountEnabled && subtotal >= discountMinimumTotal) {
        discountAmount = (discountPercent / 100) * subtotal;
        document.querySelector('.sidebar__discount')?.classList.remove('d-none');
        document.getElementById('discount-amount').textContent = '-৳' + discountAmount.toFixed(2);
    } else {
        document.querySelector('.sidebar__discount')?.classList.add('d-none');
    }
    */

    // Set discount amount to 0 since we're not using it
    let discountAmount = 0;

    // 5. Final total
    const total = subtotal - discountAmount + shippingCost;
    console.log(shippingCost);
    
    // 6. Update frontend
    document.getElementById('total-amount').textContent = '৳' + total.toFixed(2);
    document.getElementById('shipping-cost').value = shippingCost.toFixed(2);
}

function calculateShipping() {
    // Add your shipping calculation logic here
    alert('Shipping calculation feature coming soon!');
}

// Initialize cart totals on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartTotals();

    // Handle shipping option changes
    document.querySelectorAll('input[name="shipping"]').forEach(radio => {
        radio.addEventListener('change', function() {
            updateCartTotals();
        });
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/cart.blade.php ENDPATH**/ ?>