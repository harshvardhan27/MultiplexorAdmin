<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('username'); ?>
    <?php echo e($username); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Lend-It</h2>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="">Dashboard</a>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox-content m-b-sm border-bottom">
            <div class="p-xs">
                <div class="pull-left m-r-md">
                    <i class="fa fa-globe text-navy mid-icon"></i>
                </div>
                <h2>Welcome to Lend-IT</h2>
                <span>Lend-It is a lending platform for the future. We connect lenders with borrowers without the layers of traditional lending channels such as banks and other financial institutions that constrain their way of banking and therefore, have not evolved since the 1800s. Lend-It is a powerful tool that breaks from tradition while maintaining security, privacy and optimal performance.</span>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>