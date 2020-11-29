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

  <!-- =========== Start About Page =========== -->
    <div class="about-page <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-4">
            <div class="media mb-4">
              <i class="fas fa-user-md rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0"><?php echo app('translator')->getFromJson('Holds'); ?></h5>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$about_as->hold_1_ar); ?>

                <?php else: ?>
                  <?php echo e(@$about_as->hold_1); ?>

                <?php endif; ?>
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-book-open rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0"><?php echo app('translator')->getFromJson('Holds'); ?></h5>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$about_as->hold_2_ar); ?>

                <?php else: ?>
                  <?php echo e(@$about_as->hold_2); ?>

                <?php endif; ?>
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-calendar-alt rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0"><?php echo app('translator')->getFromJson('Holds'); ?></h5>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$about_as->hold_3_ar); ?>

                <?php else: ?>
                  <?php echo e(@$about_as->hold_3); ?>

                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <img src="images/pr_doc.png" alt="" />
          </div>

          <div class="col-md-4">
            <div class="media mb-4">
              <i class="fas fa-stethoscope rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0"><?php echo app('translator')->getFromJson('Holds'); ?></h5>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$about_as->hold_4_ar); ?>

                <?php else: ?>
                  <?php echo e(@$about_as->hold_4); ?>

                <?php endif; ?>
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-user-graduate rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0"><?php echo app('translator')->getFromJson('Holds'); ?></h5>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$about_as->hold_5_ar); ?>

                <?php else: ?>
                  <?php echo e(@$about_as->hold_5); ?>

                <?php endif; ?>
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-users rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0"><?php echo app('translator')->getFromJson('Holds'); ?></h5>
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$about_as->hold_6_ar); ?>

                <?php else: ?>
                  <?php echo e(@$about_as->hold_6); ?>

                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End About Page =========== -->

    <<!-- =========== Start Video  =========== -->
<?php
$Video = App\Video::first();
?>
    <div class="about <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>" data-aos="zoom-in" data-aos-duration="1500" >
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="about-info">
              <?php if(!App::isLocale('ar')): ?>
                <h5><?php echo e(@$Video->name); ?></h5>
                  <?php echo @$Video->desc; ?>

                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_1); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_2); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_3); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_4); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_5); ?>

                </p>
              <?php else: ?>
                <h5><?php echo e(@$Video->name_ar); ?></h5>
                <p>
                  <?php echo @$Video->desc_ar; ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_1_ar); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_2_ar); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_3_ar); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_4_ar); ?>

                </p>
                <p>
                  <i class="fas fa-check"></i> <?php echo e(@$Video->info_5_ar); ?>

                </p>
              <?php endif; ?>
              <button>
                <a href="<?php echo e(url('/about_us')); ?>">
                  <?php echo app('translator')->getFromJson('Learn more'); ?>  <i class="fas fa-plus"></i>
                </a>
              </button>
            </div>
          </div>

          <div class="col-md-7">
            <div class="video">
              <iframe
                src="<?php echo e(@$Video->video); ?>"
                frameborder="0"
                allow="autoplay; fullscreen"
                allowfullscreen=""
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Video  =========== -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>