<?php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
?>

<?php $__env->startSection('title','About As'); ?>
<?php $__env->startSection('content'); ?>

  <!-- Start About Page -->
  <div class="back-color">
    <div class="container">
      <h1><?php echo app('translator')->getFromJson('About Us'); ?></h1>
    </div>
  </div>
  <!-- End About Page -->
  <!-- Start About Us Section -->
  <div class="about-us <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>" ddata-aos="fade-up" data-aos-duration="3000" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5><?php echo app('translator')->getFromJson('About Us'); ?></h5>
          <p class="display-4">
            <?php if(App::isLocale('ar')): ?>
            <?php echo @$about_as->about_company_ar; ?>

            <?php else: ?>
            <?php echo @$about_as->about_company; ?>

            <?php endif; ?>
          </p>
        </div>

        <div class="col-md-5">
          <img class="mt-4" src="images/about.png" alt="About Us" />
        </div>
      </div>
    </div>
  </div>
  <!-- End About Us Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>