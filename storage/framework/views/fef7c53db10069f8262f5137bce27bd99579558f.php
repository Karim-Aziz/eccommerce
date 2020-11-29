  <?php
  $settings = App\settings::first();
  ?>
  <!-- Start Footer Section -->
    <div class="footer <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Scenic Products'); ?></h5>
            <ul class="list-group list-unstyled <?php if(App::isLocale('ar')): ?>  ar-list <?php endif; ?>">
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Web Design'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Graphic Design'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Web Developers'); ?> </li>
              <li>
                <i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Marketing Strategy'); ?>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Company'); ?></h5>
            <ul class="list-group list-unstyled <?php if(App::isLocale('ar')): ?>  ar-list <?php endif; ?>">
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Home'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('About Us'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Portfolio'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Contact'); ?> </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Support'); ?></h5>
            <ul class="list-group list-unstyled <?php if(App::isLocale('ar')): ?>  ar-list <?php endif; ?>">
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Supports'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Privacy'); ?> </li>
              <li><i class="fas <?php if(App::isLocale('ar')): ?> fa-caret-left ml-2 <?php else: ?> fa-caret-right mr-2 <?php endif; ?>"></i><?php echo app('translator')->getFromJson('Terms of Service'); ?> </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5"><?php echo app('translator')->getFromJson('Contact'); ?></h5>
            <div class="wrapper text-center">
              <div class="icon facebook">

                <div class="tooltip">Facebook</div>
                <a href="<?php echo e(@$settings->Facebook); ?>" target="_blank">
                  <span><i class="fab fa-facebook-f"></i></span>
                </a>
              </div>
              <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <a href="<?php echo e(@$settings->Twitter); ?>" target="_blank">
                  <span><i class="fab fa-twitter"></i></span>
                </a>
              </div>
              <div class="icon instagram">
                <div class="tooltip">Instagram</div>
                <a href="<?php echo e(@$settings->Instegram); ?>" target="_blank">
                  <span><i class="fab fa-instagram"></i></span>
                </a>
              </div>

              <div class="icon youtube">
                <div class="tooltip">YouTube</div>
                <a href="<?php echo e(@$settings->YouTube); ?>" target="_blank">
                  <span><i class="fab fa-youtube"></i></span>
                </a>
              </div>
            </div>
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
  <!-- End Footer Section -->

