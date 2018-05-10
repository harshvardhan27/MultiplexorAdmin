<?php $__env->startSection('title', 'Account'); ?>

<?php $__env->startSection('content'); ?>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Welcome to MAJ</h3>
            <p></p>
            <form class="m-t" role="form" autocomplete="off" method="post" action="<?php echo e(route('login')); ?>">
                <div class="row">
                    <div class="form-group">
                        <input type="email" id="txtEmail" name="email" placeholder="Email" value=""
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" id="txtPassword" name="password" placeholder="Password" value=""
                               class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary block full-width m-b" value="Login" name="login">
                    <a href="#">
                        <small>Forgot password?</small>
                    </a>
                    <p class="text-muted text-center">
                        <small>Do not have an account?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="<?php echo e(route('register')); ?>">Create an account</a>
                </div>
                <?php echo e(csrf_field()); ?>

            </form>
            <p class="m-t">
                <small>MAJ &copy; <?php echo date( "Y" ); ?></small>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.account', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>