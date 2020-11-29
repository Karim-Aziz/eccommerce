
<div class="footer <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5><?php echo app('translator')->getFromJson('Popular Searches'); ?></h5>
        <ul>
          <?php if(count($pages) > 0): ?>
            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(url('/pages/'.@$page->id)); ?>">
                <?php if(App::isLocale('ar')): ?>
                  <li><?php echo e(@$page->name_ar); ?></li>
                <?php else: ?>
                  <li><?php echo e(@$page->name); ?></li>
                <?php endif; ?>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </ul>
      </div>

      <div class="col-md-3">
        <h5><?php echo app('translator')->getFromJson('Account'); ?></h5>
        <ul>
          <?php if(Auth::check()): ?>
            <a href="<?php echo e(url('/my_acount')); ?>"><li><?php echo app('translator')->getFromJson('My Account'); ?></li></a>
          <?php else: ?>
            <a href="<?php echo e(url('/register')); ?>"><li><?php echo app('translator')->getFromJson('Login'); ?></li></a>
          <?php endif; ?>
          <a href="<?php echo e(url('/cart')); ?>" ><li> <?php echo app('translator')->getFromJson('My Cart'); ?></li></a>
          <a href="<?php echo e(url('/order')); ?>"><li><?php echo app('translator')->getFromJson('My Orders'); ?></li></a>
        </ul>
      </div>

      <div class="col-md-3">
        <h5><?php echo app('translator')->getFromJson('Customer Service'); ?></h5>
        <ul>
          <a href="<?php echo e(url('/contact')); ?>"><li><?php echo app('translator')->getFromJson('Contact Us'); ?></li></a>
        </ul>
      </div>

      <div class="col-md-3">
        <a href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(url('/img/logo/'.@$settings->logoFooter->name)); ?>" alt="logo footer" />
        </a>

        <div class="icon-logo">
          <ul>
            <a href="<?php echo e(@$settings->Facebook); ?>" target="_blank"><li><i class="fab fa-facebook-f"></i></li></a>
            <a href="<?php echo e(@$settings->Twitter); ?>" target="_blank"><li><i class="fab fa-twitter"></i></li></a>
            <a href="<?php echo e(@$settings->YouTube); ?>" target="_blank"><li><i class="fab fa-youtube"></i></li></a>
            <a href="<?php echo e(@$settings->Instegram); ?>" target="_blank"><li><i class="fab fa-instagram"></i></li></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
