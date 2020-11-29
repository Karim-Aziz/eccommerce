  <!-- Start Portfolio Section -->
<?php
 $pages = App\pages::orderBy('id', 'desc')->get();
 ?>
<?php if($pages->count() > 0): ?>
 <div class="portfolio" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000" id="all-products">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="filters text-center">
            <li class="active" data-filter="*"><a href="#!"><?php echo app('translator')->getFromJson('All'); ?></a></li>
            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(App::isLocale('ar')): ?>
                <li data-filter=".<?php echo e($page->name); ?>"><a href="#!"><?php echo e($page->name_ar); ?></a></li>
            <?php else: ?>
                <li data-filter=".<?php echo e($page->name); ?>"><a href="#!"><?php echo e($page->name); ?></a></li>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <div class="projects">
            <div class="row">
  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $__currentLoopData = @$page->places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Start Web Projects -->
        <div class="col-lg-4 item <?php echo e($page->name); ?>">
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
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

