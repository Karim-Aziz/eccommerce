<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Add Testimonial
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
            <form role="form" action="<?php echo e(url('/siteAdmin/Testimonial/insert')); ?>" method="post"
                enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                    <div class="box-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                            <?php if($errors->has('name')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>name_ar</label>
                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>" required autofocus>

                            <?php if($errors->has('name_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('name_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="desc" class="form-control ckeditor" name="desc"
                                required><?php echo e(old('desc')); ?></textarea>
                            <?php if($errors->has('desc')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('desc')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Description Arbic</label>
                            <textarea id="desc_ar" class="form-control ckeditor" name="desc_ar"
                                required><?php echo e(old('desc_ar')); ?></textarea>
                            <?php if($errors->has('desc_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('desc_ar')); ?></strong>
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
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('/ckeditor/ckeditor.js')); ?>"></script>
<script type="application/javascript">
    $(document).ready(function () {
        CKEDITOR.config.contentsLangDirection = 'rtl';
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>