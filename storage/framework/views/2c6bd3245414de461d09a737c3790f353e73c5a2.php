<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        about_as
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
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if($about_as->count() > 0): ?>
                    <?php $__currentLoopData = $about_as; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="modal fade" id="modal-default<?php echo e($about->id); ?>" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">Edit About As </h4>
                                </div>


                                <div class="modal-body">
                                    <form role="form" action="<?php echo e(url('/siteAdmin/about_us/edit/'.$about->id)); ?>"
                                        method="post" >

                                        <?php echo e(csrf_field()); ?>

                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>about company</label>
                                                <textarea id="about_company" class="form-control ckeditor" name="about_company" required><?php echo e(old('about_company')? old('about_company'): $about->about_company); ?></textarea>
                                                <?php if($errors->has('about_company')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('about_company')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>about company ar</label>
                                                <textarea id="about_company_ar" class="form-control ckeditor" name="about_company_ar"
                                                    required><?php echo e(old('about_company_ar')? old('about_company_ar'): $about->about_company_ar); ?></textarea>
                                                <?php if($errors->has('about_company_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('about_company_ar')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                           <div class="form-group">
                                                    <label>Photo</label>
                                                    <img style="height: 100px;border-radius: 50%"
                                                        src="<?php echo e(@$about->image->name ? '/img/about_as/'.$about->image->name :url('/images/back_about.png')); ?>">
                                                    <input name="img" class="form-control" type="file" enctype="multipart/form-data"
>
                                                    <?php if($errors->has('img')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('img')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                </div>

                                            <div class="box-footer">
                                                <input type="submit" value="update" class="btn btn-primary">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-hover dataTable no-footer"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="service1: activate to sort column ascending">
                                                    about company
                                                </th>



                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Actions: activate to sort column ascending">
                                                    Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($about_as->count() > 0): ?>
                                            <?php $__currentLoopData = $about_as; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo $about->about_company; ?></td>

                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#modal-default<?php echo e($about->id); ?>"
                                                        class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                        <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
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