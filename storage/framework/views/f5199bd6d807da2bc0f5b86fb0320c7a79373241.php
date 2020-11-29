<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Add Video
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
            <form role="form" action="<?php echo e(url('/siteAdmin/Video/insert')); ?>" method="post"
                enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                        <div class="form-group">
                            <label>video</label>
                            <input id="video" type="text" class="form-control" name="video" value="<?php echo e(old('video')); ?>" required autofocus>

                            <?php if($errors->has('video')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('video')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

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
                            <label>info_1</label>
                            <input id="info_1" type="text" class="form-control" name="info_1" value="<?php echo e(old('info_1')); ?>" required autofocus>

                            <?php if($errors->has('info_1')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_1')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_1_ar</label>
                            <input id="info_1_ar" type="text" class="form-control" name="info_1_ar" value="<?php echo e(old('info_1_ar')); ?>" required autofocus>

                            <?php if($errors->has('info_1_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_1_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_2</label>
                            <input id="info_2" type="text" class="form-control" name="info_2" value="<?php echo e(old('info_2')); ?>" required autofocus>

                            <?php if($errors->has('info_2')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_2')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_2_ar</label>
                            <input id="info_2_ar" type="text" class="form-control" name="info_2_ar" value="<?php echo e(old('info_2_ar')); ?>" required autofocus>

                            <?php if($errors->has('info_2_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_2_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_3</label>
                            <input id="info_3" type="text" class="form-control" name="info_3" value="<?php echo e(old('info_3')); ?>" required autofocus>

                            <?php if($errors->has('info_3')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_3')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_3_ar</label>
                            <input id="info_3_ar" type="text" class="form-control" name="info_3_ar" value="<?php echo e(old('info_3_ar')); ?>" required autofocus>

                            <?php if($errors->has('info_3_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_3_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_4</label>
                            <input id="info_4" type="text" class="form-control" name="info_4" value="<?php echo e(old('info_4')); ?>" required autofocus>

                            <?php if($errors->has('info_4')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_4')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_4_ar</label>
                            <input id="info_4_ar" type="text" class="form-control" name="info_4_ar" value="<?php echo e(old('info_4_ar')); ?>" required autofocus>

                            <?php if($errors->has('info_4_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_4_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_5</label>
                            <input id="info_5" type="text" class="form-control" name="info_5" value="<?php echo e(old('info_5')); ?>" required autofocus>

                            <?php if($errors->has('info_5')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_5')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>info_5_ar</label>
                            <input id="info_5_ar" type="text" class="form-control" name="info_5_ar" value="<?php echo e(old('info_5_ar')); ?>" required autofocus>

                            <?php if($errors->has('info_5_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('info_5_ar')); ?></strong>
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