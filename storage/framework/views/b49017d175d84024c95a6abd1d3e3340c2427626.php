<?php $__env->startSection('content'); ?>
<div id="content-header">
    <h1>Employees</h1>
</div>
<div id="breadcrumb">
    <a href="javascript:void(0)" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="javascript:void(0)">Employees</a>
    <a href="javascript:void(0)" class="current">Edit</a>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-plus"></i>
                    </span>
                    <h5>Edit Employee </h5>
                </div>
                <div class="widget-content nopadding">  
                <?php if($employee->count()): ?>
                    <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <form class="form-horizontal" method="post" action="<?php echo e(url('processUpdate')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id" id="id" value="<?php echo e($row->id); ?>" />
                            <div class="control-group" style="padding: 5px;">
                                <div class="error_msg"></div>
                            </div>
                            <fieldset>
                                <legend style="padding-left: 15px;">Personal Details</legend>
                                <div class="control-group <?php echo e($errors->has('first_name') ? 'error' : ''); ?>">                                
                                    <label class="control-label">First Name <span style="color: red;">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="first_name" id="first_name" value="<?php echo e($row->first_name); ?>" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Middle Name</label>
                                    <div class="controls">
                                        <input type="text" name="middle_name" id="middle_name" value="<?php echo e($row->middle_name); ?>"/>
                                    </div>
                                </div>
                                <div class="control-group <?php echo e($errors->has('last_name') ? 'error' : ''); ?>">
                                    <label class="control-label">Last Name <span style="color: red;">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="last_name" id="last_name" required  value="<?php echo e($row->last_name); ?>"/>
                                    </div>
                                </div>
                                <div class="control-group <?php echo e($errors->has('email') ? 'error' : ''); ?>">
                                    <label class="control-label">Email Address <span style="color: red;">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" placeholder="email@xxxx.xxx" required  value="<?php echo e($row->email); ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="status">Status</label>
                                    <div class="controls">
                                        <input type="checkbox" name="status" id="status" <?php echo e($row->status ? 'checked' : ''); ?>/>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <input type="submit" id="btnsubmit" value="Submit" class="btn btn-primary" />
                                <a href="<?php echo e(url('/employees')); ?>" id="btncancel" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>