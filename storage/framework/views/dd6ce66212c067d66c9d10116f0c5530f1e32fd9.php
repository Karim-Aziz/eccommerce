<!-- =========== Start Testimonials =========== -->
<?php
$Testimonials = App\Testimonial::all();
?>
    <div class="testimonials <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="heading-main text-center mb-5">
          <h1 class="text-uppercase"><?php echo app('translator')->getFromJson('Testimonials'); ?></h1>
        </div>

        <div class="row test-info" data-aos="zoom-in" data-aos-duration="1500">
          <?php if($Testimonials->count() > 0): ?>
            <?php $__currentLoopData = $Testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <b><i class="fas fa-hands-helping"></i></b>
                    <?php if(App::isLocale('ar')): ?>
                      <p class="card-text">
                        <?php echo @$Testimonial->desc_ar; ?>

                      </p>
                      <h5 class="card-title"><?php echo e(@$Testimonial->name_ar); ?></h5>
                    <?php else: ?>
                      <p class="card-text">
                        <?php echo @$Testimonial->desc; ?>

                      </p>
                      <h5 class="card-title"><?php echo e(@$Testimonial->name); ?></h5>
                    <?php endif; ?>
                    <img
                      src="images/testimonials/1.png"
                      alt="test-1"
                      class="rounded-circle"
                    />
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- =========== End Testimonials =========== -->
