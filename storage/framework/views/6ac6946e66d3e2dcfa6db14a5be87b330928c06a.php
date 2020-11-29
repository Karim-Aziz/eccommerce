<?php
if (Session::get('app_locale') == 'ar') {
    $home_desc = App\home_desc::select('desc_ar AS description')->first();
} else {
App::setLocale('en');
    $home_desc = App\home_desc::select('desc AS description')->first();
}
?>
<!-- Start Landing Page -->
  <div class="landing-page <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
    <div class="page-content" data-aos="flip-left" data-aos-duration="2000">
        <?php if(isset($home_desc->description)): ?>
            <?php echo $home_desc->description; ?>

        <?php endif; ?>

      <a href="#">Get in touch</a>
    </div>
  </div>
  <!-- End Landing Page -->

