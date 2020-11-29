<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Add portfolio
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
            <form role="form" action="<?php echo e(url('/siteAdmin/places/insert')); ?>" method="post"
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
                            <label>title_ar</label>
                            <input id="title_ar" type="text" class="form-control" name="title_ar" value="<?php echo e(old('title_ar')); ?>"
                                required autofocus>

                            <?php if($errors->has('title_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('title_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="page_id">Page</label>
                              <select class="form-control" name="page_id" id="page_id">
                                <?php $__currentLoopData = App\pages::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            <?php if($errors->has('page_id')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('page_id')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input name="img" class="form-control" type="file">
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