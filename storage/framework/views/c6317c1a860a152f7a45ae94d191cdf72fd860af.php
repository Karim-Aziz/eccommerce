  <?php
  $settings = App\settings::first();
  ?>
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

