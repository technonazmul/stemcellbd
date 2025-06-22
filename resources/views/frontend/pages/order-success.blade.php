@extends('frontend.layouts.template')

@section('content')
<div class="order-success padding-tb section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="success-content text-center">
                    <div class="success-icon mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    
                    <h2 class="mb-3">Order Placed Successfully!</h2>
                    <p class="mb-4">Thank you for your order. We have received your order and will process it soon.</p>
                    
                    <div class="order-details bg-white p-4 rounded shadow-sm mb-4">
                        <h4 class="mb-3">Order Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
                                <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
                                <p><strong>Phone:</strong> {{ $order->customer_phone }}</p>
                                @if($order->customer_email)
                                    <p><strong>Email:</strong> {{ $order->customer_email }}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <p><strong>Payment Method:</strong> {{ ucfirst(str_replace('_', ' ', $order->payment_method)) }}</p>
                                <p><strong>Total Amount:</strong> ৳{{ number_format($order->total_price, 2) }}</p>
                                <p><strong>Status:</strong> <span class="badge bg-warning">{{ ucfirst($order->status) }}</span></p>
                                <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>
                        
                        <div class="shipping-address mt-3">
                            <p><strong>Shipping Address:</strong></p>
                            <p>{{ $order->shipping_address }}</p>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="order-items bg-white p-4 rounded shadow-sm mb-4">
                        <h5 class="mb-3">Ordered Items</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderItems as $item)
                                        <tr>
                                            <td>{{ $item->product_name }}</td>
                                            <td>৳{{ number_format($item->price, 2) }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>৳{{ number_format($item->total, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">Subtotal:</th>
                                        <th>৳{{ number_format($order->subtotal, 2) }}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Shipping:</th>
                                        <th>৳{{ number_format($order->shipping_cost, 2) }}</th>
                                    </tr>
                                    <tr class="table-active">
                                        <th colspan="3">Total:</th>
                                        <th>৳{{ number_format($order->total_price, 2) }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <a href="{{ route('shop') }}" class="lab-btn me-3">Continue Shopping</a>
                        <a href="{{ route('order.track') }}?order_number={{ $order->order_number }}" class="lab-btn btn-outline">Track Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection