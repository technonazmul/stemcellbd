@extends('backend.dashboard')

@section('title', 'Create Menu Item')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create New Menu Item</h3>
                </div>
                <form action="{{ route('admin.menus.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Menu Title *</label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" 
                                           value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="type" class="form-label">Menu Type *</label>
                                    <select name="type" id="type" class="form-control @error('type') is-invalid @enderror" required>
                                        <option value="">Select Type</option>
                                        <option value="custom" {{ old('type') === 'custom' ? 'selected' : '' }}>Custom URL</option>
                                        <option value="route" {{ old('type') === 'route' ? 'selected' : '' }}>Route</option>
                                        
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3" id="url-field" style="display: none;">
                                    <label for="url" class="form-label">Custom URL</label>
                                    <input type="url" name="url" id="url" class="form-control @error('url') is-invalid @enderror" 
                                           value="{{ old('url') }}" placeholder="https://example.com">
                                    @error('url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3" id="route-field" style="display: none;">
                                    <label for="route_name" class="form-label">Route Name</label>
                                    <select name="route_name" id="route_name" class="form-control @error('route_name') is-invalid @enderror">
                                        <option value="">Select Route</option>
                                        @foreach($availableRoutes as $routeName => $routeLabel)
                                            <option value="{{ $routeName }}" {{ old('route_name') === $routeName ? 'selected' : '' }}>
                                                {{ $routeLabel }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('route_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="css_class" class="form-label">CSS Class</label>
                                    <input type="text" name="css_class" id="css_class" class="form-control @error('css_class') is-invalid @enderror" 
                                           value="{{ old('css_class') }}" placeholder="custom-class">
                                    @error('css_class')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="icon_class" class="form-label">Icon Class</label>
                                    <input type="text" name="icon_class" id="icon_class" class="form-control @error('icon_class') is-invalid @enderror" 
                                           value="{{ old('icon_class') }}" placeholder="fas fa-home">
                                    <small class="form-text text-muted">Use FontAwesome or Icofont classes</small>
                                    @error('icon_class')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="location" class="form-label">Menu Location *</label>
                                    <select name="location" id="location" class="form-control @error('location') is-invalid @enderror" required>
                                        <option value="main" {{ old('location') === 'main' ? 'selected' : '' }}>Main Menu</option>
                                        <option value="footer" {{ old('location') === 'footer' ? 'selected' : '' }}>Footer Menu</option>
                                        <option value="sidebar" {{ old('location') === 'sidebar' ? 'selected' : '' }}>Sidebar Menu</option>
                                    </select>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="parent_id" class="form-label">Parent Menu</label>
                                    <select name="parent_id" id="parent_id" class="form-control @error('parent_id') is-invalid @enderror">
                                        <option value="">No Parent (Top Level)</option>
                                        @foreach($parentMenus as $parent)
                                            <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                                                {{ $parent->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="target" class="form-label">Link Target *</label>
                                    <select name="target" id="target" class="form-control @error('target') is-invalid @enderror" required>
                                        <option value="_self" {{ old('target') === '_self' ? 'selected' : '' }}>Same Window</option>
                                        <option value="_blank" {{ old('target') === '_blank' ? 'selected' : '' }}>New Window</option>
                                    </select>
                                    @error('target')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="sort_order" class="form-label">Sort Order</label>
                                    <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" 
                                           value="{{ old('sort_order', 0) }}" min="0">
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-check mb-3">
                                    <input type="checkbox" name="is_active" id="is_active" class="form-check-input" 
                                           value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label for="is_active" class="form-check-label">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create Menu Item</button>
                        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#type').change(function() {
        const type = $(this).val();
        
        // Hide all conditional fields
        $('#url-field, #route-field').hide();
        
        // Show relevant field based on type
        if (type === 'custom') {
            $('#url-field').show();
        } else if (type === 'route') {
            $('#route-field').show();
        }
    });

    // Trigger change on page load to show correct fields
    $('#type').trigger('change');
});
</script>
@endpush