<?php
if (Session::get('app_locale') == 'ar') {
    $home_desc = App\home_desc::select('desc_ar AS description')->first();
} else {
App::setLocale('en');
    $home_desc = App\home_desc::select('desc AS description')->first();
}
?>
<!-- =========== Start Full Img  =========== -->
    <div class="landing-page <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="page-content">
          <?php if(App::isLocale('ar')): ?>
            <h1>دكتور / <span class="type"></span></h1>
          <?php else: ?>
          <h1>DR. <span class="type"></span></h1>
          <?php endif; ?>
          <?php if(isset($home_desc->description)): ?>
              <?php echo $home_desc->description; ?>

          <?php endif; ?>
          <a href="#"> <?php echo app('translator')->getFromJson('Doctor Service'); ?></a>
        </div>
      </div>
    </div>
    <!-- =========== End Full Img  =========== -->

    <!-- =========== Start Icons  =========== -->
    <div class="fix-icons">
      <a href="<?php echo e(@$settings->Facebook); ?>" data-toggle="tooltip" data-placement="right" title="Facebook" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a href="tel:<?php echo e(@$settings->phone); ?>" data-toggle="tooltip" data-placement="right" title="Phone"
        ><i class="fas fa-phone-volume"></i
      ></a>

      <a href="whatsapp://send?abid=<?php echo e(@$settings->phone); ?>&text=Hello" data-toggle="tooltip" data-placement="right" title="Whatsapp"
        ><i class="fab fa-whatsapp"></i
      ></a>
    </div>
    <!-- =========== End Icons  =========== -->

