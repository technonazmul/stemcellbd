@extends('frontend.layouts.template')

@section('content')
<!-- Page Header -->
<div class="pageheader bg-img" style="background-image: url({{ asset('assets/images/bg/04.jpg') }});">
    <div class="container">
        <div class="pageheader__content">
            <h2>Checkout</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cart.index') }}">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="checkout padding-tb section-bg">
    <div class="container">
        <form action="{{ route('order.place') }}" method="POST" id="checkout-form">
            @csrf
            <div class="row g-5">
                <!-- Billing Details -->
                <div class="col-lg-8">
                    <div class="checkout__form">
                        <h4 class="mb-4">Billing Details</h4>
                        
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="customer_name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control @error('customer_name') is-invalid @enderror" 
                                       id="customer_name" name="customer_name" 
                                       value="{{ old('customer_name') }}" required>
                                @error('customer_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="customer_phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control @error('customer_phone') is-invalid @enderror" 
                                       id="customer_phone" name="customer_phone" 
                                       value="{{ old('customer_phone') }}" required>
                                @error('customer_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="customer_email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('customer_email') is-invalid @enderror" 
                                       id="customer_email" name="customer_email" 
                                       value="{{ old('customer_email') }}">
                                @error('customer_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12">
                                <label for="shipping_address" class="form-label">Shipping Address *</label>
                                <textarea class="form-control @error('shipping_address') is-invalid @enderror" 
                                          id="shipping_address" name="shipping_address" 
                                          rows="3" required>{{ old('shipping_address') }}</textarea>
                                @error('shipping_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12">
                                <label for="notes" class="form-label">Order Notes (Optional)</label>
                                <textarea class="form-control" id="notes" name="notes" 
                                          rows="3" placeholder="Notes about your order, e.g. special notes for delivery.">{{ old('notes') }}</textarea>
                            </div>
                        </div>

                        <!-- Payment Methods -->
                        <div class="mt-5">
                            <h5 class="mb-3">Payment Method</h5>
                            <div class="payment-methods">
                                <div class="form-check mb-3 p-3 border rounded">
                                    <input class="form-check-input" type="radio" name="payment_method" 
                                           id="cash_on_delivery" value="cash_on_delivery" checked>
                                    <label class="form-check-label fw-medium" for="cash_on_delivery">
                                        <i class="fas fa-money-bill-wave me-2 text-success"></i>
                                        Cash on Delivery
                                    </label>
                                    <small class="text-muted d-block mt-1 ms-4">Pay when you receive your order</small>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="checkout__summary bg-light p-4 rounded">
                        <h4 class="mb-4">Your Order</h4>
                        
                        <div class="order-items">
                            @foreach($cart as $id => $details)
                                <div class="order-item d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                                    <div class="item-info">
                                        <h6 class="mb-1">{{ $details['name'] }}</h6>
                                        <small class="text-muted">Qty: {{ $details['quantity'] }}</small>
                                    </div>
                                    <div class="item-price fw-medium">
                                        ৳{{ number_format($details['price'] * $details['quantity'], 2) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr class="my-3">

                        <div class="order-totals">
                            <div class="d-flex justify-content-between mb-3">
                                <span>Subtotal:</span>
                                <span id="subtotal-amount" class="fw-medium">৳{{ number_format($subtotal, 2) }}</span>
                            </div>
                            
                            <div class="shipping-options mb-4">
                                <label class="form-label fw-medium mb-3">Shipping Options:</label>
                                <div class="form-check mb-2 p-2 border rounded">
                                    <input class="form-check-input shipping-radio" type="radio" 
                                           name="shipping_cost" id="inside_dhaka_checkout" 
                                           value="70" checked>
                                    <label class="form-check-label d-flex justify-content-between w-100 align-items-center" 
                                           for="inside_dhaka_checkout">
                                        <div>
                                            <span class="fw-medium">Inside Dhaka</span>
                                            <small class="text-muted d-block">Delivery in 1-2 days</small>
                                        </div>
                                        <span class="fw-bold text-primary">৳70.00</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2 p-2 border rounded">
                                    <input class="form-check-input shipping-radio" type="radio" 
                                           name="shipping_cost" id="outside_dhaka_checkout" 
                                           value="120">
                                    <label class="form-check-label d-flex justify-content-between w-100 align-items-center" 
                                           for="outside_dhaka_checkout">
                                        <div>
                                            <span class="fw-medium">Outside Dhaka</span>
                                            <small class="text-muted d-block">Delivery in 3-5 days</small>
                                        </div>
                                        <span class="fw-bold text-primary">৳120.00</span>
                                    </label>
                                </div>
                            </div>

                            <hr class="my-3">

                            <div class="d-flex justify-content-between mb-4">
                                <strong class="fs-5">Total:</strong>
                                <strong id="total-amount" class="fs-5 text-primary">৳{{ number_format($subtotal + 70, 2) }}</strong>
                            </div>

                            <button type="submit" class="lab-btn w-100 py-3" id="place-order-btn">
                                <i class="fas fa-shopping-cart me-2"></i>
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('styles')
<style>
/* Custom Radio Button Styling */
.form-check-input[type="radio"] {
    width: 1.2em;
    height: 1.2em;
    margin-top: 0.125em;
    border: 2px solid #dee2e6;
    border-radius: 50%;
}

.form-check-input[type="radio"]:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.form-check-input[type="radio"]:focus {
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

/* Payment Method Cards */
.payment-methods .form-check {
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid #e9ecef !important;
}

.payment-methods .form-check:hover {
    border-color: #0d6efd !important;
    background-color: #f8f9fa;
}

.payment-methods .form-check:has(input:checked) {
    border-color: #0d6efd !important;
    background-color: rgba(13, 110, 253, 0.1);
}

/* Shipping Options Cards */
.shipping-options .form-check {
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid #e9ecef !important;
}

.shipping-options .form-check:hover {
    border-color: #0d6efd !important;
    background-color: #f8f9fa;
}

.shipping-options .form-check:has(input:checked) {
    border-color: #0d6efd !important;
    background-color: rgba(13, 110, 253, 0.1);
}

/* Label Styling */
.form-check-label {
    cursor: pointer;
    width: 100%;
}

/* Order Summary Styling */
.checkout__summary {
    position: sticky;
    top: 20px;
}

/* Button Styling */
.lab-btn {
    background: linear-gradient(45deg, #0d6efd, #0056b3);
    border: none;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.lab-btn:hover {
    background: linear-gradient(45deg, #0056b3, #004085);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(13, 110, 253, 0.4);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .checkout__summary {
        position: static;
        margin-top: 2rem;
    }
    
    .form-check {
        margin-bottom: 1rem !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Update total when shipping changes
document.querySelectorAll('.shipping-radio').forEach(radio => {
    radio.addEventListener('change', function() {
        const subtotal = {{ $subtotal }};
        const shippingCost = parseFloat(this.value);
        const total = subtotal + shippingCost;
        
        document.getElementById('total-amount').textContent = '৳' + total.toLocaleString('en-US', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    });
});

// Form validation
document.getElementById('checkout-form').addEventListener('submit', function(e) {
    const requiredFields = ['customer_name', 'customer_phone', 'shipping_address'];
    let isValid = true;
    
    requiredFields.forEach(field => {
        const input = document.getElementById(field);
        if (!input.value.trim()) {
            isValid = false;
            input.classList.add('is-invalid');
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    if (!isValid) {
        e.preventDefault();
        alert('Please fill in all required fields.');
        return false;
    }
    
    // Show loading state
    const submitBtn = document.getElementById('place-order-btn');
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Processing...';
    submitBtn.disabled = true;
});

// Enhanced radio button interaction
document.querySelectorAll('.form-check').forEach(checkDiv => {
    checkDiv.addEventListener('click', function(e) {
        if (e.target.type !== 'radio') {
            const radio = this.querySelector('input[type="radio"]');
            if (radio) {
                radio.checked = true;
                radio.dispatchEvent(new Event('change'));
            }
        }
    });
});
</script>
@endpush
@endsection