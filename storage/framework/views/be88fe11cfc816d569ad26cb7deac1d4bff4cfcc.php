<!-- ================================================================================ -->
    <!-- Start Header  -->
    <nav class="navbar navbar-expand-md" id="topheader">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(url('/img/logo/'.@$settings->logo->name)); ?>" alt="logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link ml-2 active" href="<?php echo e(url('/')); ?>#"><?php echo app('translator')->getFromJson('Home'); ?></a>
            <a class="nav-link ml-2" href="<?php echo e(url('/')); ?>#about"><?php echo app('translator')->getFromJson('About'); ?></a>
            <a class="nav-link ml-2" href="<?php echo e(url('/')); ?>#all-products"><?php echo app('translator')->getFromJson('Our Prodect'); ?></a>
            <a class="nav-link ml-2" href="<?php echo e(url('/')); ?>#contact"><?php echo app('translator')->getFromJson('Contact'); ?></a>
          </div>
          <div class="lang">
            <div class="dropdown">
              <a
                class="btn btn-secondary btn-lan dropdown-toggle"
                href="#"
                role="button"
                id="dropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
              <?php echo app('translator')->getFromJson('Language'); ?>
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item <?php if(App::isLocale('en')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/en')); ?>">En</a>
                <a class="dropdown-item <?php if(App::isLocale('ar')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/ar')); ?>">AR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

