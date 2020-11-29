<?php if($pages->count() > 0): ?>
 <!--  ======================= Project Area =============================  -->
  <div class="project-area">
    <div class="container">
      <div class="title-section mb-5 <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
        <h2 class="text-uppercase"><?php echo app('translator')->getFromJson('Products'); ?></h2>
      </div>
      <div class="button-group text-center">
        <button type="button" class="active" id="btn1" data-filter="*">
          <?php echo app('translator')->getFromJson('All'); ?>
        </button>
        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(App::isLocale('ar')): ?>
            <button type="button" data-filter=".<?php echo e($page->name); ?>"> <?php echo e($page->name_ar); ?> </button>
        <?php else: ?>
            <button type="button" data-filter=".<?php echo e($page->name); ?>"> <?php echo e($page->name); ?> </button>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class="row grid text-center">
        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = @$page->places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 col-sm-12 element-item <?php echo e($page->name); ?>">
          <div class="our-project">
            <div class="img">
              <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>">
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
                <img src="<?php echo e(@$src ? @$src : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" class="img-fluid"  />
              </a>
            </div>
            <div class="title py-4">
              <?php if(@$place->sale): ?>
                  <span class="custom-sale"><?php echo app('translator')->getFromJson('Sale'); ?> </span>
              <?php endif; ?>
              <h4 class="text-uppercase">
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$place->title_ar); ?>

                <?php else: ?>
                  <?php echo e(@$place->title); ?>

                <?php endif; ?>
              </h4>
              <?php if(@$place->sale): ?>
                <span class="text-secondary sale">
                  <?php echo e(@$place->price_after_discount); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
                </span>
              <?php endif; ?>
              <span class="text-secondary">
                <?php echo e(@$place->price); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
              </span>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php endif; ?>


