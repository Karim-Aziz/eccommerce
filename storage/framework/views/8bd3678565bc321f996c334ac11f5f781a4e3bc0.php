<?php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
?>


<?php $__env->startSection('title', 'Search'); ?>
<?php $__env->startSection('content'); ?>
<!-- =========== Start Services Page =========== -->
    <div class="all-services <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?> ">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-12">
            <div class="show-ser">

              <h4><?php echo app('translator')->getFromJson('Search Results'); ?></h4>
              <?php if(count($places) > 0): ?>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item list-group-item-action list-group-item-light" >
                        <?php if(App::isLocale('ar')): ?>
                            <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><?php echo e($place->title_ar); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><?php echo e($place->title); ?></a>
                        <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo app('translator')->getFromJson('No Results'); ?></strong>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Services Page =========== -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>