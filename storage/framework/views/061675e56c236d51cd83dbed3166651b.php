<?php $__env->startSection("extra_css"); ?>
<link rel="stylesheet" href="<?php echo e(asset("backend/vendor/drug-drop-image-upload/image-uploader.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset("backend/libs/css/tagify.css")); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h2 class="text-center">All Category</h2><hr>
    <div class="row">

       <?php $__currentLoopData = App\Models\ServiceCategory::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-md-2 text-center">
            <div class="card card-body" style="<?php if($service_category->id == $category->id): ?> background-color: green; <?php endif; ?>">
                <a class="btn btn-sm" href="<?php echo e(route('admin.show_service',$category->id)); ?>"><?php echo e($category->name); ?></a>
            </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<h2 class="text-center">Service In <?php echo e($service_category->name); ?></h2><hr>
    <div class="row">
    </div>
<div class="row">
    <div class="col-6"><h4></h4></div>
    <div class="col-6">
        <form class="form-inline float-right">
            <div class="form-group mx-sm-3 mb-2">
              <label for="search" class="sr-only">Search</label>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search here">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
          </form>
    </div>
</div>
<table class="table table-striped" id="dataTable">
    <thead>
      <tr>
        <th scope="col">Si.No</th>
        <th scope="col">Title</th>
        <th scope="col">Aout</th>
        <th scope="col">Thumbnail</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <?php
    $service=App\Models\Service::where('service_category_id',$service_category->id)->orderBy('created_at', 'desc')->get();
    $i=0;
    ?>
    <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $i++; ?>
    <tbody>
        <tr>
            <td scope="row"><?php echo e($i); ?></td>
            <td><?php echo e($service->title); ?></td>
            <td><?php echo Illuminate\Support\Str::limit(strip_tags($service->description),80); ?></td>
            <td><img src="<?php echo e(asset('storage/public/service/'.$service->thumbnail)); ?>" style="max-width: 90px; height:90px;" alt=""></td>
            <td>
                <a class="btn btn-sm btn-warning mb-1" href="<?php echo e(route('admin.edit_service',$service->id)); ?>">Edit</a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo e(route('admin.delete_service',$service->id)); ?>">Delete</a>
            </td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<script>
    function searchTable() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
    
        // Loop through all table rows, and hide those that don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/service/show_service.blade.php ENDPATH**/ ?>