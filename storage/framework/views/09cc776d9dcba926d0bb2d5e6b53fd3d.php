<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h1><?php echo e($page->title); ?></h1>
                <div class="text-muted mb-2">
                    <i class="fas fa-link me-1"></i>
                    <code><?php echo e($page->slug); ?></code>
                </div>
                <?php if($page->meta_description): ?>
                    <p class="text-muted"><?php echo e($page->meta_description); ?></p>
                <?php endif; ?>
            </div>
            <div class="btn-group" role="group">
                <a href="<?php echo e(route('pages.edit', $page)); ?>" class="btn btn-primary">
                    <i class="fas fa-edit me-1"></i>Edit
                </a>
                <?php if($page->is_published): ?>
                    <a href="<?php echo e(route('pages.public', $page)); ?>" class="btn btn-success" target="_blank">
                        <i class="fas fa-external-link-alt me-1"></i>View Public
                    </a>
                <?php endif; ?>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('pages.index')); ?>">
                                <i class="fas fa-list me-2"></i>All Pages
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('pages.create')); ?>">
                                <i class="fas fa-plus me-2"></i>New Page
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="<?php echo e(route('pages.destroy', $page)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this page?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fas fa-trash me-2"></i>Delete Page
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Page Content</h5>
                <?php if($page->is_published): ?>
                    <span class="badge bg-success">
                        <i class="fas fa-eye me-1"></i>Published
                    </span>
                <?php else: ?>
                    <span class="badge bg-warning">
                        <i class="fas fa-eye-slash me-1"></i>Draft
                    </span>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="content-preview">
                    <?php echo $page->content; ?>

                </div>
            </div>
        </div>

        <?php if($page->meta_keywords): ?>
            <div class="card mt-4">
                <div class="card-header">
                    <h6 class="mb-0">Keywords</h6>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = explode(',', $page->meta_keywords); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge bg-light text-dark me-2 mb-1"><?php echo e(trim($keyword)); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Page Information</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Status:</strong>
                    <?php if($page->is_published): ?>
                        <span class="badge bg-success ms-1">
                            <i class="fas fa-eye me-1"></i>Published
                        </span>
                    <?php else: ?>
                        <span class="badge bg-warning ms-1">
                            <i class="fas fa-eye-slash me-1"></i>Draft
                        </span>
                    <?php endif; ?>
                </div>

                <?php if($page->published_at): ?>
                    <div class="mb-3">
                        <strong>Published:</strong><br>
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>
                            <?php echo e($page->published_at->format('M d, Y')); ?>

                        </small><br>
                        <small class="text-muted">
                            <i class="fas fa-clock me-1"></i>
                            <?php echo e($page->published_at->format('g:i A')); ?>

                        </small>
                    </div>
                <?php endif; ?>

                <div class="mb-3">
                    <strong>Created:</strong><br>
                    <small class="text-muted">
                        <i class="fas fa-calendar me-1"></i>
                        <?php echo e($page->created_at->format('M d, Y g:i A')); ?>

                    </small>
                </div>

                <div class="mb-3">
                    <strong>Last Updated:</strong><br>
                    <small class="text-muted">
                        <i class="fas fa-edit me-1"></i>
                        <?php echo e($page->updated_at->format('M d, Y g:i A')); ?>

                    </small>
                </div>

                <div class="mb-3">
                    <strong>URL Slug:</strong><br>
                    <code class="small"><?php echo e($page->slug); ?></code>
                </div>

                <?php if($page->is_published): ?>
                    <div class="mb-3">
                        <strong>Public URL:</strong><br>
                        <a href="<?php echo e(route('pages.public', $page)); ?>" target="_blank" class="small text-break">
                            <?php echo e(route('pages.public', $page)); ?>

                            <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if($page->meta_description): ?>
            <div class="card mt-3">
                <div class="card-header">
                    <h6 class="mb-0">SEO Preview</h6>
                </div>
                <div class="card-body">
                    <div class="seo-preview">
                        <div class="seo-title text-primary mb-1"><?php echo e($page->title); ?></div>
                        <div class="seo-url text-success small mb-1"><?php echo e(route('pages.public', $page)); ?></div>
                        <div class="seo-description text-muted small"><?php echo e($page->meta_description); ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="card mt-3">
            <div class="card-header">
                <h6 class="mb-0">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('pages.edit', $page)); ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit me-1"></i>Edit Page
                    </a>
                    
                    <?php if($page->is_published): ?>
                        <a href="<?php echo e(route('pages.public', $page)); ?>" class="btn btn-success btn-sm" target="_blank">
                            <i class="fas fa-external-link-alt me-1"></i>View Public Page
                        </a>
                    <?php endif; ?>
                    
                    <a href="<?php echo e(route('pages.create')); ?>" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-plus me-1"></i>Create New Page
                    </a>
                    
                    <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-list me-1"></i>All Pages
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
.content-preview {
    line-height: 1.6;
}

.content-preview h1, .content-preview h2, .content-preview h3, 
.content-preview h4, .content-preview h5, .content-preview h6 {
    margin-top: 1.5rem;
    margin-bottom: 1rem;
}

.content-preview h1:first-child, .content-preview h2:first-child, 
.content-preview h3:first-child, .content-preview h4:first-child, 
.content-preview h5:first-child, .content-preview h6:first-child {
    margin-top: 0;
}

.content-preview img {
    max-width: 100%;
    height: auto;
    border-radius: 0.375rem;
    margin: 1rem 0;
}

.content-preview blockquote {
    border-left: 4px solid #dee2e6;
    padding-left: 1rem;
    margin: 1rem 0;
    font-style: italic;
    color: #6c757d;
}

.content-preview pre {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 0.375rem;
    overflow-x: auto;
}

.content-preview code {
    background: #f8f9fa;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-size: 0.875em;
}

.content-preview pre code {
    background: none;
    padding: 0;
}

.seo-preview {
    font-family: arial, sans-serif;
}

.seo-title {
    font-size: 1.125rem;
    text-decoration: underline;
    cursor: pointer;
}

.seo-title:hover {
    text-decoration: none;
}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/dynamicpage/show.blade.php ENDPATH**/ ?>