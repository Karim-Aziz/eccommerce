<?php
    $services = App\services::all();
?>
  <!-- Srart Services Section -->
  <div class="services text-center" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
    <div class="container">
      <div class="info-title mb-5">
        <h5><?php echo app('translator')->getFromJson('Our Services'); ?></h5>
        <h6 class="display-4"><?php echo app('translator')->getFromJson('SERVICES'); ?></h6>
      </div>
      <div class="row">
        <?php if(App::isLocale('ar')): ?>
          <?php $__currentLoopData = @$services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo e(@$service->image->name ? '/img/services/'.$service->image->name : url('/dist/img/services2-160x160.jpg')); ?>" class="card-img-top" alt="<?php echo e($service->name_ar); ?>" />
              <div class="card-body">
                <h5 class="card-title"><?php echo e($service->name_ar); ?></h5>
                <p class="card-text">
                  <?php echo $service->desc_ar; ?>

                </p>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <?php $__currentLoopData = @$services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo e(@$service->image->name ? '/img/services/'.$service->image->name : url('/dist/img/services2-160x160.jpg')); ?>" class="card-img-top" alt="<?php echo e($service->name); ?>" />
              <div class="card-body">
                <h5 class="card-title"><?php echo e($service->name); ?></h5>
                <p class="card-text">
                  <?php echo $service->desc; ?>

                </p>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
  <!-- End Services Section -->
