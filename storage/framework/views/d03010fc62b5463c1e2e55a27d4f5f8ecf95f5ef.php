<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->

    <div class="row">
        
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo e(@count(App\User::all())); ?></h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo e(url('/siteAdmin/user/show')); ?>" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo e(App\services::all()->count()); ?></h3>
                    <p>services</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-print"></i>
                </div>
                <a href="/siteAdmin/services/show" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?php echo e(@count(App\contact::all())); ?></h3>

                    <p>Contact Messages</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-drafts"></i>
                </div>
                <a href="/siteAdmin/contact" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo e(App\places::all()->count()); ?></h3>
                    <p>Our Services</p>
                </div>
                <div class="icon">
                    <i class="ion ion-chatbox-working"></i>
                </div>
                <a href="/siteAdmin/places/show" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->

</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('/Ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>