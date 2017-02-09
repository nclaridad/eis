<?php $__env->startSection('content'); ?>
<div id="content-header">
    <h1>Employees</h1>
</div>
<div id="breadcrumb">
    <a href="javascript:void(0)" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12 center" style="text-align: center;">                 
            <ul class="quick-actions">
                <li>
                    <a href="#">
                        <i class="icon-people"></i>
                        Manage Employees
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>