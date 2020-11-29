<?php
    $places = App\places::orderBy('id', 'decs')->get()->take(5);
?>
<!-- ================================================================================ -->
    <!-- Start Latest Products -->
    <div class="latest_products">
      <div class="container">
        <h3 class="mb-4">Latest Products</h3>
        <div class="owl-carousel owl-theme" id="latest_products">
          <?php if($places->count() > 0): ?>
            <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item">
            <div class="card text-center">
              <!-- Slider Products -->
              <?php
                if (@$place->images ) {
                  foreach ($place->images as $image) {
                    $src =  '/img/places_images/'.$image->name ;
                    break;
                  }
                } else {
                  $src = null;
                }
            ?>
            <img src="<?php echo e(@$src ? @$src : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" class="card-img-top"  />

              <!-- Info All Products -->
              <div class="card-body">
                <div class="info_all_pro">
                  <h5 class="card-title text-center">
                    <?php if(App::isLocale('ar')): ?>
                      <?php echo e(@$place->title_ar); ?>

                    <?php else: ?>
                      <?php echo e(@$place->title); ?>

                    <?php endif; ?>
                  </h5>
                  <span>
                    <?php if(App::isLocale('ar')): ?>
                      <?php echo e(@$place->price_after_discount_ar); ?>

                    <?php else: ?>
                      <?php echo e(@$place->price_after_discount); ?>

                    <?php endif; ?>
                  </span>
                  <span class="sale">
                    <?php if(App::isLocale('ar')): ?>
                      <?php echo e(@$place->price_ar); ?>

                    <?php else: ?>
                      <?php echo e(@$place->price); ?>

                    <?php endif; ?>
                  </span>
                </div>

                 <a class="btn-block" href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><?php echo app('translator')->getFromJson('View'); ?></a>
              </div>
            </div>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
    <!-- End Latest Products -->
