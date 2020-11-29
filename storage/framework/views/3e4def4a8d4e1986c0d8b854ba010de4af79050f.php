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
  <title> Small Shop | <?php echo $__env->yieldContent('title'); ?> </title>
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

  <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="<?php echo e(url('/lib/OwlCarousel2/dist/assets/owl.carousel.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('/lib/OwlCarousel2/dist/assets/owl.theme.default.min.css')); ?>" />


  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="<?php echo e(url('/css/custom.css')); ?>" />


  <!-- Media Style -->
  <link rel="stylesheet" href="<?php echo e(url('/css/media.css')); ?>" />
  <?php if(App::isLocale('ar')): ?>
    <!-- Import Custom Styles AR File -->
    <link rel="stylesheet" href="<?php echo e(url('/css/custom_ar.css')); ?>" />
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




<body>
    <?php
    $settings = App\settings::first();
    $pages = App\pages::orderBy('id', 'desc')->get();
    ?>
    

<!-- =========== Start Icons  =========== -->
    <div class="fix-icons">
      <a href="<?php echo e(@$settings->Facebook); ?>" data-toggle="tooltip" data-placement="right" title="Facebook" target="_blank"
        ><i class="fab fa-facebook-f" ></i
      ></a>

      <a href="tel:<?php echo e(@$settings->phone); ?>" data-toggle="tooltip" data-placement="right" title="Phone"
        ><i class="fas fa-phone-volume"></i
      ></a>
      <a href="whatsapp://send?abid=<?php echo e(str_replace('+', '', @$settings->phone)); ?>&text=Hello" data-toggle="tooltip" data-placement="right" title="Whatsapp" >
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
    <!-- =========== End Icons  =========== -->


    <!-- ***************************************************************** -->
    <?php echo $__env->yieldContent('content'); ?>
   <!-- Start Footer -->
    <div class="footer text-center">
      <a href="http://vudigitalsolution.com/"
        >Developed by Vu Digital Solution</a
      >
    </div>
    <!-- End Footer -->


    <!-- End Contact Seaction -->

    <!-- ================================================================================ -->
    <!-- Bootstrap Js Files -->
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
    <!-- OwlCarousel2 -->
    <script src="<?php echo e(url('/lib/OwlCarousel2/dist/owl.carousel.min.js')); ?>"></script>
    <!-- Isotope -->
    <script src="<?php echo e(url('/lib/isotope.min.js')); ?>"></script>
    <!-- Custom Js Files -->
    <script src="<?php echo e(url('/js/custom.js')); ?>"></script>

  </body>
</html>
