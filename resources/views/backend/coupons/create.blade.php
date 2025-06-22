@extends('backend.dashboard')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Coupon</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('coupons.store') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="code" class="form-label">Coupon Code</label>
                                        <input type="text" 
                                               class="form-control @error('code') is-invalid @enderror" 
                                               id="code" 
                                               name="code" 
                                               value="{{ old('code') }}" 
                                               style="text-transform: uppercase;"
                                               required>
                                        @error('code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Coupon Name</label>
                                        <input type="text" 
                                               class="form-control @error('name') is-invalid @enderror" 
                                               id="name" 
                                               name="name" 
                                               value="{{ old('name') }}" 
                                               required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Coupon Type</label>
                                        <select class="form-select @error('type') is-invalid @enderror" 
                                                id="type" 
                                                name="type" 
                                                required>
                                            <option value="">Select Type</option>
                                            <option value="percentage" {{ old('type') == 'percentage' ? 'selected' : '' }}>
                                                Percentage Discount
                                            </option>
                                            <option value="fixed" {{ old('type') == 'fixed' ? 'selected' : '' }}>
                                                Fixed Amount Discount
                                            </option>
                                            <option value="free_shipping" {{ old('type') == 'free_shipping' ? 'selected' : '' }}>
                                                Free Shipping
                                            </option>
                                        </select>
                                        @error('type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3" id="value_group">
                                        <label for="value" class="form-label">Discount Value</label>
                                        <input type="number" 
                                               class="form-control @error('value') is-invalid @enderror" 
                                               id="value" 
                                               name="value" 
                                               value="{{ old('value') }}" 
                                               step="0.01" 
                                               min="0">
                                        @error('value')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text" id="value_help"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="minimum_amount" class="form-label">Minimum Order Amount ($)</label>
                                        <input type="number" 
                                               class="form-control @error('minimum_amount') is-invalid @enderror" 
                                               id="minimum_amount" 
                                               name="minimum_amount" 
                                               value="{{ old('minimum_amount', 0) }}" 
                                               step="0.01" 
                                               min="0">
                                        @error('minimum_amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="usage_limit" class="form-label">Usage Limit</label>
                                        <input type="number" 
                                               class="form-control @error('usage_limit') is-invalid @enderror" 
                                               id="usage_limit" 
                                               name="usage_limit" 
                                               value="{{ old('usage_limit') }}" 
                                               min="1">
                                        @error('usage_limit')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">Leave empty for unlimited usage</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="expires_at" class="form-label">Expiration Date</label>
                                        <input type="datetime-local" 
                                               class="form-control @error('expires_at') is-invalid @enderror" 
                                               id="expires_at" 
                                               name="expires_at" 
                                               value="{{ old('expires_at') }}">
                                        @error('expires_at')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">Leave empty for no expiration</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="form-check mt-4">
                                            <input class="form-check-input" 
                                                   type="checkbox" 
                                                   id="is_active" 
                                                   name="is_active" 
                                                   {{ old('is_active', true) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active">
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" 
                                          name="description" 
                                          rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Create Coupon</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('type').addEventListener('change', function() {
            const valueGroup = document.getElementById('value_group');
            const valueInput = document.getElementById('value');
            const valueHelp = document.getElementById('value_help');
            
            switch(this.value) {
                case 'percentage':
                    valueGroup.style.display = 'block';
                    valueInput.setAttribute('max', '100');
                    valueInput.required = true;
                    valueHelp.textContent = 'Enter percentage (0-100)';
                    break;
                case 'fixed':
                    valueGroup.style.display = 'block';
                    valueInput.removeAttribute('max');
                    valueInput.required = true;
                    valueHelp.textContent = 'Enter fixed discount amount in dollars';
                    break;
                case 'free_shipping':
                    valueGroup.style.display = 'none';
                    valueInput.required = false;
                    valueInput.value = '';
                    break;
                default:
                    valueGroup.style.display = 'block';
                    valueInput.required = false;
                    valueHelp.textContent = '';
            }
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('type').dispatchEvent(new Event('change'));
        });
    </script>
@endsection