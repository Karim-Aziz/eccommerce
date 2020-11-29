<?php
$slider = App\Slider::orderBy('id', 'desc')->get();
?>
<!-- ================================================================================ -->
<?php if($slider->count() > 0): ?>
  <!-- Start Slider Images -->
  <div class="slider_images">
    <div class="owl-carousel owl-theme" id="slider_images">
    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($item->images)): ?>

      <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
          <img src="<?php echo e('/img/slider_images/'.$image->name); ?>" alt="" class="slider image " />
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <!-- End Slider Images -->
<?php endif; ?>
    <!-- =========== Start Icons  =========== -->
    <div class="fix-icons">
      <a href="<?php echo e(@$settings->Facebook); ?>" data-toggle="tooltip" data-placement="right" title="Facebook" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a href="tel:<?php echo e(@$settings->phone); ?>" data-toggle="tooltip" data-placement="right" title="Phone"
        ><i class="fas fa-phone-volume"></i
      ></a>

      <a href="whatsapp://send?abid=<?php echo e(str_replace('+', '', @$settings->phone)); ?>&text=Hello" data-toggle="tooltip" data-placement="right" title="Whatsapp"
        ><i class="fab fa-whatsapp"></i
      ></a>
    </div>
    <!-- =========== End Icons  =========== -->

