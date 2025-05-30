<?php $__env->startSection('title', isset($page) ? 'Edit Page' : 'Create Page'); ?>

<?php $__env->startPush('styles'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet">
<style>
    .ql-editor {
        min-height: 300px;
    }
    .slug-preview {
        font-family: 'Courier New', monospace;
        background: #f8f9fa;
        padding: 0.5rem;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>
                <i class="fas fa-<?php echo e(isset($page) ? 'edit' : 'plus'); ?> me-2"></i>
                <?php echo e(isset($page) ? 'Edit Page' : 'Create New Page'); ?>

            </h1>
            <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i>Back to Pages
            </a>
        </div>

        <form action="<?php echo e(isset($page) ? route('pages.update', $page) : route('pages.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(isset($page)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Page Details</h5>
                </div>
                <div class="card-body">
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" 
                               class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                               id="title" 
                               name="title" 
                               value="<?php echo e(old('title', $page->title ?? '')); ?>"
                               required>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">
                            URL Slug 
                            <small class="text-muted">(leave empty to auto-generate)</small>
                        </label>
                        <input type="text" 
                               class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                               id="slug" 
                               name="slug" 
                               value="<?php echo e(old('slug', $page->slug ?? '')); ?>">
                        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-text">
                            <strong>Preview URL:</strong> 
                            <span class="slug-preview" id="slug-preview">
                                <?php echo e(url('/page/')); ?>/<?php echo e(old('slug', $page->slug ?? 'your-page-slug')); ?>

                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="mb-3">
                        <label for="content" class="form-label">Content *</label>
                        <div id="editor-container">
                            <div id="editor"><?php echo old('content', $page->content ?? ''); ?></div>
                        </div>
                        <textarea name="content" id="content" style="display: none;"><?php echo e(old('content', $page->content ?? '')); ?></textarea>
                        <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>

            <!-- SEO Section -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">SEO Settings</h5>
                </div>
                <div class="card-body">
                    <!-- Meta Description -->
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control <?php $__errorArgs = ['meta_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                  id="meta_description" 
                                  name="meta_description" 
                                  rows="3" 
                                  maxlength="500"><?php echo e(old('meta_description', $page->meta_description ?? '')); ?></textarea>
                        <?php $__errorArgs = ['meta_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-text">
                            <span id="meta-desc-count">0</span>/500 characters
                        </div>
                    </div>

                    <!-- Meta Keywords -->
                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <input type="text" 
                               class="form-control <?php $__errorArgs = ['meta_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                               id="meta_keywords" 
                               name="meta_keywords" 
                               value="<?php echo e(old('meta_keywords', $page->meta_keywords ?? '')); ?>"
                               placeholder="keyword1, keyword2, keyword3">
                        <?php $__errorArgs = ['meta_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-text">Separate keywords with commas</div>
                    </div>
                </div>
            </div>

            <!-- Publishing -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Publishing</h5>
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" 
                               type="checkbox" 
                               id="is_published" 
                               name="is_published" 
                               value="1"
                               <?php echo e(old('is_published', $page->is_published ?? false) ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="is_published">
                            <strong>Publish this page</strong>
                            <div class="form-text">Make this page visible to the public</div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-outline-secondary">
                    <i class="fas fa-times me-1"></i>Cancel
                </a>
                <div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i>
                        <?php echo e(isset($page) ? 'Update Page' : 'Create Page'); ?>

                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Page Status</h6>
            </div>
            <div class="card-body">
                <?php if(isset($page)): ?>
                    <div class="mb-3">
                        <strong>Status:</strong>
                        <?php if($page->is_published): ?>
                            <span class="badge bg-success ms-1">Published</span>
                        <?php else: ?>
                            <span class="badge bg-warning ms-1">Draft</span>
                        <?php endif; ?>
                    </div>
                    
                    <?php if($page->published_at): ?>
                        <div class="mb-3">
                            <strong>Published:</strong><br>
                            <small class="text-muted"><?php echo e($page->published_at->format('M d, Y g:i A')); ?></small>
                        </div>
                    <?php endif; ?>
                    
                    <div class="mb-3">
                        <strong>Created:</strong><br>
                        <small class="text-muted"><?php echo e($page->created_at->format('M d, Y g:i A')); ?></small>
                    </div>
                    
                    <div class="mb-3">
                        <strong>Last Updated:</strong><br>
                        <small class="text-muted"><?php echo e($page->updated_at->format('M d, Y g:i A')); ?></small>
                    </div>

                    <?php if($page->is_published): ?>
                        <a href="<?php echo e(route('pages.public', $page)); ?>" class="btn btn-outline-success btn-sm" target="_blank">
                            <i class="fas fa-external-link-alt me-1"></i>View Public Page
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="text-muted mb-0">Fill out the form to create a new page.</p>
                <?php endif; ?>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h6 class="mb-0">Tips</h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fas fa-lightbulb text-warning me-2"></i>
                        Use descriptive titles for better SEO
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-link text-info me-2"></i>
                        URL slugs are auto-generated from titles
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-search text-success me-2"></i>
                        Meta descriptions help with search rankings
                    </li>
                    <li>
                        <i class="fas fa-eye text-primary me-2"></i>
                        Save as draft first, then publish when ready
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'font': [] }],
                [{ 'align': [] }],
                ['blockquote', 'code-block'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'indent': '-1'}, { 'indent': '+1' }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    });

    // Sync Quill content with hidden textarea
    var contentTextarea = document.getElementById('content');
    quill.on('text-change', function() {
        contentTextarea.value = quill.root.innerHTML;
    });

    // Set initial content
    if (contentTextarea.value) {
        quill.root.innerHTML = contentTextarea.value;
    }

    // Auto-generate slug from title
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const slugPreview = document.getElementById('slug-preview');
    const baseUrl = '<?php echo e(url("/page/")); ?>/';

    function generateSlug(text) {
        return text
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '')
            .replace(/[\s_-]+/g, '-')
            .replace(/^-+|-+$/g, '');
    }

    function updateSlugPreview() {
        const slug = slugInput.value || generateSlug(titleInput.value) || 'your-page-slug';
        slugPreview.textContent = baseUrl + slug;
    }

    titleInput.addEventListener('input', function() {
        if (!slugInput.value) {
            updateSlugPreview();
        }
    });

    slugInput.addEventListener('input', updateSlugPreview);

    // Meta description character counter
    const metaDescTextarea = document.getElementById('meta_description');
    const metaDescCount = document.getElementById('meta-desc-count');

    function updateMetaDescCount() {
        const count = metaDescTextarea.value.length;
        metaDescCount.textContent = count;
        metaDescCount.className = count > 450 ? 'text-warning' : count > 500 ? 'text-danger' : '';
    }

    metaDescTextarea.addEventListener('input', updateMetaDescCount);
    updateMetaDescCount(); // Initial count

    // Form submission validation
    document.querySelector('form').addEventListener('submit', function(e) {
        // Ensure Quill content is synced
        contentTextarea.value = quill.root.innerHTML;
        
        // Basic validation
        if (!titleInput.value.trim()) {
            e.preventDefault();
            titleInput.focus();
            alert('Please enter a page title.');
            return;
        }

        if (!quill.getText().trim()) {
            e.preventDefault();
            quill.focus();
            alert('Please add some content to the page.');
            return;
        }
    });

    // Initialize preview
    updateSlugPreview();
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/dynamicpage/create.blade.php ENDPATH**/ ?>