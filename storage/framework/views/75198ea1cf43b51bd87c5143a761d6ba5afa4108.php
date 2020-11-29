<?php
    $brands = App\brand::all();
?>
<?php if(count($brands) > 0): ?>
<!-- ======================= Start Brand ======================= -->
<div class="brand">
    <div class="container">
    <div id="brand" class="owl-carousel owl-theme">
        <?php $__currentLoopData = @$brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
           <img src="<?php echo e(@$brand->image->name ? '/img/brand/'.$brand->image->name : url('/img/brands/logo1.png')); ?>">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</div>
<!-- ======================= End Brand ======================= -->
<?php endif; ?>
