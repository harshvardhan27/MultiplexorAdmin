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
                        <h5>Know Your Customer Table</h5>
                        <div class="ibox-tools">
                        <span id="createRecord" title="Click here to create new Collateral">
                            <a href="<?php echo e(route('kyc.create')); ?>" class="text-primary">Create New</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dtKyc">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Verified</th>
                                    <th>Locked</th>
                                    <th>Credit Score</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $kycDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td width="20%"><?php echo e($kd->firstname." ".$kd->lastname); ?></td>
                                        <td width="20%"><?php echo e($kd->email); ?></td>
                                        <td width="10%"><?php echo e($kd->user_profile_verified); ?></td>
                                        <td width="10%"><?php echo e($kd->user_profile_locked); ?></td>
                                        <td width="20%"><?php echo e($kd->credit_score == "" ? "Not avaliable" : $kd->credit_score); ?></td>
                                        <td width="20%"><a
                                                    href="<?php echo e(route('kyc.edit',['id' => $kd->user_id])); ?>"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</a>&nbsp;<strong>|</strong>&nbsp;<a
                                                    href="<?php echo e(route('kyc.delete',['id' => $kd->user_id])); ?>"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Verified</th>
                                    <th>Locked</th>
                                    <th>Credit Score</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtKyc').DataTable({
                //"ajax": ,
                "pageLength": 5,
                "responsive": true,
                "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
                "dom": '<"html5buttons"B>lTfgitp',
                "buttons": [
                    {extend: 'copy'},
                    {extend: 'csv', title: 'Status_File'},
                    {extend: 'excel', title: 'Status_File'},
                    {extend: 'pdf', title: 'Status_File'},
                    {
                        extend: 'print',
                        customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ],
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>