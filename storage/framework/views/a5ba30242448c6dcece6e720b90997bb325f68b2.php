<!-- ================= Start Top Bar ================= -->
<div class="top-bar">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-10 <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
          <div class="other-link">
            <?php if(Auth::check()): ?>
              <a href="<?php echo e(url('/my_acount')); ?>"><?php echo app('translator')->getFromJson('My Account'); ?></a>
              <span>|</span>
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <?php echo app('translator')->getFromJson('Logout'); ?>
              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

              </form>
            <?php else: ?>
              <a href="<?php echo e(url('/login')); ?>"><?php echo app('translator')->getFromJson('Login'); ?></a>
            <?php endif; ?>
            <span>|</span>
            <a href="<?php echo e(url('/cart')); ?>" >
            <?php echo app('translator')->getFromJson('My Cart'); ?> <i class="fas fa-shopping-cart"></i>
            </a>
            <span>|</span>
            <a href="<?php echo e(url('/order')); ?>"><?php echo app('translator')->getFromJson('My Orders'); ?></a>
            <span>|</span>
            <a href="<?php echo e(url('/favorite')); ?>"><?php echo app('translator')->getFromJson('My Favorite'); ?></a>
          </div>
        </div>

        <div class="col-md-2">
          <div class="lang">
            <a class="<?php if(App::isLocale('en')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/en')); ?>">English</a>
            <span>|</span>
            <a class="<?php if(App::isLocale('ar')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/ar')); ?>">Arabic</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================= End Top Bar ================= -->

<!-- ================= Start Navbar ================= -->
<div class="header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <img src="<?php echo e(url('/img/logo/'.@$settings->logo->name)); ?>" alt="logo">
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('Home'); ?></a>
          </li>
          <?php if(count($pages) > 0): ?>
            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-item">
                <?php if(App::isLocale('ar')): ?>
                  <a class="nav-link" href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <?php echo e(@$page->name_ar); ?></a>
                <?php else: ?>
                  <a class="nav-link" href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <?php echo e(@$page->name); ?></a>
                <?php endif; ?>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

        </ul>
        <form class="form-inline my-2 my-lg-0" action="<?php echo e(url('/pages/search')); ?>" method="get">
          <input class="form-control mr-sm-0" placeholder="<?php echo app('translator')->getFromJson('Search'); ?>" name="title" />
          <?php echo e(csrf_field()); ?>

          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
</div>
<!-- ================= End Navbar ================= -->

