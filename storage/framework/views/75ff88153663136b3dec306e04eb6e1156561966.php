<!DOCTYPE html>
<html>
<head>
    <title>Lend-It | Restricted Access</title>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/animate.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>"/>
</head>
<body class="gray-bg">
<div class="middle-box text-center animated fadeInDown">
    <h1>403</h1>
    <h3 class="font-bold">Restricted Access</h3>

    <div class="error-desc">
        Access to the resource is restricted. <br/>
        <form method="post" action="<?php echo e(route('logout')); ?>">
            <button type="submit" value="Back to Login" class="btn btn-primary m-t" id="btnBacktoLogin">Back to Login
            </button>
            <?php echo e(csrf_field()); ?>

        </form>
    </div>
</div>

<script src="<?php echo asset('js/jquery-3.1.1.min.js'); ?>" type="text/javascript"></script>

</body>
</html>
