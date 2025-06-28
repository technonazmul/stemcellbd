<?php
$general_info = App\Models\GeneralInfo::findOrFail(1);
?>

<?php $__env->startSection("content"); ?>
<!-- ==========Page Header Section Start Here========== -->
            <div
            class="pageheader bg-img"
            style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>)"
        >
            <div class="container">
                <div class="pageheader__content">
                    <h2><?php echo e($page->title); ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('index')); ?>">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                <?php echo e($page->title); ?>

                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
 
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <article class="page-content">
                <?php echo $page->content; ?>

            </article>

            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/dynamicpage.blade.php ENDPATH**/ ?>