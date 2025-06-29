<?php $__env->startSection("extra_css"); ?>
<style>
    .star {
    font-size: 30px;
    cursor: pointer;
    color: gray;
}

.star.active {
    color: gold;
}
input::-webkit-inner-spin-button,
input::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Loading spinner */
.spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 3px solid rgba(255,255,255,.3);
    border-radius: 50%;
    border-top-color: #fff;
    animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Toast notification styles */
.toast-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
}

.toast {
    min-width: 300px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.toast.success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.toast.error {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(assets/images/bg/04.jpg);">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo e($item->name); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($item->name); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->

    <!-- Toast Container for notifications -->
    <div class="toast-container" id="toast-container"></div>

    <!-- ==========Shop Details Section Start Here========== -->
    <div class="shop shop--single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4 g-lg-0 bg-lg-white">
                    <div class="col-lg-6 col-12">
                        <div class="singlethumb">
                            <div class="d-flex flex-wrap flex-sm-nowrap align-items-start flex-row-reverse">
                                <div class="singlethumb__left nav flex-sm-column nav-pills ms-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    
                                    <?php
                                        $images = explode(',',$item->images);
                                        $count =1;
                                        
                                    ?>
                                    <?php if(!is_null($images)): ?>
                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="nav-link <?php if($count == 1): ?> active <?php endif; ?>" id="thumbTwo-tab" data-bs-toggle="pill" data-bs-target="#thumb<?php echo e($count); ?>" role="tab" aria-controls="thumbTwo" aria-selected="false">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('storage/public/products/'.$image)); ?>" alt="rajibraj">
                                        </div>
                                    </div>
                                    <?php
                                        $count++;
                                    ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="singlethumb__right tab-content" id="v-pills-tabContent">
                                    <?php
                                        $count =1; 
                                    ?>
                                    <?php if(!is_null($images)): ?>
                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($count == 1): ?> show active <?php endif; ?>" id="thumb<?php echo e($count); ?>" role="tabpanel" aria-labelledby="thumbOne-tab">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('storage/public/products/'.$image)); ?>" alt="rajibraj" style="object-fit: contain;">
                                        </div>
                                    </div>
                                    <?php
                                        $count++;
                                    ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="singlecontent">
                            <h5><?php echo e($item->name); ?></h5>
                            <h6>
                                <span>Price:</span> <?php echo e($item->offer_price); ?> <del><?php echo e($item->price); ?></del> 
                            </h6>
                           <?php
                                $totalReviews = $item->reviews()->where('status', 1)->count();
                                $averageRating = round($item->reviews()->where('status', 1)->avg('rating'));
                            ?>

                            <div class="rating">
                                <p>Rating:</p>
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span>
                                        <i class="<?php echo e($i <= $averageRating ? 'fa-solid' : 'fa-regular'); ?> fa-star"></i>
                                    </span>
                                <?php endfor; ?>
                                <a href="#review">(<?php echo e($totalReviews); ?> customer review<?php echo e($totalReviews > 1 ? 's' : ''); ?>)</a>
                            </div>
                            <?php echo $item->description; ?>

                            
                            <div class="countadd">
                                <form id="add-to-cart-form" style="display: flex; align-items: center; gap: 10px;">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?php echo e($item->id); ?>">

                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input 
                                            class="cart-plus-minus-box" 
                                            type="number" 
                                            name="quantity" 
                                            value="1" 
                                            min="1" max="100" 
                                            id="quantity-input"
                                        >
                                        <div class="inc qtybutton">+</div>
                                    </div>

                                    <button type="submit" class="btn lab-btn2" id="add-to-cart-btn">
                                        <span class="btn-text">add to cart</span>
                                        <span class="spinner" style="display: none;"></span>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Shop Details Section Ends Here========== -->

    <!-- ==========Review Section Start Here========== -->
    <div class="review padding-tb" id="review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="review__area">
                    <?php
                        use App\Models\ProductReview;
                        $reviews = ProductReview::where('product_id', $item->id)->where('status', 1)->latest()->get();
                        $total_reviews = $reviews->count();
                    ?>

                    <ul class="review__nav">
                        <li class="desc" data-target="description-show">Description</li>
                        <li class="rev active" data-target="review-content-show">Reviews <?php echo e($total_reviews); ?></li>
                    </ul>

                    <div class="review__content review-content-show">
                        <div class="review__showing" id="reviews">
                            <ul>
                                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="thumb">
                                            <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#"><?php echo e($review->name); ?></a>
                                                    <p>Posted on <?php echo e($review->created_at->setTimezone('Asia/Dhaka')->format('M d, Y \a\t h:i a')); ?></p>

                                                </div>
                                                <div class="rating">
                                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                                        <i class="fa<?php echo e($i <= $review->rating ? 's' : 'r'); ?> fa-star"></i>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                            <p><?php echo e($review->message); ?></p>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            <div class="review__form">
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <div class="review__title">
                                    <h6>Add a Review</h6>
                                </div>
                                <form action="<?php echo e(route('product.review.save')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?php echo e($item->id); ?>">
                                    <div class="row g-4">
                                        <div class="col-lg-4 col-12">
                                            <input type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <input type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div id="rating-stars">
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <span class="star" data-value="<?php echo e($i); ?>">&#9733;</span>
                                                <?php endfor; ?>
                                            </div>
                                            <input type="hidden" name="rating" id="rating-value" value="0">
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <textarea rows="8" name="message" placeholder="Type your message here" required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="lab-btn" type="submit">
                                                Submit Review <i class="icofont-hand-drawn-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="description">
                            <?php echo $item->description; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- ==========Review Section Ends Here========== -->

    
    <!-- ==========Shop Section Start Here========== -->
    <div class="shop padding-tb">
    <div class="container">
        <div class="section__header text-center">
            <h2>Related Products</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="section__wrapper">
            <div class="row justify-content-center">
                <div class="col-12">
                    <article>
                        <div class="shop__product row justify-content-center grids g-4">
                            <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                    $image_to_array = explode(',', $item->images);

                                ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <a href="<?php echo e(route('shop_single', $product->slug)); ?>">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="<?php echo e(asset('storage/public/products/'.$image_to_array[0])); ?>" alt="<?php echo e($product->title); ?>">
                                            
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="<?php echo e(route('shop_single', $product->slug)); ?>"><?php echo e($product->name); ?></a></h6>
                                            <p class="price"><span>Price:</span> $<?php echo e(number_format($product->price, 2)); ?></p>
                                            <div class="rating">
                                                <?php
                                                    $rating = round($product->reviews()->where('status', 1)->avg('rating'));
                                                ?>
                                                <p>Rating:</p>
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <span>
                                                        <i class="<?php echo e($i <= $rating ? 'fa-solid' : 'fa-regular'); ?> fa-star"></i>
                                                    </span>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- ==========Shop Section Ends Here========== -->
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Review Added Successfully.</p>
            </div>
           
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_script'); ?>
<?php if(Session::has('success')): ?>
<script>
    $(document).ready(function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
        myModal.toggle();
    });
