<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        requests messages
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">

                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-hover dataTable no-footer"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Email: activate to sort column ascending">
                                                    Email
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="number: activate to sort column ascending">
                                                    number
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Place: activate to sort column ascending">
                                                    Place
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Page: activate to sort column ascending">
                                                    Page
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Date
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Details: activate to sort column ascending">
                                                    Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($requests->count() > 0): ?>
                                            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo e($request->name); ?></td>
                                                <td><?php echo e($request->email); ?></td>
                                                <td><?php echo e($request->number); ?></td>
                                                <td><?php echo e(@$request->place->title); ?></td>
                                                <td><?php echo e(@$request->place->page->name); ?></td>
                                                <td><?php echo e($request->created_at->toDateString()); ?></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#modal-default<?php echo e($request->id); ?>"
                                                        class="btn btn-success" title="show" style="margin-bottom: 3px">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
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
                <?php if($requests->count() > 0): ?>
                <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade" id="modal-default<?php echo e($request->id); ?>" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Edit request </h4>
                            </div>


                            <div class="modal-body">
                                <ul class="list-group">
                                    <li class="list-group-item ">
                                        <strong>
                                            name :
                                        </strong>
                                        <?php echo e($request->name); ?>

                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            email :
                                        </strong>
                                        <?php echo e($request->email); ?>

                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            number :
                                        </strong>
                                        <?php echo e($request->number); ?>

                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            place title :
                                        </strong>
                                        <?php echo e(@$request->place->title); ?>

                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            page name :
                                        </strong>
                                        <?php echo e(@$request->place->page->name); ?>

                                    </li>
                                    <li class="list-group-item ">
                                        <strong>
                                            created at :
                                        </strong>
                                        <?php echo e($request->created_at->toDateString()); ?>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>