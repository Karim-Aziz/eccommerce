<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Add Clinic
    </h1>
</section>
<div class="row">
    <div class="col-sm-12">
        <?php if(\Session::has('success')): ?>
        <div class="alert alert-success">
            <ul>
                <li><?php echo \Session::get('success'); ?></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</div>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <form role="form" action="<?php echo e(url('/siteAdmin/Clinic/insert')); ?>" method="post"
                enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                        <div class="form-group">
                            <label>title</label>
                            <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>"
                                required autofocus>

                            <?php if($errors->has('title')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('title')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>title Ar</label>
                            <input id="title_ar" type="text" class="form-control" name="title_ar"
                                value="<?php echo e(old('title_ar')); ?>" required autofocus>

                            <?php if($errors->has('title_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('title_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>time</label>
                            <input id="time" type="text" class="form-control" name="time" value="<?php echo e(old('time')); ?>"
                                required autofocus>

                            <?php if($errors->has('time')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('time')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>time Ar</label>
                            <input id="time_ar" type="text" class="form-control" name="time_ar"
                                value="<?php echo e(old('time_ar')); ?>" required autofocus>

                            <?php if($errors->has('time_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('time_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>address</label>
                            <input id="address" type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>"
                                required autofocus>

                            <?php if($errors->has('address')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('address')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>address Ar</label>
                            <input id="address_ar" type="text" class="form-control" name="address_ar"
                                value="<?php echo e(old('address_ar')); ?>" required autofocus>

                            <?php if($errors->has('address_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('address_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>


                        <div class="form-group">
                            <label>phone</label>
                            <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>"
                                required autofocus>

                            <?php if($errors->has('phone')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('phone')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Add" class="btn btn-primary" >
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>