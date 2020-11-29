<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Add brand
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
            <form role="form" action="<?php echo e(url('/siteAdmin/brand/insert')); ?>" method="post" enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                    <div class="box-body">


                        <div class="form-group">
                            <label>Photo</label>
                            <input name="img" class="form-control" type="file">
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>