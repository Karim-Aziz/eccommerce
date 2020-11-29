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
  <title>Vu Digtal | <?php echo $__env->yieldContent('title'); ?></title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
    <!-- Google Font -->
  <?php if(App::isLocale('ar')): ?>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
  <?php else: ?>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
  <?php endif; ?>

  <!-- Aos Animation Css -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="<?php echo e(url('/css/style.css')); ?>" />
   <?php if(App::isLocale('ar')): ?>
    <!-- Import Custom Styles AR File -->
  <link rel="stylesheet" href="<?php echo e(url('/css/style-ar.css')); ?>" />
  <?php endif; ?>

  <!-- Media Style -->
  <link rel="stylesheet" href="<?php echo e(url('/css/media.css')); ?>" />
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

    <!-- ***************************************************************** -->
    <?php echo $__env->yieldContent('content'); ?>
     <!-- Start Footer Section -->
    <div class="footer <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Scenic Products'); ?></h5>
            <ul class="list-group list-unstyled <?php if(App::isLocale('ar')): ?>  ar-list <?php endif; ?>">
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Web Design'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Graphic Design'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Web Developers'); ?> </li>
              <li>
                <i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Marketing Strategy'); ?>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Company'); ?></h5>
            <ul class="list-group list-unstyled <?php if(App::isLocale('ar')): ?>  ar-list <?php endif; ?>">
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Home'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('About Us'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Portfolio'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Contact'); ?> </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Support'); ?></h5>
            <ul class="list-group list-unstyled <?php if(App::isLocale('ar')): ?>  ar-list <?php endif; ?>">
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Supports'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Privacy'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Terms of Service'); ?> </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Contact'); ?></h5>
            <div class="wrapper text-center">
              <div class="icon facebook">

                <div class="tooltip">Facebook</div>
                <a href="<?php echo e(@$settings->Facebook); ?>" target="_blank">
                  <span><i class="fab fa-facebook-f"></i></span>
                </a>
              </div>
              <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <a href="<?php echo e(@$settings->Twitter); ?>" target="_blank">
                  <span><i class="fab fa-twitter"></i></span>
                </a>
              </div>
              <div class="icon instagram">
                <div class="tooltip">Instagram</div>
                <a href="<?php echo e(@$settings->Instegram); ?>" target="_blank">
                  <span><i class="fab fa-instagram"></i></span>
                </a>
              </div>

              <div class="icon youtube">
                <div class="tooltip">YouTube</div>
                <a href="<?php echo e(@$settings->YouTube); ?>" target="_blank">
                  <span><i class="fab fa-youtube"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Copyright -->
        <div class="copyright text-center mt-5 lead">
          <?php if(!App::isLocale('ar')): ?>
          <p>Copyright © <b>2020</b> All rights reserved | Vu Digital</p>
          <?php else: ?>
          <p>Copyright © <b>2020</b> جميع الحقوق محفوظة | Vu Digital</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <!-- End Footer Section -->

<!-- Import Bootstrap Js File -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Import isotope-->
  <script src="<?php echo e(url('/js/isotope.min.js')); ?>"></script>

  <!-- Aos Animation Js -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Import Custom Js File -->
  <script src="<?php echo e(url('/js/custom.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
    </body>

</html>
