<?php $__env->startSection("content"); ?>

<!-- ==========Page Header Section Start Here========== -->
            <div
            class="pageheader bg-img"
            style="background-image: url(<?php echo e(asset('storage/public/visual_edits/' . $visualEditShopContent['header_background_image'] ?? '')); ?>)"
        >
            <div class="container">
               


                <div class="pageheader__content">
                     <form action="<?php echo e(route('admin.visual_edit.update')); ?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="section" value="shop_page">
                    <input type="hidden" name="key" value="header_background_image">

                    <div class="mb-3">
                        <label for="file" class="form-label fw-bold">Upload Background Image</label>
                        <input type="file" name="file" class="form-control" id="file" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-upload me-1"></i> Upload
                    </button>
                </form>
                   <div class="col-md-4 my-2 mx-auto text-center">
                    <form action="<?php echo e(route('admin.visual_edit.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="section" value="shop_page">
                        <input type="hidden" name="key" value="title">

                        <div class="">
                            
                            <div class="form-group mb-3">
                                <input type="text" name="input_value" class="form-control"
                                    
                                    value="<?php echo e($visualEditShopContent['title'] ?? ''); ?>">
                            </div>

                            

                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                   </div>
                    
                    <br>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                
                                <form action="<?php echo e(route('admin.visual_edit.update')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="section" value="shop_page">
                                            <input type="hidden" name="key" value="breadcrumb_first_item_text">

                                            <div class="">
                                                
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="<?php echo e($visualEditShopContent['breadcrumb_first_item_text'] ?? ''); ?>">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                        <br>
                                        <form action="<?php echo e(route('admin.visual_edit.update')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="section" value="shop_page">
                                            <input type="hidden" name="key" value="breadcrumb_first_item_link">

                                            <div class="">
                                                
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="<?php echo e($visualEditShopContent['breadcrumb_first_item_link'] ?? ''); ?>">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                <form action="<?php echo e(route('admin.visual_edit.update')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="section" value="shop_page">
                                            <input type="hidden" name="key" value="breadcrumb_second_item_text">

                                            <div class="">
                                                
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="<?php echo e($visualEditShopContent['breadcrumb_second_item_text'] ?? ''); ?>">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                        <br>
                                        <form action="<?php echo e(route('admin.visual_edit.update')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="section" value="shop_page">
                                            <input type="hidden" name="key" value="breadcrumb_second_item_link">

                                            <div class="">
                                                
                                                <div class="form-group mb-3">
                                                    <input type="text" name="input_value" class="form-control"
                                                       
                                                        value="<?php echo e($visualEditShopContent['breadcrumb_second_item_link'] ?? ''); ?>">
                                                </div>

                                                

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                            </li>
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
                                            <a href="<?php echo e(route('shop_single', $item->slug)); ?>">
                                            <img src="<?php echo e(asset('storage/public/products/'.$image_to_array[0])); ?>" alt="webcode">
                                            </a>
                                           
                                        </div>
                                        <a href="<?php echo e(route('shop_single', $item->slug)); ?>">
                                        <div class="shop__content">
                                            <h6><?php echo e($item->name); ?></h6>
                                            <p class="price"><span>Price:</span> ৳<?php echo e($item->offer_price); ?> <small style="font-size: 10px;"><del>৳<?php echo e($item->price); ?></del></small> </p>
                                            <div class="rating">
                                                <?php
                                                    $rating = round($item->reviews()->where('status', 1)->avg('rating'));
                                                ?>
                                                <p>Rating:</p>
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <span>
                                                        <i class="<?php echo e($i <= $rating ? 'fa-solid' : 'fa-regular'); ?> fa-star"></i>
                                                    </span>
                                                <?php endfor; ?>
                                            </div>
                                            
                                        </div>
                                        </a>
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
<?php echo $__env->make('backend.visualeditor.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/visualeditor/shop.blade.php ENDPATH**/ ?>