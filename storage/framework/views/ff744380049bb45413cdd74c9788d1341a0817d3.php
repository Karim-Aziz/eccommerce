<?php
    $services = App\services::all();
?>
<!-- =========== Start Services  =========== -->
    <div class="services">
      <div
        class="heading-main text-center mb-5"
        data-aos="zoom-in"
        data-aos-duration="1500"
      >
        <h1 class="text-uppercase"><?php echo app('translator')->getFromJson('SERVICES'); ?></h1>
        <p>
          <?php echo app('translator')->getFromJson('Our clinic offers all kinds of services and constantly study new technology to add new custom services to the list'); ?>
        </p>
      </div>
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <?php $__currentLoopData = @$services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
            <div class="card">
              <a href="services.html">
                <img
                  src="<?php echo e(@$service->image->name ? '/img/services/'.$service->image->name : url('/dist/img/services2-160x160.jpg')); ?>"
                  class="card-img-top"
                  alt="Service 1"
                />
              </a>
              <div class="card-body">
                <?php if(App::isLocale('ar')): ?>
                  <h5 class="card-title"><?php echo e($service->name_ar); ?></h5>
                  <p class="card-text">
                    <?php echo $service->desc_ar; ?>

                  </p>
                <?php else: ?>
                  <h5 class="card-title"><?php echo e($service->name); ?></h5>
                  <p class="card-text">
                    <?php echo $service->desc; ?>

                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
    <!-- =========== End Services  =========== -->
