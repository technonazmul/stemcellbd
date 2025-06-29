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
    .image-upload-area {
        border: 2px dashed #dee2e6;
        border-radius: 0.375rem;
        padding: 2rem;
        text-align: center;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .image-upload-area:hover {
        border-color: #0d6efd;
        background-color: #e7f1ff;
    }
    .image-upload-area.dragover {
        border-color: #0d6efd;
        background-color: #e7f1ff;
        transform: scale(1.02);
    }
    .featured-image-preview {
        max-width: 100%;
        max-height: 200px;
        border-radius: 0.375rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
    .image-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    .gallery-item {
        position: relative;
        border-radius: 0.375rem;
        overflow: hidden;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
    }
    .gallery-item img {
        width: 100%;
        height: 100px;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    .gallery-item img:hover {
        transform: scale(1.05);
    }
    .gallery-item .remove-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(220, 53, 69, 0.8);
        color: white;
        border: none;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        font-size: 12px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .gallery-item .insert-btn {
        position: absolute;
        bottom: 5px;
        left: 5px;
        background: rgba(13, 110, 253, 0.8);
        color: white;
        border: none;
        border-radius: 3px;
        padding: 2px 6px;
        font-size: 10px;
        cursor: pointer;
    }
    .upload-progress {
        display: none;
        margin-top: 1rem;
    }
    .upload-progress .progress {
        height: 4px;
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

        <form action="<?php echo e(isset($page) ? route('pages.update', $page) : route('pages.store')); ?>" method="POST" enctype="multipart/form-data">
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

                    <!-- Featured Image -->
                    <div class="mb-3">
                        <label for="featured_image" class="form-label">Featured Image</label>
                        <div class="image-upload-area" id="featured-upload-area">
                            <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                            <p class="mb-2">Click to upload or drag and drop your featured image</p>
                            <small class="text-muted">Supports: JPG, PNG, GIF, WebP (Max: 5MB)</small>
                        </div>
                        <input type="file" 
                               class="form-control d-none <?php $__errorArgs = ['featured_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                               id="featured_image" 
                               name="featured_image" 
                               accept="image/*">
                        <?php $__errorArgs = ['featured_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <?php if(isset($page) && $page->featured_image): ?>
                            <div class="mt-3" id="current-featured-image">
                                <label class="form-label">Current Featured Image:</label>
                                <div class="d-flex align-items-start gap-3">
                                    <img src="<?php echo e(Storage::url($page->featured_image)); ?>" 
                                         alt="Current featured image" 
                                         class="featured-image-preview">
                                    <button type="button" class="btn btn-sm btn-outline-danger" id="remove-featured-btn">
                                        <i class="fas fa-trash me-1"></i>Remove
                                    </button>
                                </div>
                                <input type="hidden" name="remove_featured_image" id="remove_featured_input" value="0">
                            </div>
                        <?php endif; ?>
                        
                        <div id="featured-preview" class="mt-3" style="display: none;">
                            <label class="form-label">Preview:</label>
                            <div class="d-flex align-items-start gap-3">
                                <img id="featured-preview-img" class="featured-image-preview">
                                <button type="button" class="btn btn-sm btn-outline-danger" id="remove-featured-preview">
                                    <i class="fas fa-times me-1"></i>Remove
                                </button>
                            </div>
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

                    <!-- Gallery Images -->
                    <div class="mb-3">
                        <label class="form-label">Gallery Images</label>
                        <div class="image-upload-area" id="gallery-upload-area">
                            <i class="fas fa-images fa-2x text-muted mb-2"></i>
                            <p class="mb-2">Click to upload or drag and drop multiple images</p>
                            <small class="text-muted">You can select multiple images at once</small>
                        </div>
                        <input type="file" 
                               class="form-control d-none" 
                               id="gallery_images" 
                               name="gallery_images[]" 
                               accept="image/*" 
                               multiple>
                        
                        <div class="upload-progress" id="upload-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                            </div>
                            <small class="text-muted">Uploading images...</small>
                        </div>
                        
                        <div id="gallery-preview" class="image-gallery"></div>
                        
                        <?php if(isset($page) && $page->gallery_images): ?>
                            <div class="mt-3">
                                <label class="form-label">Current Gallery:</label>
                                <div class="image-gallery" id="existing-gallery">
                                    <?php $__currentLoopData = json_decode($page->gallery_images, true) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="gallery-item" data-image="<?php echo e($image); ?>">
                                            <img src="<?php echo e(Storage::url($image)); ?>" alt="Gallery image">
                                            <button type="button" class="remove-btn" onclick="removeExistingImage(this, '<?php echo e($image); ?>')">
                                                <i class="fas fa-times"></i>
                                            </button>
                                            <button type="button" class="insert-btn" onclick="insertImageToEditor('<?php echo e(Storage::url($image)); ?>')">
                                                Insert
                                            </button>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endif; ?>
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

            <!-- Hidden inputs for removed images -->
            <input type="hidden" name="removed_gallery_images" id="removed_gallery_images" value="">

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
                <h6 class="mb-0">Image Tips</h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fas fa-image text-primary me-2"></i>
                        Featured images appear at the top of your page
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-images text-info me-2"></i>
                        Gallery images can be inserted into content
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-compress-alt text-warning me-2"></i>
                        Images are automatically optimized
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt text-success me-2"></i>
                        All images are responsive
                    </li>
                </ul>
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
    let quill;
    let removedGalleryImages = [];
    let uploadedGalleryImages = [];

    // Initialize Quill editor
    quill = new Quill('#editor', {
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

    // Featured Image Upload
    const featuredUploadArea = document.getElementById('featured-upload-area');
    const featuredInput = document.getElementById('featured_image');
    const featuredPreview = document.getElementById('featured-preview');
    const featuredPreviewImg = document.getElementById('featured-preview-img');

    featuredUploadArea.addEventListener('click', () => featuredInput.click());
    
    featuredUploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        featuredUploadArea.classList.add('dragover');
    });

    featuredUploadArea.addEventListener('dragleave', () => {
        featuredUploadArea.classList.remove('dragover');
    });

    featuredUploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        featuredUploadArea.classList.remove('dragover');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            featuredInput.files = files;
            handleFeaturedImagePreview(files[0]);
        }
    });

    featuredInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            handleFeaturedImagePreview(e.target.files[0]);
        }
    });

    function handleFeaturedImagePreview(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                featuredPreviewImg.src = e.target.result;
                featuredPreview.style.display = 'block';
                
                // Hide current image if editing
                const currentImage = document.getElementById('current-featured-image');
                if (currentImage) {
                    currentImage.style.display = 'none';
                }
            };
            reader.readAsDataURL(file);
        }
    }

    // Remove featured image preview
    document.getElementById('remove-featured-preview')?.addEventListener('click', () => {
        featuredInput.value = '';
        featuredPreview.style.display = 'none';
        
        // Show current image if editing
        const currentImage = document.getElementById('current-featured-image');
        if (currentImage) {
            currentImage.style.display = 'block';
        }
    });

    // Remove current featured image (for editing)
    document.getElementById('remove-featured-btn')?.addEventListener('click', () => {
        document.getElementById('remove_featured_input').value = '1';
        document.getElementById('current-featured-image').style.display = 'none';
    });

    // Gallery Images Upload
    const galleryUploadArea = document.getElementById('gallery-upload-area');
    const galleryInput = document.getElementById('gallery_images');
    const galleryPreview = document.getElementById('gallery-preview');

    galleryUploadArea.addEventListener('click', () => galleryInput.click());
    
    galleryUploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        galleryUploadArea.classList.add('dragover');
    });

    galleryUploadArea.addEventListener('dragleave', () => {
        galleryUploadArea.classList.remove('dragover');
    });

    galleryUploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        galleryUploadArea.classList.remove('dragover');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            handleGalleryImages(files);
        }
    });

    galleryInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            handleGalleryImages(e.target.files);
        }
    });

    function handleGalleryImages(files) {
        Array.from(files).forEach((file, index) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    addGalleryPreview(e.target.result, file.name, true);
                };
                reader.readAsDataURL(file);
                uploadedGalleryImages.push(file);
            }
        });
    }

    function addGalleryPreview(src, filename, isNew = false) {
        const galleryItem = document.createElement('div');
        galleryItem.className = 'gallery-item';
        galleryItem.innerHTML = `
            <img src="${src}" alt="${filename}">
            <button type="button" class="remove-btn" onclick="removeGalleryImage(this, ${isNew})">
                <i class="fas fa-times"></i>
            </button>
            <button type="button" class="insert-btn" onclick="insertImageToEditor('${src}')">
                Insert
            </button>
        `;
        galleryPreview.appendChild(galleryItem);
    }

    // Global functions for image management
    window.removeGalleryImage = function(button, isNew) {
        const galleryItem = button.closest('.gallery-item');
        if (isNew) {
            // Remove from uploaded array
            const index = Array.from(galleryPreview.children).indexOf(galleryItem);
            uploadedGalleryImages.splice(index, 1);
        }
        galleryItem.remove();
    };

    window.removeExistingImage = function(button, imagePath) {
        const galleryItem = button.closest('.gallery-item');
        removedGalleryImages.push(imagePath);
        document.getElementById('removed_gallery_images').value = JSON.stringify(removedGalleryImages);
        galleryItem.remove();
    };

    window.insertImageToEditor = function(imageSrc) {
        const range = quill.getSelection();
        const index = range ? range.index : quill.getLength();
        quill.insertEmbed(index, 'image', imageSrc);
        quill.setSelection(index + 1);
    };

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