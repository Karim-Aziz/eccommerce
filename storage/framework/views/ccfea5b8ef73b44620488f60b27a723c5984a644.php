<?php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
?>

<?php $__env->startSection('title'); ?> Contact Us <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contact <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <div class="con-bac">
          <div class="row" data-aos="zoom-in" data-aos-duration="1500">
            <div class="col-md-7">
              <div class="contact-info">
                <h1><?php echo app('translator')->getFromJson('Contact Us'); ?></h1>
                <p>
                  <?php if(App::isLocale('ar')): ?>
                    <?php echo @$settings->contact_us_ar; ?>

                  <?php else: ?>
                    <?php echo @$settings->contact_us; ?>

                  <?php endif; ?>
                </p>
                <?php if(session()->has('message')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session()->get('message')); ?>

                  </div>
                <?php endif; ?>
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
              <img class="mt-5" src="images/contact.png" alt="" srcset="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Contact Page =========== -->



  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>