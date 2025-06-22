@extends('backend.dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Order #{{ $order->order_number }}</h2>
        <button onclick="printOrder()" class="btn btn-secondary">🖨️ Print</button>
    </div>

    <div id="printableArea">
        <p><strong>Customer:</strong> {{ $order->customer_name }} ({{ $order->customer_phone }})</p>
        <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>
        <p><strong>Status:</strong> {{ $order->status }} | <strong>Payment:</strong> {{ $order->payment_status }}</p>
        <p><strong>Total:</strong> {{ number_format($order->total_amount, 2) }}৳</p>

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
                @foreach ($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td><img src="{{ asset('storage/public/products/'.$item->product_image) }}" width="50"></td>
                    <td>{{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->total, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <hr>

    <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                @foreach (['pending','confirmed','processing','shipped','delivered','cancelled'] as $status)
                    <option value="{{ $status }}" {{ $order->status === $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Payment Status</label>
            <select name="payment_status" class="form-control" required>
                @foreach (['pending','paid','failed','refunded'] as $pay_status)
                    <option value="{{ $pay_status }}" {{ $order->payment_status === $pay_status ? 'selected' : '' }}>
                        {{ ucfirst($pay_status) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Notes</label>
            <textarea name="notes" class="form-control" rows="3">{{ $order->notes }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
</div>



@endsection

@section('extra_script')
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
@endsection

@section('extra_css')
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
@endsection