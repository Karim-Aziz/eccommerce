<?php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
?>

<!DOCTYPE html>
<?php if(App::isLocale('ar')): ?>
<html dir="rtl">
<?php else: ?>
<html lang="en">
<?php endif; ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> e commerce | <?php echo $__env->yieldContent('title'); ?> </title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="<?php echo e(url('/lib/bootstrap-4.4.1/css/bootstrap.min.css')); ?>" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="<?php echo e(url('/lib/fontawesome/css/all.min.css')); ?>" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap" rel="stylesheet" />
  <!-- OwlCarousel2 -->
  <link rel="stylesheet" href="<?php echo e(url('/lib/OwlCarousel/css/owl.carousel.min.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(url('/lib/OwlCarousel/css/owl.theme.default.min.css')); ?>" />
  <!-- jquery ui -->
  <link rel="stylesheet" href="<?php echo e(url('/lib/jquery-ui/jquery-ui.min.css')); ?>" />
  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="<?php echo e(url('/css/style.css')); ?>" />
  <!-- Media Style -->
  <link rel="stylesheet" href="<?php echo e(url('/css/media.css')); ?>" />
  <?php if(App::isLocale('ar')): ?>
    <!-- Import Custom Styles AR File -->
    <link rel="stylesheet" href="<?php echo e(url('/css/style_ar.css')); ?>" />
  <?php endif; ?>
  <?php echo $__env->yieldContent('css'); ?>
  <?php
      $home_desc = App\home_desc::first();
  ?>
  <style>
    .img-background {
      background: url("<?php echo e(@$home_desc->image ? '/img/home_desc/'.$home_desc->image : url('/img/bac-img.jpg')); ?>") no-repeat top center;
    }
  </style>
</head>

<body>
    <?php
    $settings = App\settings::first();
    $pages = App\pages::orderBy('id', 'desc')->get();
    ?>
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
                <a class="nav-link active" href="<?php echo e(url('/')); ?>#"><?php echo app('translator')->getFromJson('Home'); ?></a>
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

    <!-- ***************************************************************** -->
    <div style="min-height: 445px;">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
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
    <!-- End Contact Seaction -->
    <!-- ================================================================================ -->
    <!-- =========== Start Jquery Files =========== -->
    <script src="<?php echo e(url('/lib/jquery/jquery-3.3.1.min.js')); ?>"></script>
    <!-- =========== Start Bootstrap Files =========== -->
    <script src="<?php echo e(url('/lib/bootstrap-4.4.1/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('/lib/bootstrap-4.4.1/js/popper.min.js')); ?>"></script>
    <!-- =========== Start OwlCarousel =========== -->
    <script src="<?php echo e(url('/lib/OwlCarousel/js/owl.carousel.min.js')); ?>"></script>
    <!--  isotope js library  -->
    <script src="<?php echo e(url('/lib/isotope/isotope.min.js')); ?>"></script>
    <!-- jquery ui -->
    <script src="<?php echo e(url('/lib/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- =========== Custom Js File =========== -->
    <?php if(App::isLocale('ar')): ?>
    <script src="<?php echo e(url('/js/main_ar.js')); ?>"></script>
    <?php else: ?>
    <script src="<?php echo e(url('/js/main.js')); ?>"></script>
    <?php endif; ?>
  </body>
</html>
