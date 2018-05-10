<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Register with Lend-It</h2>
                <p>
                    Welcome to the Admin Registration of Lend-It. The future of Cryto Currency awaits you at your fingertips, one Blockchain at a time.
                </p>
                <p>
                    The Admin Dashboard offers the ability to manage the platform at its optimal level.
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="<?php echo e(route('register.post')); ?>" method="post"
                          autocomplete="off">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <input type="email" id="txtEmail" name="email" placeholder="Email"
                                   value="<?php echo e(old('email')); ?>"
                                   class="form-control" />
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('email')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <input type="password" id="txtPassword" name="password" placeholder="Password"
                                   class="form-control" />
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('password')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        <input type="submit" class="btn btn-primary block full-width m-b" value="Register"/>
                        <p class="text-muted text-center">
                            <small>Already have a account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="<?php echo e(route('login')); ?>">Login</a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Team AI
            </div>
            <div class="col-md-6 text-right">
                <small>© <?php echo date("Y"); ?></small>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.account', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>