<?php
$about_as = App\about_as::first();
?>

<!-- ================================================================================ -->
    <!-- Start About Section -->
    <div class="about <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>"" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="about-info">
              <h3><?php echo app('translator')->getFromJson('About Us'); ?></h3>
              <p class="display-4">
                <?php if(App::isLocale('ar')): ?>
                <?php echo @$about_as->about_company_ar; ?>

                <?php else: ?>
                <?php echo @$about_as->about_company; ?>

                <?php endif; ?>
              </p>
            </div>
          </div>

          <div class="col-md-5">
            <div class="about-img">
              <img src="<?php echo e(@$user->image->name ? '/img/about_as/'.$about_as->image->name : url('/images/back_about.png')); ?>" alt="about image" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Section -->
