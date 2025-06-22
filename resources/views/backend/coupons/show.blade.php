@extends('backend.dashboard')

@section('content')
<div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Coupon Details</h4>
                        <div>
                            <a href="{{ route('coupons.edit', $coupon) }}" class="btn btn-primary">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <a href="{{ route('coupons.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="40%">Code:</th>
                                        <td><code class="fs-5">{{ $coupon->code }}</code></td>
                                    </tr>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $coupon->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Type:</th>
                                        <td>
                                            <span class="badge bg-secondary">
                                                {{ ucfirst(str_replace('_', ' ', $coupon->type)) }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Value:</th>
                                        <td>
                                            @if($coupon->type == 'percentage')
                                                <span class="text-success fw-bold">{{ $coupon->value }}% off</span>
                                            @elseif($coupon->type == 'fixed')
                                                <span class="text-success fw-bold">${{ $coupon->value }} off</span>
                                            @else
                                                <span class="text-success fw-bold">Free Shipping</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Minimum Amount:</th>
                                        <td>${{ $coupon->minimum_amount }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>
                                            @if($coupon->is_active && (!$coupon->expires_at || $coupon->expires_at->gt(now())))
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th width="40%">Usage Limit:</th>
                                        <td>
                                            @if($coupon->usage_limit)
                                                {{ $coupon->usage_limit }}
                                            @else
                                                Unlimited
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Used Count:</th>
                                        <td>
                                            <span class="badge bg-info">{{ $coupon->used_count }}</span>
                                            @if($coupon->usage_limit)
                                                <small class="text-muted">/ {{ $coupon->usage_limit }}</small>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Remaining Uses:</th>
                                        <td>
                                            @if($coupon->usage_limit)
                                                <span class="badge bg-warning">{{ $coupon->usage_limit - $coupon->used_count }}</span>
                                            @else
                                                <span class="badge bg-success">Unlimited</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Expires At:</th>
                                        <td>
                                            @if($coupon->expires_at)
                                                {{ $coupon->expires_at->format('M d, Y H:i') }}
                                                @if($coupon->expires_at->lt(now()))
                                                    <span class="badge bg-danger ms-2">Expired</span>
                                                @endif
                                            @else
                                                Never
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created:</th>
                                        <td>{{ $coupon->created_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Updated:</th>
                                        <td>{{ $coupon->updated_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        @if($coupon->description)
                            <div class="mt-4">
                                <h5>Description</h5>
                                <p class="text-muted">{{ $coupon->description }}</p>
                            </div>
                        @endif

                        <!-- Usage Statistics Chart -->
                        <div class="mt-4">
                            <h5>Usage Progress</h5>
                            @if($coupon->usage_limit)
                                @php
                                    $percentage = ($coupon->used_count / $coupon->usage_limit) * 100;
                                @endphp
                                <div class="progress mb-2" style="height: 25px;">
                                    <div class="progress-bar 
                                        {{ $percentage >= 90 ? 'bg-danger' : ($percentage >= 70 ? 'bg-warning' : 'bg-success') }}" 
                                         role="progressbar" 
                                         style="width: {{ $percentage }}%"
                                         aria-valuenow="{{ $percentage }}" 
                                         aria-valuemin="0" 
                                         aria-valuemax="100">
                                        {{ number_format($percentage, 1) }}%
                                    </div>
                                </div>
                                <small class="text-muted">
                                    {{ $coupon->used_count }} of {{ $coupon->usage_limit }} uses remaining
                                </small>
                            @else
                                <div class="alert alert-info">
                                    <i class="bi bi-infinity"></i> This coupon has unlimited usage
                                </div>
                            @endif
                        </div>

                        <!-- Quick Actions -->
                        <div class="mt-4 pt-3 border-top">
                            <h6>Quick Actions</h6>
                            <div class="btn-group" role="group">
                                @if($coupon->is_active)
                                    <form action="{{ route('coupons.toggle-status', $coupon) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pause"></i> Deactivate
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('coupons.toggle-status', $coupon) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="bi bi-play"></i> Activate
                                        </button>
                                    </form>
                                @endif
                                
                                <button type="button" class="btn btn-info btn-sm" onclick="copyToClipboard('{{ $coupon->code }}')">
                                    <i class="bi bi-clipboard"></i> Copy Code
                                </button>
                                
                                <form action="{{ route('coupons.destroy', $coupon) }}" 
                                      method="POST" 
                                      style="display: inline;"
                                      onsubmit="return confirm('Are you sure you want to delete this coupon?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection