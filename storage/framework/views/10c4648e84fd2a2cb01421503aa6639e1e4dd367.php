<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
       Clinics
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
                    <?php if($Clinics->count() > 0): ?>
                        <?php $__currentLoopData = $Clinics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="modal fade" id="modal-default<?php echo e($Clinic->id); ?>" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit Clinic </h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="<?php echo e(url('/siteAdmin/Clinic/edit/'.$Clinic->id)); ?>" method="post" enctype="multipart/form-data">

                                            <?php echo e(csrf_field()); ?>

                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>title</label>
                                                    <input name="title" type="text" class="form-control"
                                                        value="<?php echo e(old('title')? old('title'): $Clinic->title); ?>">
                                                    <?php if($errors->has('title')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>title Ar</label>
                                                    <input name="title_ar" type="text" class="form-control"
                                                        value="<?php echo e(old('title_ar')? old('title_ar'): $Clinic->title_ar); ?>">
                                                    <?php if($errors->has('title_ar')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('title_ar')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>time</label>
                                                    <input name="time" type="text" class="form-control"
                                                        value="<?php echo e(old('time')? old('time'): $Clinic->time); ?>">
                                                    <?php if($errors->has('time')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('time')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>time Ar</label>
                                                    <input name="time_ar" type="text" class="form-control"
                                                        value="<?php echo e(old('time_ar')? old('time_ar'): $Clinic->time_ar); ?>">
                                                    <?php if($errors->has('time_ar')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('time_ar')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="form-group">
                                                    <label>address</label>
                                                    <input name="address" type="text" class="form-control"
                                                        value="<?php echo e(old('address')? old('address'): $Clinic->address); ?>">
                                                    <?php if($errors->has('address')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>address Ar</label>
                                                    <input name="address_ar" type="text" class="form-control"
                                                        value="<?php echo e(old('address_ar')? old('address_ar'): $Clinic->address_ar); ?>">
                                                    <?php if($errors->has('address_ar')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('address_ar')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="form-group">
                                                    <label>phone</label>
                                                    <input name="phone" type="text" class="form-control"
                                                        value="<?php echo e(old('phone')? old('phone'): $Clinic->phone); ?>">
                                                    <?php if($errors->has('phone')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                                    </span>
                                                    <?php endif; ?>
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
                    <?php endif; ?>

                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover dataTable no-footer"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="title: activate to sort column descending">title</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="title: activate to sort column descending">title Ar</th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Date: activate to sort column ascending">Date
                                                </th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($Clinics->count() > 0): ?>
                                        <?php $__currentLoopData = $Clinics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo e($Clinic->title); ?></td>
                                            <td class="sorting_1"><?php echo e($Clinic->title_ar); ?></td>
                                            <td><?php echo e($Clinic->created_at->toDateString()); ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default<?php echo e($Clinic->id); ?>" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="<?php echo e(url('/siteAdmin/Clinic/delete/'. $Clinic->id)); ?>"
                                                    class="btn btn-danger confirm" title="delete" style="margin-bottom: 3px">
                                                    <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
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