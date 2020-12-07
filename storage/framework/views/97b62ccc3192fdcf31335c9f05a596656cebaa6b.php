<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Home Slider
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
                    <?php $__currentLoopData = @$slider->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="modal fade" id="modal-default<?php echo e($image->id); ?>" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">Edit Home Slider </h4>
                                </div>


                                <div class="modal-body">
                                <form role="form" action="<?php echo e(url('/siteAdmin/slider/edit/'.$image->id)); ?>"
                                    method="post"
                                        enctype="multipart/form-data">

                                    <?php echo e(csrf_field()); ?>

                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>image</label>

                                            <img style="height: 64px;width: 64px;border: 1px solid #ccc; padding: 2px"
                                                src="<?php echo e('/img/slider_images/'.@$image->name); ?>"
                                                data-toggle="modal"
                                                data-target="#modal-default<?php echo e($image->id); ?>">

                                            <div class="form-group">
                                                <label>image</label>
                                                <input name="image" class="form-control" type="file"
                                                    multiple="multiple">
                                                <?php if($errors->has('image')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('image')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>



                                        <div class="box-footer">
                                            <input type="submit" value="update" class="btn btn-primary" >
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
                                                aria-label="image: activate to sort column ascending">Image
                                                </th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = @$slider->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row" class="odd">

                                        <td >

                                                <img style="height: 64px;width: 64px;border: 1px solid #ccc; padding: 2px"
                                                src="<?php echo e('/img/slider_images/'.@$image->name); ?>"
                                                data-toggle="modal"
                                                    data-target="#modal-default<?php echo e($image->id); ?>">


                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal-default<?php echo e($image->id); ?>" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                            </a>
                                            <a href="<?php echo e(url('/siteAdmin/slider/delete/'. $image->id)); ?>"
                                                class="btn btn-danger confirm" title="delete" style="margin-bottom: 3px">
                                                <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>