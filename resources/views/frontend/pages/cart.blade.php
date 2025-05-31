@extends('frontend.layouts.template')

@section('content')
 <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(assets/images/bg/04.jpg);">
        <div class="container">
            <div class="pageheader__content">
                <h2>Take best qualitytreatment....</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Take best qualitytreatment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->
<div class="cart padding-tb overflow-hidden section-bg">
    <div class="container">
        <div class="row justify-content-center g-5 g-xl-4">
            <div class="col-xl-8 col-12">
                <div>
                    @if(count($cart) > 0)
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
                                    @php $total = 0 @endphp
                                    @foreach($cart as $id => $details)
                                        @php $itemTotal = $details['price'] * $details['quantity'] @endphp
                                        @php $total += $itemTotal @endphp
                                        <tr data-id="{{ $id }}">
                                            <td class="cart__item">
                                                <div class="cart__thumb">
                                                    <a href="{{ route('shop_single', $id) }}">
                                                        <img src="{{ asset('storage/public/products/' . $details['image']) }}" 
                                                             alt="{{ $details['name'] }}"
                                                             onerror="this.src='{{ asset('assets/images/shop/default.jpg') }}'">
                                                    </a>
                                                </div>
                                                <div class="cart__content">
                                                    <a href="{{ route('shop_single', $id) }}">{{ $details['name'] }}</a>
                                                </div>
                                            </td>
                                            <td class="item-price">${{ number_format($details['price'], 2) }}</td>
                                            <td>
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton" onclick="updateQuantity({{ $id }}, 'decrease')">-</div>
                                                    <input class="cart-plus-minus-box quantity-input" 
                                                           type="text" 
                                                           name="quantity" 
                                                           value="{{ $details['quantity'] }}"
                                                           data-id="{{ $id }}"
                                                           readonly>
                                                    <div class="inc qtybutton" onclick="updateQuantity({{ $id }}, 'increase')">+</div>
                                                </div>
                                            </td>
                                            <td class="item-total">${{ number_format($itemTotal, 2) }}</td>
                                            <td>
                                                <a href="#" onclick="removeFromCart({{ $id }})" class="remove-item">
                                                    <img src="{{ asset('assets/images/shop/del.png') }}" alt="Remove">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart__bottom">
                            <form action="{{ route('cart.applyCoupon') }}" method="POST">
                                @csrf
                                <input type="text" name="coupon_code" placeholder="Discount code">
                                <button type="submit" class="lab-btn">Apply Now</button>
                            </form>
                        </div>
                    @else
                        <div class="empty-cart text-center py-5">
                            <h3>Your cart is empty</h3>
                            <p>Looks like you haven't added any items to your cart yet.</p>
                            <a href="{{route('shop')}}" class="lab-btn">Continue Shopping</a>
                        </div>
                    @endif
                </div>
            </div>
            
            @if(count($cart) > 0)
            <div class="col-xl-4 col-12">
                <div class="sidebar">
                    <div class="sidebar__cartamount">
                        <div class="sidebar__subtotal">
                            <p>Subtotal</p>
                            <span id="subtotal">${{ number_format($total, 2) }}</span>
                        </div>
                        <div class="sidebar__shipping">
                            <p>Shipping</p>
                            <div class="sidebar__radiolist">
                                <div class="form-check">
                                    <input class="form-check-input shipping-option" 
                                           type="radio" 
                                           name="shipping" 
                                           id="free_shipping" 
                                           value="0" 
                                           checked>
                                    <div class="formcheck">
                                        <label class="form-check-label" for="free_shipping">Free Shipping</label>
                                        <span>+$0.00</span>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input shipping-option" 
                                           type="radio" 
                                           name="shipping" 
                                           id="flat_rate" 
                                           value="10">
                                    <div class="formcheck">
                                        <label class="form-check-label" for="flat_rate">Flat Rate</label>
                                        <span>+$10.00</span>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input shipping-option" 
                                           type="radio" 
                                           name="shipping" 
                                           id="local_delivery" 
                                           value="20">
                                    <div class="formcheck">
                                        <label class="form-check-label" for="local_delivery">Local Delivery</label>
                                        <span>+$20.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="sidebar__totalamaunt">
                            <div class="top">
                                <p>Total</p>
                                <span id="total-amount">${{ number_format($total, 2) }}</span>
                            </div>
                            <div class="bottom">
                                <a href="#" class="lab-btn">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Hidden forms for AJAX requests -->
<form id="update-quantity-form" method="POST" style="display: none;">
    @csrf
    @method('PUT')
    <input type="hidden" name="product_id" id="update-product-id">
    <input type="hidden" name="quantity" id="update-quantity">
</form>

<form id="remove-item-form" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
    <input type="hidden" name="product_id" id="remove-product-id">
</form>

@push('scripts')
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
        fetch(`{{ route('cart.update') }}`, {
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
        fetch(`{{ route('cart.remove') }}`, {
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
    totalCell.textContent = '$' + parseFloat(newTotal).toFixed(2);
}

function updateCartTotals() {
    let subtotal = 0;
    document.querySelectorAll('.item-total').forEach(cell => {
        let amount = parseFloat(cell.textContent.replace('$', ''));
        subtotal += amount;
    });
    
    // Update subtotal
    document.getElementById('subtotal').textContent = '$' + subtotal.toFixed(2);
    
    // Calculate total with shipping
    let shippingCost = parseFloat(document.querySelector('input[name="shipping"]:checked').value);
    let total = subtotal + shippingCost;
    document.getElementById('total-amount').textContent = '$' + total.toFixed(2);
}

// Handle shipping option changes
document.querySelectorAll('.shipping-option').forEach(radio => {
    radio.addEventListener('change', function() {
        updateCartTotals();
    });
});

function calculateShipping() {
    // Add your shipping calculation logic here
    alert('Shipping calculation feature coming soon!');
}

// Initialize cart totals on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartTotals();
});
</script>
@endpush
@endsection