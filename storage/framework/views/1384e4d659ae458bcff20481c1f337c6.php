<?php $__env->startSection("content"); ?>
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>);">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Products</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ==========Shop Section Start Here========== -->
    <div class="shop padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <article>
                            <div class="shop__title d-flex flex-wrap justify-content-between bg-ash">
                                <p>Total <?php echo e($products->total()); ?> Results</p>
                                <div class="shop__mode">
                                    <a class="active" data-target="grids"><i class="fa-solid fa-table-cells-large"></i></a>
                                    <a data-target="lists" class=""><i class="fa-solid fa-list"></i></a>
                                </div>
                            </div>

                            <div class="shop__product row justify-content-center grids g-4">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $image_to_array = explode(',', $item->images);

                                ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="<?php echo e(asset('storage/products/'.$image_to_array[0])); ?>" alt="webcode">
                                            <div class="shop__link">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="<?php echo e(route('shop_single', $item->slug)); ?>"><?php echo e($item->name); ?></a></h6>
                                            <p class="price"><span>Price:</span> ৳<?php echo e($item->offer_price); ?> <small style="font-size: 10px;"><del>৳<?php echo e($item->price); ?></del></small> </p>
                                            
                                        </div>
                                    </div>
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="<?php echo e(asset('storage/products/'.$image_to_array[0])); ?>" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                            <div class="shop__content">
                                                <h6><a href="shop-single.html">product title text here</a></h6>
                                                <p class="price"><span>Price:</span> $100.99</p>
                                                
                                                <p><?php echo e($item->description); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                
                            </div>

                            <nav aria-label="Page navigation example">
                               
                                <ul class="pagination justify-content-center mt-5">
                                    <?php echo e($products->links('pagination::bootstrap-4')); ?>

                                </ul>
                            </nav>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Shop Section Ends Here========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/shop.blade.php ENDPATH**/ ?>