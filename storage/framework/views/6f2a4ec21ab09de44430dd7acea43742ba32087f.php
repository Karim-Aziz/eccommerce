   <?php
   $settings = App\settings::first();
   $pages = App\pages::all();
   ?>
   <!-- Start Header -->
  <nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(url('/img/logo/'.@$settings->logo->name)); ?>" alt="logo">
        </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-right"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav m-auto">
        <a class="nav-link ml-5 text-uppercase active" href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('Home'); ?></a>

          <a class="nav-link ml-5 text-uppercase" href="<?php echo e(url('/about_us')); ?>"><?php echo app('translator')->getFromJson('About'); ?></a>
          <a class="nav-link ml-5 text-uppercase" href="<?php echo e(url('/Portfolio')); ?>"><?php echo app('translator')->getFromJson('Portfolio'); ?></a>
          <a class="nav-link ml-5 text-uppercase" href="<?php echo e(url('/contact')); ?>"><?php echo app('translator')->getFromJson('Contact'); ?></a>
        </div>

        <div class="lang">
            <a class="ml-4 text-uppercase <?php if(App::isLocale('en')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/en')); ?>">En</a>
            <a class="ml-4 text-uppercase <?php if(App::isLocale('ar')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/ar')); ?>">AR</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Header -->
