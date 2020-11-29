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
          <div class="col-lg-4 <?php if(App::isLocale('ar')): ?>  text-left <?php else: ?>  text-right <?php endif; ?>">
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
<!-- =========== Start Icons  =========== -->
    <div class="fix-icons">
      <a href="<?php echo e(@$settings->Facebook); ?>" data-toggle="tooltip" data-placement="right" title="Facebook" target="_blank"
        ><i class="fab fa-facebook-f" ></i
      ></a>

      <a href="tel:<?php echo e(@$settings->phone); ?>" data-toggle="tooltip" data-placement="right" title="Phone"
        ><i class="fas fa-phone-volume"></i
      ></a>

      <a href="whatsapp://send?abid=<?php echo e(@$settings->phone); ?>&text=Hello" data-toggle="tooltip" data-placement="right" title="Whatsapp"
        ><i class="fab fa-whatsapp"></i
      ></a>
    </div>
    <!-- =========== End Icons  =========== -->


    <!-- ***************************************************************** -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- =========== Start Footer  =========== -->
    <div class="footer <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img class="mb-5" src="<?php echo e(url('/img/logo/'.@$settings->logoFooter->name)); ?>" alt="logo footer" />
            <?php if(App::isLocale('ar')): ?>
              <?php echo @$settings->footer_text_ar; ?>

            <?php else: ?>
              <?php echo @$settings->footer_text; ?>

            <?php endif; ?>
          </div>

          <div class="col-md-3">
            <h5 class="mb-5"> <?php echo app('translator')->getFromJson('Dr. services'); ?></h5>
            <ul class="list-group list-unstyled">
              <?php if(count($pages) > 0): ?>
                  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                      <?php if(App::isLocale('ar')): ?>
                        <a href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <i class="fas fa-link"></i> <?php echo e(@$page->name_ar); ?></a>
                      <?php else: ?>
                        <a href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <i class="fas fa-link"></i> <?php echo e(@$page->name); ?></a>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>

            </ul>
          </div>

          <div class="col-md">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Important links'); ?></h5>
            <ul class="list-group list-unstyled">
              <li>
                <a href="<?php echo e(url('/about_us')); ?>"> <i class="fas fa-link"></i> <?php echo app('translator')->getFromJson('About Doctor'); ?>  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> <?php echo app('translator')->getFromJson('Service'); ?>  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> <?php echo app('translator')->getFromJson('Article'); ?>  </a>
              </li>
              <li>
                <a href="<?php echo e(url('/contact')); ?>"> <i class="fas fa-link"></i> <?php echo app('translator')->getFromJson('Contact Us'); ?> </a>
              </li>
            </ul>
          </div>

          <div class="col-md">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Contact Us'); ?></h5>
            <div class="footer-icon">
              <a href="<?php echo e(@$settings->Facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="<?php echo e(@$settings->Twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="<?php echo e(@$settings->YouTube); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
              <a href="<?php echo e(@$settings->Instegram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <ul class="list-group list-unstyled">
              <li>
                <a href="#">
                  <i class="fas fa-phone-alt mr-2"></i><?php echo e(@$settings->phone); ?>

                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fas fa-mail-bulk mr-2"></i><?php echo e(@$settings->email); ?>

                </a>
              </li>
            </ul>
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
    <!-- =========== End Footer  =========== -->


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
    <script src="<?php echo e(url('/js/custom.js')); ?>"></script>
    <script src="<?php echo e(url('/js/type_custom.js')); ?>"></script>

    </body>

</html>
