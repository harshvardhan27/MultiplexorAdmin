<?php $__env->startSection('title', 'KYC'); ?>

<?php $__env->startSection('username'); ?>
    <?php echo e($username); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Know Your Customer</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="active">
                    <strong>KYC</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Create KYC</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to KYC List">
                            <a href="<?php echo e(route('kyc')); ?>">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="<?php echo e(route('kyc.create.post')); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtFirstname">Firstname</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtFirstname" name="firstname"
                                                   placeholder="Firstname" class="form-control"
                                                   value="<?php echo e(old('firstname')); ?>"/>
                                            <?php if($errors->has('firstname')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('firstname')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtLastname">Lastname</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtLastname" name="lastname"
                                                   placeholder="Lastname" class="form-control"
                                                   value="<?php echo e(old('lastname')); ?>"/>
                                            <?php if($errors->has('lastname')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('lastname')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtAddress">Address</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtAddress" name="address"
                                                   placeholder="Address" class="form-control"
                                                   value="<?php echo e(old('address')); ?>"/>
                                            <?php if($errors->has('address')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('address')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtCity">City</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCity" name="city"
                                                   placeholder="City" class="form-control"
                                                   value="<?php echo e(old('city')); ?>"/>
                                            <?php if($errors->has('city')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('city')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtState">Province</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtState" name="state"
                                                   placeholder="State" class="form-control"
                                                   value="<?php echo e(old('state')); ?>"/>
                                            <?php if($errors->has('state')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('state')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('pin') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtPin">Postal Code</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtPin" name="pin"
                                                   placeholder="Pin" class="form-control"
                                                   value="<?php echo e(old('pin')); ?>"/>
                                            <?php if($errors->has('pin')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('pin')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row<?php echo e($errors->has('collateral_id') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="ddlCollateral">Collateral</label>
                                        <div class="col-md-8">
                                            <select class="chosen-select form-control" id="ddlCollateral"
                                                    name="collateral_id">
                                                <?php $__currentLoopData = $collaterals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($c->collateral_id); ?>"><?php echo e($c->collateral_type); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('collateral_id')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('collateral_id')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('ethereum_address') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtEthereumAddress">Ethereum Address</label>
                                        <div class="col-md-8">
                                            <textarea id="txtEthereumAddress" name="ethereum_address"
                                                      placeholder="Ethereum Address" rows="2"
                                                      cols="5" class="form-control"><?php echo e(old('ethereum_address')); ?>

                                            </textarea>
                                            <?php if($errors->has('ethereum_address')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('ethereum_address')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('credit_score') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtCreditScore">Credit Score</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCreditScore" name="credit_score"
                                                   placeholder="Credit Score" class="form-control"
                                                   value="<?php echo e(old('credit_score')); ?>"/>
                                            <?php if($errors->has('credit_score')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('credit_score')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('kyc_docs_img1') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="fileKycImage1">Document 1</label>
                                        <div class="col-md-8">
                                            <input type="file" name="kyc_docs_img1" class="form-control" id="fileKycImage1">
                                            <?php if($errors->has('kyc_docs_img1')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('kyc_docs_img1')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row<?php echo e($errors->has('kyc_docs_img2') ? ' has-error' : ''); ?>">
                                        <label class="control-label col-md-4 text-right"
                                               for="fileKycImage2">Document 2</label>
                                        <div class="col-md-8">
                                            <input type="file" name="kyc_docs_img2" class="form-control" id="fileKycImage2">
                                            <?php if($errors->has('kyc_docs_img2')): ?>
                                                <span class="help-block">
                                                <?php echo e($errors->first('kyc_docs_img2')); ?>

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
    <script type="text/javascript">
        $(document).ready(function () {
            $('.chosen-select').chosen({
                width: "100%",
                allow_single_deselect: true
            });
        });
    </script>e
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>