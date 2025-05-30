<?php $__env->startSection('title', 'All Pages'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-file-alt me-2"></i>All Pages</h1>
    <a href="<?php echo e(route('pages.create')); ?>" class="btn btn-primary">
        <i class="fas fa-plus me-1"></i>Create New Page
    </a>
</div>

<?php if($pages->count() > 0): ?>
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
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <strong><?php echo e($page->title); ?></strong>
                                <?php if(!$page->is_published): ?>
                                    <span class="badge bg-secondary ms-2">Draft</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <code><?php echo e($page->slug); ?></code>
                            </td>
                            <td>
                                <?php if($page->is_published): ?>
                                    <span class="badge bg-success">
                                        <i class="fas fa-eye me-1"></i>Published
                                    </span>
                                <?php else: ?>
                                    <span class="badge bg-warning">
                                        <i class="fas fa-eye-slash me-1"></i>Draft
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e($page->formatted_published_at ?? 'Not published'); ?>

                            </td>
                            <td>
                                <?php echo e($page->created_at->format('M d, Y')); ?>

                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="<?php echo e(route('pages.show', $page)); ?>" class="btn btn-outline-info" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?php echo e(route('pages.edit', $page)); ?>" class="btn btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <?php if($page->is_published): ?>
                                        <a href="<?php echo e(route('pages.public', $page)); ?>" class="btn btn-outline-success" title="View Public" target="_blank">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    <?php endif; ?>
                                    <form action="<?php echo e(route('pages.destroy', $page)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this page?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <?php echo e($pages->links()); ?>

    </div>
<?php else: ?>
    <div class="text-center py-5">
        <i class="fas fa-file-alt text-muted" style="font-size: 4rem;"></i>
        <h3 class="mt-3 text-muted">No pages found</h3>
        <p class="text-muted">Get started by creating your first page.</p>
        <a href="<?php echo e(route('pages.create')); ?>" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>Create First Page
        </a>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/dynamicpage/index.blade.php ENDPATH**/ ?>