@extends('backend.dashboard')

@section('title', 'All Pages')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-file-alt me-2"></i>All Pages</h1>
    <a href="{{ route('pages.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-1"></i>Create New Page
    </a>
</div>

@if($pages->count() > 0)
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Published</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>
                                <strong>{{ $page->title }}</strong>
                                @if(!$page->is_published)
                                    <span class="badge bg-secondary ms-2">Draft</span>
                                @endif
                            </td>
                            <td>
                                <code>{{ $page->slug }}</code>
                            </td>
                            <td>
                                @if($page->is_published)
                                    <span class="badge bg-success">
                                        <i class="fas fa-eye me-1"></i>Published
                                    </span>
                                @else
                                    <span class="badge bg-warning">
                                        <i class="fas fa-eye-slash me-1"></i>Draft
                                    </span>
                                @endif
                            </td>
                            <td>
                                {{ $page->formatted_published_at ?? 'Not published' }}
                            </td>
                            <td>
                                {{ $page->created_at->format('M d, Y') }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('pages.show', $page) }}" class="btn btn-outline-info" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('pages.edit', $page) }}" class="btn btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @if($page->is_published)
                                        <a href="{{ route('pages.public', $page) }}" class="btn btn-outline-success" title="View Public" target="_blank">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    @endif
                                    <form action="{{ route('pages.destroy', $page) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this page?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $pages->links() }}
    </div>
@else
    <div class="text-center py-5">
        <i class="fas fa-file-alt text-muted" style="font-size: 4rem;"></i>
        <h3 class="mt-3 text-muted">No pages found</h3>
        <p class="text-muted">Get started by creating your first page.</p>
        <a href="{{ route('pages.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>Create First Page
        </a>
    </div>
@endif
@endsection