@extends('backend.dashboard')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Manage Coupons</h4>
                        <div>
                            <a href="{{ route('shipping.index') }}" class="btn btn-secondary">Shipping Settings</a>
                            <a href="{{ route('coupons.create') }}" class="btn btn-primary">Add New Coupon</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

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
                                    @forelse($coupons as $coupon)
                                        <tr>
                                            <td><code>{{ $coupon->code }}</code></td>
                                            <td>{{ $coupon->name }}</td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    {{ ucfirst(str_replace('_', ' ', $coupon->type)) }}
                                                </span>
                                            </td>
                                            <td>
                                                @if($coupon->type == 'percentage')
                                                    {{ $coupon->value }}%
                                                @elseif($coupon->type == 'fixed')
                                                    ${{ $coupon->value }}
                                                @else
                                                    Free Shipping
                                                @endif
                                            </td>
                                            <td>${{ $coupon->minimum_amount }}</td>
                                            <td>
                                                {{ $coupon->used_count }}
                                                @if($coupon->usage_limit)
                                                    / {{ $coupon->usage_limit }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($coupon->expires_at)
                                                    {{ $coupon->expires_at->format('M d, Y') }}
                                                @else
                                                    Never
                                                @endif
                                            </td>
                                            <td>
                                                @if($coupon->is_active && (!$coupon->expires_at || $coupon->expires_at->gt(now())))
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('coupons.show', $coupon) }}" 
                                                       class="btn btn-sm btn-outline-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('coupons.edit', $coupon) }}" 
                                                       class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('coupons.destroy', $coupon) }}" 
                                                          method="POST" 
                                                          style="display: inline;"
                                                          onsubmit="return confirm('Are you sure?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No coupons found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{ $coupons->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection