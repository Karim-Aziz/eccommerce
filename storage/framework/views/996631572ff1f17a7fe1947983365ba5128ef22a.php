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
  <title> e commerce | Home </title>
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

  <?php
      $home_desc = App\home_desc::first();
  ?>
  <style>
    .img-background {
      background: url("<?php echo e(@$home_desc->image ? '/img/home_desc/'.$home_desc->image : url('/img/bac-img.jpg')); ?>") no-repeat top center;
    }
  </style>
  <?php echo $__env->yieldContent('css'); ?>
</head>



<body>
  <?php
    $settings = App\settings::first();
    $pages = App\pages::orderBy('id', 'desc')->get();
  ?>
  <?php echo $__env->make('welcome.Navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.home_desc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.items', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.POPULAR', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.latest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.brand', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <?php echo $__env->make('welcome.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
    <?php echo $__env->yieldContent('js'); ?>
  </body>
</html>
