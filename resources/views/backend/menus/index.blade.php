@extends('backend.dashboard')

@section('title', 'Menu Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Menu Management</h3>
                    <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add New Menu Item
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @foreach($menus as $location => $locationMenus)
                        <div class="mb-4">
                            <h4 class="text-primary">{{ ucfirst($location) }} Menu</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="50">Order</th>
                                            <th>Title</th>
                                            <th>URL/Route</th>
                                            <th>Type</th>
                                            <th width="100">Status</th>
                                            <th width="150">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="menu-{{ $location }}" class="sortable-menu" data-location="{{ $location }}">
                                        @foreach($locationMenus->whereNull('parent_id') as $menu)
                                            @include('backend.menus.partials.menu-row', ['menu' => $menu, 'level' => 0])
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach

                    @if($menus->isEmpty())
                        <div class="text-center py-4">
                            <p class="text-muted">No menu items found. <a href="{{ route('admin.menus.create') }}">Create your first menu item</a>.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
<style>
    .menu-level-1 { padding-left: 20px; }
    .menu-level-2 { padding-left: 40px; }
    .menu-level-3 { padding-left: 60px; }
    .sortable-placeholder {
        background-color: #f8f9fa;
        border: 2px dashed #dee2e6;
        height: 50px;
    }
    .ui-sortable-helper {
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
    // Make menu sortable
    $('.sortable-menu').sortable({
        placeholder: 'sortable-placeholder',
        handle: '.drag-handle',
        update: function(event, ui) {
            updateMenuOrder();
        }
    });

    // Toggle menu status
    $(document).on('click', '.toggle-status', function(e) {
        e.preventDefault();
        const menuId = $(this).data('id');
        const button = $(this);
        
        $.ajax({
            url: `/admin/menus/${menuId}/toggle-status`,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    if (response.status) {
                        button.removeClass('btn-danger').addClass('btn-success')
                              .html('<i class="fas fa-check"></i> Active');
                    } else {
                        button.removeClass('btn-success').addClass('btn-danger')
                              .html('<i class="fas fa-times"></i> Inactive');
                    }
                }
            }
        });
    });

    function updateMenuOrder() {
        const items = [];
        $('.sortable-menu tr').each(function(index) {
            const menuId = $(this).data('id');
            if (menuId) {
                items.push({
                    id: menuId,
                    sort_order: index,
                    parent_id: null // Simplified for this example
                });
            }
        });

        $.ajax({
            url: '{{ route("admin.menus.update-order") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                items: items
            },
            success: function(response) {
                if (response.success) {
                    toastr.success('Menu order updated successfully!');
                }
            }
        });
    }
});
</script>
@endpush