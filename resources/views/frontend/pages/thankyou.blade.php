@extends('frontend.layouts.template')

@section('content')
<div class="container py-5">
    <div class="text-center">
        <h1 class="mb-4">Thank You for Your Order!</h1>
        
        <p>Your order has been placed successfully.</p>
        
        <p><strong>Your Order ID:</strong> <span style="font-size:1.5rem; color: #007bff;">{{ $order->order_number }}</span></p>
        
        <p>Please <strong>take a screenshot</strong> or <strong>save this Order ID</strong> so you can check your order status later.</p>

        <a href="{{ route('shop') }}" class="btn btn-primary mt-4">Continue Shopping</a>
    </div>
</div>
@endsection
