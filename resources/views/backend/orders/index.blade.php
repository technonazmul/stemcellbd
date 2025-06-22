@extends('backend.dashboard')

@section('content')
<div class="container">
    <h2>Orders</h2>
    <div class="mb-3">
        <strong>Total Orders:</strong> {{ $stats['total_orders'] }} |
        <strong>Pending:</strong> {{ $stats['pending_orders'] }} |
        <strong>Completed:</strong> {{ $stats['completed_orders'] }} |
        <strong>Total Revenue:</strong> {{ number_format($stats['total_revenue'], 2) }}৳
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
            @foreach ($orders as $index => $order)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $order->order_number }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->customer_phone }}</td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>{{ number_format($order->total_amount, 2) }}৳</td>
                <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('extra_script')
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
@endsection
