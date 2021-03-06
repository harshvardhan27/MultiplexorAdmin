<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lend-It | <?php echo $__env->yieldContent('title'); ?> </title>


    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/dataTables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/chosen/bootstrap-chosen.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/blueimp/css/blueimp-gallery.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'); ?>">


</head>
<body>
<!-- Wrapper-->
<div id="wrapper">
    <!-- Navigation -->
<?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">
        <!-- Page wrapper -->
    <?php echo $__env->make('layouts.topnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Main view  -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer -->
        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- End page wrapper-->
</div>
<!-- End wrapper-->

<script src="<?php echo asset('js/jquery-3.1.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/dataTables/datatables.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/chosen/chosen.jquery.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/blueimp/jquery.blueimp-gallery.min.js'); ?>" type="text/javascript"></script>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
