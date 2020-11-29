<?php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
?>


<?php $__env->startSection('title', @$place->name); ?>
<?php $__env->startSection('content'); ?>
<!-- =========== Start Services Page =========== -->
    <div class="all-services <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?> ">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-9">
            <?php if($place): ?>
              <div class="all-ser-info">
                <img src="<?php echo e(@$place->image->name ? '/img/places_images/'.$place->image->name : url('/dist/img/user2-160x160.jpg')); ?>" alt="Services image" />
                <h2>
                  <?php if(App::isLocale('ar')): ?>
                    <?php echo e(@$place->title_ar); ?>

                  <?php else: ?>
                    <?php echo e(@$place->title); ?>

                  <?php endif; ?>
                </h2>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo @$place->desc_ar; ?>

                <?php else: ?>
                  <?php echo @$place->desc; ?>

                <?php endif; ?>
              </div>
            <?php endif; ?>

          </div>
          <div class="col-md-3">
            <div class="show-ser">
              <form class="form-inline">
                <input class="form-control" placeholder="Search..." />
                <button type="submit"><i class="fas fa-search"></i></button>
              </form>
              <h4><?php echo app('translator')->getFromJson('All Services'); ?></h4>
              <ul class="list-group list-group-flush">
                <?php if(count($places) > 0): ?>
                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="list-group-item list-group-item-action list-group-item-light" >
                        <?php if(App::isLocale('ar')): ?>
                          <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><?php echo e($place->title_ar); ?></a>
                        <?php else: ?>
                          <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><?php echo e($place->title); ?></a>
                        <?php endif; ?>
                      </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Services Page =========== -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>