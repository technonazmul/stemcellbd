{{-- resources/views/admin/menus/partials/menu-row.blade.php --}}
<tr data-id="{{ $menu->id }}" class="menu-level-{{ $level }}">
    <td>
        <i class="fas fa-grip-vertical drag-handle" style="cursor: move;"></i>
        {{ $menu->sort_order }}
    </td>
    <td>
        <span style="margin-left: {{ $level * 20 }}px;">
            @if($level > 0)
                <i class="fas fa-level-up-alt fa-rotate-90 text-muted me-1"></i>
            @endif
            @if($menu->icon_class)
                <i class="{{ $menu->icon_class }} me-1"></i>
            @endif
            {{ $menu->title }}
        </span>
    </td>
    <td>
        @if($menu->url)
            <span class="badge bg-info">Custom URL</span>
            <small class="d-block text-muted">{{ $menu->url }}</small>
        @elseif($menu->route_name)
            <span class="badge bg-success">Route</span>
            <small class="d-block text-muted">{{ $menu->route_name }}</small>
        @else
            <span class="badge bg-secondary">No Link</span>
        @endif
    </td>
    <td>
        <span class="badge bg-{{ $menu->type === 'custom' ? 'primary' : ($menu->type === 'route' ? 'success' : 'warning') }}">
            {{ ucfirst($menu->type) }}
        </span>
    </td>
    <td>
        <button class="btn btn-sm toggle-status {{ $menu->is_active ? 'btn-success' : 'btn-danger' }}" 
                data-id="{{ $menu->id }}">
            @if($menu->is_active)
                <i class="fas fa-check"></i> Active
            @else
                <i class="fas fa-times"></i> Inactive
            @endif
        </button>
    </td>
    <td>
        <div class="btn-group btn-group-sm">
            <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-outline-primary">
                <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" 
                        onclick="return confirm('Are you sure you want to delete this menu item?')">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </div>
    </td>
</tr>

@if($menu->children->count() > 0)
    @foreach($menu->children as $child)
        @include('backend.menus.partials.menu-row', ['menu' => $child, 'level' => $level + 1])
    @endforeach
@endif