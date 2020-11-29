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
                    <?php $__currentLoopData = $about_as; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="modal fade" id="modal-default<?php echo e($service->id); ?>" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">Edit About As </h4>
                                </div>


                                <div class="modal-body">
                                    <form role="form" action="<?php echo e(url('/siteAdmin/about_us/edit/'.$service->id)); ?>"
                                        method="post" >

                                        <?php echo e(csrf_field()); ?>

                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>hold_1</label>
                                                <input id="hold_1" type="text" class="form-control" name="hold_1" value="<?php echo e(old('hold_1')? old('hold_1'): $service->hold_1); ?>" required autofocus>

                                                <?php if($errors->has('hold_1')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_1')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_1_ar</label>
                                                <input id="hold_1_ar" type="text" class="form-control" name="hold_1_ar" value="<?php echo e(old('hold_1_ar')? old('hold_1_ar'): $service->hold_1_ar); ?>" required autofocus>

                                                <?php if($errors->has('hold_1_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_1_ar')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_2</label>
                                                <input id="hold_2" type="text" class="form-control" name="hold_2" value="<?php echo e(old('hold_2')? old('hold_2'): $service->hold_2); ?>" required autofocus>

                                                <?php if($errors->has('hold_2')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_2')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_2_ar</label>
                                                <input id="hold_2_ar" type="text" class="form-control" name="hold_2_ar" value="<?php echo e(old('hold_2_ar')? old('hold_2_ar'): $service->hold_2_ar); ?>" required autofocus>

                                                <?php if($errors->has('hold_2_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_2_ar')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_3</label>
                                                <input id="hold_3" type="text" class="form-control" name="hold_3" value="<?php echo e(old('hold_3')? old('hold_3'): $service->hold_3); ?>" required autofocus>

                                                <?php if($errors->has('hold_3')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_3')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_3_ar</label>
                                                <input id="hold_3_ar" type="text" class="form-control" name="hold_3_ar" value="<?php echo e(old('hold_3_ar')? old('hold_3_ar'): $service->hold_3_ar); ?>" required autofocus>

                                                <?php if($errors->has('hold_3_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_3_ar')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_4</label>
                                                <input id="hold_4" type="text" class="form-control" name="hold_4" value="<?php echo e(old('hold_4')? old('hold_4'): $service->hold_4); ?>" required autofocus>

                                                <?php if($errors->has('hold_4')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_4')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_4_ar</label>
                                                <input id="hold_4_ar" type="text" class="form-control" name="hold_4_ar" value="<?php echo e(old('hold_4_ar')? old('hold_4_ar'): $service->hold_4_ar); ?>" required autofocus>

                                                <?php if($errors->has('hold_4_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_4_ar')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_5</label>
                                                <input id="hold_5" type="text" class="form-control" name="hold_5" value="<?php echo e(old('hold_5')? old('hold_5'): $service->hold_5); ?>" required autofocus>

                                                <?php if($errors->has('hold_5')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_5')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_5_ar</label>
                                                <input id="hold_5_ar" type="text" class="form-control" name="hold_5_ar" value="<?php echo e(old('hold_5_ar')? old('hold_5_ar'): $service->hold_5_ar); ?>" required autofocus>

                                                <?php if($errors->has('hold_5_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_5_ar')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_6</label>
                                                <input id="hold_6" type="text" class="form-control" name="hold_6" value="<?php echo e(old('hold_6')? old('hold_6'): $service->hold_6); ?>" required autofocus>

                                                <?php if($errors->has('hold_6')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_6')); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>hold_6_ar</label>
                                                <input id="hold_6_ar" type="text" class="form-control" name="hold_6_ar" value="<?php echo e(old('hold_6_ar')? old('hold_6_ar'): $service->hold_6_ar); ?>" required autofocus>

                                                <?php if($errors->has('hold_6_ar')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('hold_6_ar')); ?></strong>
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
                                        role="grid" aria-describedby="example1_hold">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="hold_1: activate to sort column descending">hold_1</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="hold_1_ar: activate to sort column descending">hold_1_ar</th>


                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Actions: activate to sort column ascending">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($about_as->count() > 0): ?>
                                            <?php $__currentLoopData = $about_as; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo e($service->hold_1); ?></td>
                                                <td><?php echo e($service->hold_1_ar); ?></td>


                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#modal-default<?php echo e($service->id); ?>"
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

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>