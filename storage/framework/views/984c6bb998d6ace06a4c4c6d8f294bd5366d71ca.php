<?php
    $Clinics = App\Clinic::all();
?>
<div class="all-clinic <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="heading-main text-center mb-5">
          <h1 class="text-uppercase"><?php echo app('translator')->getFromJson('All Clinics'); ?></h1>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <?php if(count($Clinics) > 0): ?>
            <?php $__currentLoopData = @$Clinics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if(App::isLocale('ar')): ?>
                <div class="col-lg-4">
                  <div class="clinic-info">
                    <h5 class="text-center"><?php echo e($Clinic->title_ar); ?></h5>
                    <ul class="list-group">
                      <li>
                        <i class="far fa-calendar-check"></i> <?php echo e($Clinic->time_ar); ?>

                      </li>
                      <li><i class="fas fa-phone-alt"></i>  <?php echo e($Clinic->phone); ?></li>
                      <li><i class="fas fa-location-arrow"></i>  <?php echo e($Clinic->address_ar); ?></li>
                    </ul>
                  </div>
                </div>
              <?php else: ?>
                <div class="col-lg-4">
                  <div class="clinic-info">
                    <h5 class="text-center"><?php echo e($Clinic->title); ?></h5>
                    <ul class="list-group">
                      <li>
                        <i class="far fa-calendar-check"></i> <?php echo e($Clinic->time); ?>

                      </li>
                      <li><i class="fas fa-phone-alt"></i>  <?php echo e($Clinic->phone); ?></li>
                      <li><i class="fas fa-location-arrow"></i>  <?php echo e($Clinic->address); ?></li>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>



        </div>
      </div>
    </div>
