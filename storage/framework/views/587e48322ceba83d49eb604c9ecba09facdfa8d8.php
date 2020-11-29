<!-- =========== Start Video  =========== -->
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
