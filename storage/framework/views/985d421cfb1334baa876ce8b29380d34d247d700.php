<?php
$about_as = App\about_as::first();
?>
<!-- Start About Us Section -->
  <div class="about-us <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000" id="about">
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