</script>
<?php endif; ?>
<script>
    $(document).ready(function() {
       
    $('.star').click(function() {
        var index = $(this).index() + 1;
        $('.star').removeClass('active');
        $(this).prevAll().addBack().addClass('active');
        $('#rating-value').val(index);
    });
});
</script>
<script>
$(document).ready(function() {
    // Remove any existing event handlers to prevent duplicates
    $(".qtybutton").off('click');
    
    // Add the click event handler
    $(".qtybutton").on('click', function(e) {
        e.preventDefault(); // Prevent any default behavior
        e.stopPropagation(); // Stop event bubbling
        
        var $button = $(this);
        var $input = $button.siblings("input.cart-plus-minus-box");
        var oldValue = parseInt($input.val()) || 1; // Default to 1 if NaN
        var newVal;

        if ($button.hasClass("inc")) {
            newVal = oldValue + 1;
        } else {
            newVal = oldValue > 1 ? oldValue - 1 : 1;
        }
        
        $input.val(newVal);
    });
});
</script>

<script>
$(document).ready(function() {
    // AJAX Add to Cart functionality
    $('#add-to-cart-form').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $btn = $('#add-to-cart-btn');
        var $btnText = $btn.find('.btn-text');
        var $spinner = $btn.find('.spinner');
        
        // Get form data
        var formData = {
            product_id: $form.find('input[name="product_id"]').val(),
            quantity: $form.find('input[name="quantity"]').val(),
            _token: $form.find('input[name="_token"]').val()
        };
        
        // Disable button and show loading
        $btn.prop('disabled', true);
        $btnText.hide();
        $spinner.show();
        
        // Make AJAX request
        $.ajax({
            url: '<?php echo e(route("cart.add")); ?>',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    showToast('success', response.message || 'Product added to cart successfully!');
                    
                    // Update cart count if you have a cart counter in your layout
                    if (response.cart_count) {
                        updateCartCount(response.cart_count);
                    }
                    
                    // Reset quantity to 1
                    $('#quantity-input').val(1);
                } else {
                    showToast('error', response.message || 'Failed to add product to cart');
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = 'An error occurred while adding product to cart';
                
                // Try to get error message from response
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                } else if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMessage = xhr.responseJSON.error;
                }
                
                showToast('error', errorMessage);
                console.error('Ajax Error:', error);
            },
            complete: function() {
                // Re-enable button and hide loading
                $btn.prop('disabled', false);
                $btnText.show();
                $spinner.hide();
            }
        });
    });
    
    // Function to show toast notifications
    function showToast(type, message) {
        var toastId = 'toast-' + Date.now();
        var toastHtml = `
            <div class="toast ${type}" id="${toastId}" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>${message}</span>
                        <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        `;
        
        $('#toast-container').append(toastHtml);
        
        var toastElement = document.getElementById(toastId);
        var toast = new bootstrap.Toast(toastElement, {
            autohide: true,
            delay: 5000
        });
        
        toast.show();
        
        // Remove toast element after it's hidden
        toastElement.addEventListener('hidden.bs.toast', function() {
            $(this).remove();
        });
    }
    
    // Function to update cart count (if you have a cart counter in your layout)
    function updateCartCount(count) {
        // Update cart count badge/indicator
        $('.cart-count, .cart-counter, #cart-count').text(count);
        
        // Add animation to cart icon if exists
        $('.cart-icon').addClass('animate__animated animate__pulse');
        setTimeout(function() {
            $('.cart-icon').removeClass('animate__animated animate__pulse');
        }, 1000);
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/shop_single.blade.php ENDPATH**/ ?>