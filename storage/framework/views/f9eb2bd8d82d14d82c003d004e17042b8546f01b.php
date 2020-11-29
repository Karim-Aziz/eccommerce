<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        portfolios
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
                    <?php if($places->count() > 0): ?>
                        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="modal fade" id="modal-default<?php echo e($place->id); ?>" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit portfolio </h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="<?php echo e(url('/siteAdmin/places/edit/'.$place->id)); ?>" method="post" enctype="multipart/form-data">

                                            <?php echo e(csrf_field()); ?>

                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>url</label>
                                                    <input name="url" type="text" class="form-control"
                                                        value="<?php echo e(old('url')? old('url'): $place->url); ?>">
                                                        <?php if($errors->has('url')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('url')); ?></strong>
                                                        </span>
                                                        <?php endif; ?>
                                                </div>

                                                <div class="form-group">
                                                    <label for="page_id">Page</label>
                                                    <select class="form-control" name="page_id"
                                                        id="page_id">
                                                        <?php $__currentLoopData = App\pages::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(old('page_id')): ?>
                                                           <option value="<?php echo e($category->id); ?>"
                                                            <?php echo e($category->id == old('page_id')); ?>}>
                                                            <?php echo e($category->name); ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo e($category->id); ?>"
                                                            <?php echo e($category->id == $place->page_id ? 'selected' : ''); ?>>
                                                            <?php echo e($category->name); ?></option>
                                                        <?php endif; ?>

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
                                                    <img style="height: 100px;"
                                                        src="<?php echo e(@$place->image->name ? '/img/places_images/'.$place->image->name : url('/dist/img/user2-160x160.jpg')); ?>">
                                                    <input name="img" class="form-control" type="file">
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
                                                aria-label="url: activate to sort column descending">url</th>

                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="User: activate to sort column
                                                descending">page</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Date
                                                </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($places->count() > 0): ?>
                                        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo e($place->url); ?></td>

                                            <td><?php echo e(@$place->page->name); ?></td>
                                            <td><?php echo e($place->created_at->toDateString()); ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default<?php echo e($place->id); ?>" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="<?php echo e(url('/siteAdmin/places/delete/'. $place->id)); ?>"
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
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('/ckeditor/ckeditor.js')); ?>"></script>
<script type="application/javascript">
    $(document).ready(function () {
        CKEDITOR.config.contentsLangDirection = 'rtl';
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>