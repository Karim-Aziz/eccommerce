<!-- =========== Start Header Top =========== -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="<?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
              <li><i class="fas fa-phone-alt"></i> <?php echo e(@$settings->phone); ?> </li>
              <li>
                <i class="far fa-envelope-open"></i>  <?php echo e(@$settings->email); ?>

              </li>
            </ul>
          </div>
          <div class="col-lg-4  <?php if(App::isLocale('ar')): ?>  text-left <?php else: ?>  text-right <?php endif; ?>">
            <div>
              <a class="ml-3" href="<?php echo e(@$settings->Facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a class="ml-3" href="<?php echo e(@$settings->Instegram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
              <a class="ml-3" href="<?php echo e(@$settings->YouTube); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
              <a class="ml-3" href="<?php echo e(@$settings->Twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Header Top =========== -->

    <!-- =========== Start Navbar =========== -->
    <nav class="navbar navbar-expand-lg">
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
          <i class="fas fa-align-justify"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link active ml-2" href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('Home'); ?></a>
            <a class="nav-link ml-2" href="<?php echo e(url('/about_us')); ?>"><?php echo app('translator')->getFromJson('About Doctor'); ?></a>
            <li class="nav-item dropdown ml-2">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <?php echo app('translator')->getFromJson('Our Services'); ?>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right animate slideIn"
                aria-labelledby="navbarDropdown"
              >
                <?php if(count($pages) > 0): ?>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(App::isLocale('ar')): ?>
                          <a class="dropdown-item" href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <?php echo e(@$page->name_ar); ?></a>
                        <?php else: ?>
                          <a class="dropdown-item" href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <?php echo e(@$page->name); ?></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
            </li>
            <a class="nav-link ml-2" href="<?php echo e(url('/contact')); ?>"><?php echo app('translator')->getFromJson('Contact Us'); ?></a>
          </div>
          <div class="lang">
            <a class="nav-link ml-2 <?php if(App::isLocale('en')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/en')); ?>">En</a>
            <a class="nav-link ml-2 <?php if(App::isLocale('ar')): ?>  active  <?php endif; ?>" href="<?php echo e(url('/ar')); ?>">AR</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- =========== End Navbar =========== -->
