<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to Lend-It, <strong><?php echo $__env->yieldContent('username'); ?></strong>.</span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> <span class="label label-primary"><?php echo e(count($notifications)); ?></span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($n->notification_type == 'Collateral'): ?>
                            <li>
                                <a href="<?php echo e(route('collateral.edit',['id' => $n->collateral_id])); ?>">
                                    <div>
                                        <i class="fa fa-address-card fa-fw"></i> <?php echo e($n->email); ?>

                                        <span class="pull-right text-muted small">Collateral</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        <?php endif; ?>
                        <?php if($n->notification_type == 'Profile'): ?>
                            <li>
                                <a href="<?php echo e(route('kyc.edit',['id' => $n->user_id])); ?>">
                                    <div>
                                        <i class="fa fa-users fa-fw"></i> <?php echo e($n->email); ?>

                                        <span class="pull-right text-muted small">Profile</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li>
                <form method="post" action="<?php echo e(route('logout')); ?>">
                    <button type="submit" value="Logout" class="btn btn-danger" id="btnLogout" style="margin-top: 0px;">
                        <i class="fa fa-sign-out"></i> Logout
                    </button>
                    <?php echo e(csrf_field()); ?>

                </form>
            </li>
        </ul>

    </nav>
</div>
