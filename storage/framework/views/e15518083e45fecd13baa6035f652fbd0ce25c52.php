<?php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
?>

<?php $__env->startSection('title','Contact Us'); ?>
<?php $__env->startSection('content'); ?>
<!-- Start About Page -->
  <div class="back-color">
    <div class="container">
      <h1><?php echo app('translator')->getFromJson('CONTACT US'); ?></h1>
    </div>
  </div>
  <!-- End About Page -->

  <!-- Start Contact Section -->
  <div class="contact <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
      <div class="title-contact">
        <h5 class="text-uppercase text-center"><?php echo app('translator')->getFromJson('CONTACT US'); ?></h5>
        <h2 class="text-uppercase text-center"><?php echo app('translator')->getFromJson('Have a Project?'); ?></h2>
      </div>

      <div class="row">
        <div class="col-md-7">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
          <div class="contact-form">
            <form role="form" class="text-center" action="<?php echo e(url('/contact/insert')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

              <div class="row">
                <div class="col">
                  <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="<?php echo app('translator')->getFromJson('Name'); ?>" name="name"
                            value="<?php echo e(old('name')); ?>" required>
                        <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col">
                  <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="<?php echo app('translator')->getFromJson('phone'); ?>" name="phone"
                            value="<?php echo e(old('phone')); ?>" required>
                        <?php if($errors->has('phone')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="<?php echo app('translator')->getFromJson('Email'); ?>"
                            name="email" value="<?php echo e(old('email')); ?>" required>
                        <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" name="message"
                            placeholder="<?php echo app('translator')->getFromJson('Your Message'); ?>"><?php echo e(old('message')); ?></textarea>
                        <?php if($errors->has('message')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('message')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
              </div>
              <button type="submit" class="btn-block"><?php echo app('translator')->getFromJson('Send'); ?></button>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="media mb-4 mt-4">
            <i class="fas fa-map-marker-alt <?php if(App::isLocale('ar')): ?>   ml-3 <?php else: ?>  mr-3  <?php endif; ?>"></i>
            <div class="media-body">
              <h5><?php echo app('translator')->getFromJson('Address'); ?>:</h5>
              <?php echo e(@$settings->location); ?>

            </div>
          </div>

          <div class="media mb-4">
            <i class="fas fa-phone-alt <?php if(App::isLocale('ar')): ?>   ml-3 <?php else: ?>  mr-3  <?php endif; ?>"></i>
            <div class="media-body">
              <h5><?php echo app('translator')->getFromJson('Phone'); ?>:</h5>
              <?php echo e(@$settings->phone); ?>

            </div>
          </div>

          <div class="media mb-4">
            <i class="far fa-envelope <?php if(App::isLocale('ar')): ?>   ml-3 <?php else: ?>  mr-3  <?php endif; ?>"></i>
            <div class="media-body">
              <h5><?php echo app('translator')->getFromJson('Email'); ?>:</h5>
              <?php echo e(@$settings->email); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Section -->


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>