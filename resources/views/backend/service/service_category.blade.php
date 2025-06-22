@extends('backend.dashboard')
@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-5">
            <h3>Add Service Category</h3>
            <form method="POST" action="{{route('admin.add_service_category')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="{{ old('name') }}" required>
                </div>
                
                <div class="form-group mb-3">
                    <label for="short_description">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Enter short description">{{ old('short_description') }}</textarea>
                </div>
                
                <div class="form-group mb-3">
                    <label for="parent_id">Parent Category</label>
                    <select class="form-control" id="parent_id" name="parent_id">
                        <option value="">Select Parent Category (Optional)</option>
                        @php
                        $parent_categories = App\Models\ServiceCategory::whereNull('parent_id')->get();
                        @endphp
                        @foreach ($parent_categories as $parent)
                            <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                                {{ $parent->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-3">
                    <label for="image">Category Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <small class="text-muted">Supported formats: JPG, PNG, GIF (Max: 2MB)</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <div class="col-md-7">
            <h3>All Service Categories</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 40px;">Drag</th>
                            <th>Si.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Parent Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="sortableCategories">
                        @php $i = 0; @endphp
                        @php
                        $service_categories = App\Models\ServiceCategory::with('parent')->orderBy('priority')->get();
                        @endphp
                        @foreach ($service_categories as $service_category)
                        <tr data-id="{{ $service_category->id }}" class="sortable-row">
                            <td class="drag-handle" style="cursor: move; text-align: center; user-select: none;">
                                <i class="fas fa-grip-vertical" style="color: #6c757d; font-size: 16px;"></i>
                            </td>
                            @php $i++ @endphp
                            <td class="row-number">{{ $i }}</td>
                            <td>
                                @if($service_category->image)
                                    <img src="{{ asset('storage/public/service_categories/' . $service_category->image) }}" 
                                         alt="{{ $service_category->name }}" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $service_category->name }}</td>
                            <td>
                                @if($service_category->parent)
                                    <span class="badge badge-info">{{ $service_category->parent->name }}</span>
                                @else
                                    <span class="text-muted">Root Category</span>
                                @endif
                            </td>
                            <td>
                                @if($service_category->short_description)
                                    {{ Str::limit($service_category->short_description, 50) }}
                                @else
                                    <span class="text-muted">No description</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.edit_service_category',$service_category->id)}}">
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                </a>
                                <a href="{{route('admin.delete_service_category', $service_category->id)}}" 
                                   onclick="return confirm('Are you sure? This will also delete all subcategories and associated services.')">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
/* Add some CSS for better drag and drop experience */
.sortable-row {
    transition: all 0.3s ease;
}

.sortable-row:hover {
    background-color: #f8f9fa;
}

.sortable-row.sortable-chosen {
    background-color: #e3f2fd !important;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.sortable-row.sortable-ghost {
    opacity: 0.5;
    background-color: #ffecb3 !important;
}

.drag-handle:hover {
    background-color: #e9ecef;
    border-radius: 4px;
}

.drag-handle i {
    pointer-events: none;
}

/* Prevent text selection during drag */
.sortable-row.sortable-chosen * {
    user-select: none;
}
</style>

@endsection

@section('extra_script')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortableElement = document.getElementById('sortableCategories');
    
    if (sortableElement) {
        const sortable = new Sortable(sortableElement, {
            animation: 150,
            handle: '.drag-handle',
            ghostClass: 'sortable-ghost',
            chosenClass: 'sortable-chosen',
            dragClass: 'sortable-drag',
            
            onStart: function(evt) {
                console.log('Drag started');
                evt.item.style.opacity = '0.5';
            },
            
            onEnd: function(evt) {
                console.log('Drag ended');
                evt.item.style.opacity = '1';
                
                // Update row numbers
                updateRowNumbers();
                
                // Prepare order data
                let order = [];
                document.querySelectorAll('#sortableCategories tr[data-id]').forEach((row, index) => {
                    const id = row.getAttribute('data-id');
                    if (id) {
                        order.push({
                            id: id,
                            priority: index + 1
                        });
                    }
                });
                
                console.log('New order:', order);
                
                // Send to server
                fetch("{{ route('admin.update_category_order') }}", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({order: order})
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Server response:', data);
                    if (data.success) {
                        console.log("Order updated successfully");
                        // Optional: Show success message
                        showMessage('Order updated successfully', 'success');
                    } else {
                        console.error("Failed to update order:", data.message);
                        showMessage('Failed to update order', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showMessage('An error occurred while updating order', 'error');
                });
            }
        });
        
        console.log('Sortable initialized');
    } else {
        console.error('Sortable element not found');
    }
    
    function updateRowNumbers() {
        document.querySelectorAll('#sortableCategories tr .row-number').forEach((cell, index) => {
            cell.textContent = index + 1;
        });
    }
    
    function showMessage(message, type) {
        // Create a simple toast message
        const toast = document.createElement('div');
        toast.className = `alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
        toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
        toast.textContent = message;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.remove();
        }, 3000);
    }
});
</script>
@endsection