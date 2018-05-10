<?php $__env->startSection('title', 'Collateral'); ?>

<?php $__env->startSection('username'); ?>
    <?php echo e($username); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Collateral</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Collateral</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Create Collateral</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to Collateral List">
                            <a href="<?php echo e(route('collateral')); ?>">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="<?php echo e(route('collateral.create.post')); ?>" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row<?php echo e($errors->has('collateral_type') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right" for="txtCollateralType">Collateral
                                            Type</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCollateralType" name="collateral_type"
                                                   placeholder="Collateral Type" class="form-control" value="<?php echo e(old('collateral_type')); ?>"/>
                                            <?php if($errors->has('collateral_type')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('collateral_type')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row<?php echo e($errors->has('collateral_amount') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right" for="txtCollateralAmount">Collateral Amount</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCollateralAmount" name="collateral_amount"
                                                   placeholder="Collateral Amount" class="form-control" value="<?php echo e(old('collateral_amount')); ?>"/>
                                            <?php if($errors->has('collateral_amount')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('collateral_amount')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-offset-4 col-md-8">
                                            <input type="submit" value="Create" name="create" class="btn btn-primary"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>