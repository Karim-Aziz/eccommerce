<?php
$slider = App\Slider::orderBy('id', 'desc')->get();
?>
<!-- ================================================================================ -->
<?php if($slider->count() > 0): ?>
  <div class="slider">
      <div id="shop-slider" class="owl-carousel owl-theme">
        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($item->images)): ?>
          <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
              <img src="<?php echo e('/img/slider_images/'.$image->name); ?>"/>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
<?php endif; ?>

