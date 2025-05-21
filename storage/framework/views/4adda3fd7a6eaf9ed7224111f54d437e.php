<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <?php echo $__env->make('backend.inc.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent("extra_css"); ?>
  <style>
    nav svg {
      width: 10px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
    </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php echo $__env->make('backend.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


       <?php echo $__env->yieldContent('content'); ?>
       


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright ©  Advancell Health</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php echo $__env->make('backend.inc.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('extra_script'); ?>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>