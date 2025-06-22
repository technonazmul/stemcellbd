@extends('backend.dashboard')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Shipping & Offer Settings</h4>
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
                        
                        {{-- Default Shipping Cost --}}
                        {{-- <div class="mb-3">
                            <label for="default_shipping_cost" class="form-label">Default Shipping Cost (৳)</label>
                            <input type="number" 
                                   class="form-control @error('default_shipping_cost') is-invalid @enderror" 
                                   id="default_shipping_cost" 
                                   name="default_shipping_cost" 
                                   value="{{ old('default_shipping_cost', $settings->default_shipping_cost) }}" 
                                   step="0.01" min="0" required>
                            @error('default_shipping_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="inside_dhaka_cost" class="form-label">Inside Dhaka Shipping Cost (৳)</label>
                            <input type="number" class="form-control" id="inside_dhaka_cost" name="inside_dhaka_cost" step="0.01" min="0"
                                value="{{ old('inside_dhaka_cost', $settings->inside_dhaka_cost) }}">
                        </div>

                        <div class="mb-3">
                            <label for="outside_dhaka_cost" class="form-label">Outside Dhaka Shipping Cost (৳)</label>
                            <input type="number" class="form-control" id="outside_dhaka_cost" name="outside_dhaka_cost" step="0.01" min="0"
                                value="{{ old('outside_dhaka_cost', $settings->outside_dhaka_cost) }}">
                        </div>


                        {{-- Enable Free Shipping --}}
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="enable_free_shipping" name="enable_free_shipping" 
                                    {{ old('enable_free_shipping', $settings->enable_free_shipping) ? 'checked' : '' }}>
                                <label class="form-check-label" for="enable_free_shipping">
                                    Enable Free Shipping
                                </label>
                            </div>
                        </div>

                        {{-- Free Shipping Threshold --}}
                        <div class="mb-3" id="free_shipping_threshold_group">
                            <label for="free_shipping_threshold" class="form-label">Free Shipping Threshold (৳)</label>
                            <input type="number" 
                                   class="form-control @error('free_shipping_threshold') is-invalid @enderror" 
                                   id="free_shipping_threshold" 
                                   name="free_shipping_threshold" 
                                   value="{{ old('free_shipping_threshold', $settings->free_shipping_threshold) }}" 
                                   step="0.01" min="0" required>
                            @error('free_shipping_threshold')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Orders above this amount will get free shipping</div>
                        </div>

                        <hr>

                        {{-- Enable Discount Offer --}}
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="enable_discount_offer" name="enable_discount_offer"
                                    {{ old('enable_discount_offer', $settings->enable_discount_offer) ? 'checked' : '' }}>
                                <label class="form-check-label" for="enable_discount_offer">
                                    Enable 15% Discount Offer
                                </label>
                            </div>
                        </div>

                        {{-- Discount Percent --}}
                        <div class="mb-3" id="discount_percent_group">
                            <label for="discount_percent" class="form-label">Discount Percent (%)</label>
                            <input type="number" 
                                   class="form-control @error('discount_percent') is-invalid @enderror" 
                                   id="discount_percent" 
                                   name="discount_percent" 
                                   value="{{ old('discount_percent', $settings->discount_percent) }}" 
                                   step="0.01" min="0" max="100" required>
                            @error('discount_percent')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Discount Minimum Total --}}
                        <div class="mb-3" id="discount_minimum_total_group">
                            <label for="discount_minimum_total" class="form-label">Discount Minimum Order Total (৳)</label>
                            <input type="number" 
                                   class="form-control @error('discount_minimum_total') is-invalid @enderror" 
                                   id="discount_minimum_total" 
                                   name="discount_minimum_total" 
                                   value="{{ old('discount_minimum_total', $settings->discount_minimum_total) }}" 
                                   step="0.01" min="0" required>
                            @error('discount_minimum_total')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Orders above this amount get the discount</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Settings</button>
                        <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Manage Coupons</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript Logic --}}
<script>
    function toggleDiscountInputs() {
        const checked = document.getElementById('enable_discount_offer').checked;
        document.getElementById('discount_percent_group').style.opacity = checked ? '1' : '0.5';
        document.getElementById('discount_minimum_total_group').style.opacity = checked ? '1' : '0.5';
        document.getElementById('discount_percent').disabled = !checked;
        document.getElementById('discount_minimum_total').disabled = !checked;
    }

    function toggleFreeShippingInputs() {
        const checked = document.getElementById('enable_free_shipping').checked;
        document.getElementById('free_shipping_threshold_group').style.opacity = checked ? '1' : '0.5';
        document.getElementById('free_shipping_threshold').disabled = !checked;
    }

    document.addEventListener('DOMContentLoaded', function () {
        toggleDiscountInputs();
        toggleFreeShippingInputs();

        document.getElementById('enable_discount_offer').addEventListener('change', toggleDiscountInputs);
        document.getElementById('enable_free_shipping').addEventListener('change', toggleFreeShippingInputs);
    });
</script>
@endsection
