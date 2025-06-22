<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset("backend/libs/css/tagify.css")); ?>">
<style>
    .sortable-card {
        cursor: move;
        margin-bottom: 10px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-center">All Category</h2>
    <hr>

    <div id="sortableCategories" class="row">
        <?php $__currentLoopData = $service_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-2 text-center sortable-card" data-id="<?php echo e($category->id); ?>">
            <div class="card card-body">
                <a class="btn btn-sm" href="<?php echo e(route('admin.show_service', $category->id)); ?>"><?php echo e($category->name); ?></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-success" id="saveOrderBtn">💾 Save Order</button>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    const el = document.getElementById('sortableCategories');
    const sortable = new Sortable(el, {
        animation: 150
    });

    document.getElementById('saveOrderBtn').addEventListener('click', function () {
        const orderedIds = [];
        document.querySelectorAll('.sortable-card').forEach((el, index) => {
            orderedIds.push(el.getAttribute('data-id'));
        });

        fetch("<?php echo e(route('admin.update_category_order')); ?>", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
            },
            body: JSON.stringify({
                ordered_ids: orderedIds
            })
        }).then(res => res.json())
          .then(data => {
              alert(data.message || 'Order updated successfully!');
          });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/all_service.blade.php ENDPATH**/ ?>