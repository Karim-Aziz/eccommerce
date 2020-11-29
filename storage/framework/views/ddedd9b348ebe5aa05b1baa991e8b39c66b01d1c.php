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
  <title> Simle Pure | <?php echo $__env->yieldContent('title'); ?> </title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <!-- Google Font -->

  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap"
    rel="stylesheet" />

  <!-- =========== Import slick =========== -->
    <link rel="stylesheet" href="<?php echo e(url('/lib/slick/slick/slick.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('/lib/slick/slick/slick-theme.css')); ?>" />

  <!-- =========== Import Aos =========== -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />


  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="<?php echo e(url('/css/custom.css')); ?>" />


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
    $pages = App\pages::all();
  ?>
  <?php echo $__env->make('welcome.Navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.home_desc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.Info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('welcome.services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.Video', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.CLINIC', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('welcome.testimonials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <?php echo $__env->make('welcome.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<!-- =========== Start Js Files=========== -->
    <!-- =========== Import Bootstrap Js Files =========== -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <!-- =========== Import slick =========== -->
    <script src="<?php echo e(url('/lib/slick/slick/slick.min.js')); ?>"></script>
    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <!-- =========== Import Aos =========== -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- =========== Import Custom Js =========== -->

    <?php if(App::isLocale('ar')): ?>
      <script src="js/custom_ar.js"></script>
    <script src="js/type_custom_ar.js"></script>
    <?php else: ?>
      <script src="<?php echo e(url('/js/custom.js')); ?>"></script>
    <script src="<?php echo e(url('/js/type_custom.js')); ?>"></script>
    <?php endif; ?>


    </body>

</html>
