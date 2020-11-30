<?php
    $places = App\places::orderBy('id', 'decs')->get()->take(5);
?>

<?php if($places->count() > 0): ?>
<!--  ======================= Start Latest Products =============================  -->
  <div class="product">
    <div class="container">
      <div class="title-section mb-5 <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
        <h2 class="text-uppercase"><?php echo app('translator')->getFromJson('Latest Products'); ?></h2>
      </div>
      <div id="product-all-2" class="owl-carousel owl-theme">
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
          <div class="product-top">
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
            <img src="<?php echo e(@$src ? @$src : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" />
            </a>
            <div class="overlay-right">

              <button
                type="button"
                class="btn btn-secondary"
                title="Quick Shop"
              >
                <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><i class="fas fa-eye"></i></a>
              </button>

              <button
                type="button"
                class="btn btn-secondary"
                title="Add To Wishlist"
              >
                <a href="<?php echo e(url('/favorite')); ?>" class="favorite" data-id="<?php echo e(@$place->id); ?>"><i class="fas fa-heart"></i></a>
              </button>

              <button
                type="button"
                class="btn btn-secondary"
                title="Add To Cart"
              >
                <a href="cart.html"><i class="fas fa-cart-arrow-down"></i></a>
              </button>
            </div>
          </div>
          <div class="product-bottom text-center">
            <?php if(@$place->sale): ?>
              <span class="custom-sale"><?php echo app('translator')->getFromJson('Sale'); ?> </span>
            <?php endif; ?>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <h3>
              <?php if(App::isLocale('ar')): ?>
                <?php echo e(@$place->title_ar); ?>

              <?php else: ?>
                <?php echo e(@$place->title); ?>

              <?php endif; ?>
            </h3>
            <h5>
              <?php if(@$place->sale): ?>
                <span class="text-secondary sale">
                  <?php echo e(@$place->price_after_discount); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
                </span>
              <?php endif; ?>
              <span class="text-secondary">
                <?php echo e(@$place->price); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
              </span>
            </h5>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<!--  ======================= End  Latest Products =============================  -->
<?php endif; ?>
