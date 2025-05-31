@extends('backend.dashboard')

@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Shipping Settings</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('shipping.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="default_shipping_cost" class="form-label">Default Shipping Cost ($)</label>
                                <input type="number" 
                                       class="form-control @error('default_shipping_cost') is-invalid @enderror" 
                                       id="default_shipping_cost" 
                                       name="default_shipping_cost" 
                                       value="{{ old('default_shipping_cost', $settings->default_shipping_cost) }}" 
                                       step="0.01" 
                                       min="0" 
                                       required>
                                @error('default_shipping_cost')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           id="enable_free_shipping" 
                                           name="enable_free_shipping" 
                                           {{ old('enable_free_shipping', $settings->enable_free_shipping) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="enable_free_shipping">
                                        Enable Free Shipping
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3" id="free_shipping_threshold_group">
                                <label for="free_shipping_threshold" class="form-label">Free Shipping Threshold ($)</label>
                                <input type="number" 
                                       class="form-control @error('free_shipping_threshold') is-invalid @enderror" 
                                       id="free_shipping_threshold" 
                                       name="free_shipping_threshold" 
                                       value="{{ old('free_shipping_threshold', $settings->free_shipping_threshold) }}" 
                                       step="0.01" 
                                       min="0" 
                                       required>
                                @error('free_shipping_threshold')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Orders above this amount will get free shipping</div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Settings</button>
                            <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Manage Coupons</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('enable_free_shipping').addEventListener('change', function() {
            const thresholdGroup = document.getElementById('free_shipping_threshold_group');
            thresholdGroup.style.opacity = this.checked ? '1' : '0.5';
            document.getElementById('free_shipping_threshold').disabled = !this.checked;
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('enable_free_shipping');
            const thresholdGroup = document.getElementById('free_shipping_threshold_group');
            thresholdGroup.style.opacity = checkbox.checked ? '1' : '0.5';
            document.getElementById('free_shipping_threshold').disabled = !checkbox.checked;
        });
    </script>
@endsection