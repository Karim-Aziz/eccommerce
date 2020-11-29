<?php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
?>

<?php $__env->startSection('title'); ?> Account <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- ================= Start My Acount ================= -->
    <div class="my_acount  <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <?php if(\Session::has('success')): ?>
          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success">
                <ul>
                  <li><?php echo \Session::get('success'); ?></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <h1 class="mt-5 text-center"><?php echo app('translator')->getFromJson('My Account'); ?></h1>
        <div class="logoContainer">
          <img style="height: 100px;border-radius: 50%" src="<?php echo e(@$user->image->name ? '/img/users/'.$user->image->name : url('/dist/img/user2-160x160.jpg')); ?>">
        </div>
        <form role="form" action="<?php echo e(url('/user/edit/'.$user->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <div class="fileContainer sprite">
            <span><?php echo app('translator')->getFromJson('Personal Photo'); ?></span>
            <input type="file" value="Choose File" name="img"/>
            <?php if($errors->has('img')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('img')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label><?php echo app('translator')->getFromJson('full name'); ?></label>
            <input name="name" type="text" class="form-control"
              value="<?php echo e(old('name')? old('name'): $user->name); ?>">
              <?php if($errors->has('name')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('name')); ?></strong>
              </span>
              <?php endif; ?>
          </div>
          <div class="form-group">
            <label><?php echo app('translator')->getFromJson('Email Address'); ?></label>
            <input name="email" type="mail" class="form-control"
            value="<?php echo e(old('email')? old('email'): $user->email); ?>">
            <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label><?php echo app('translator')->getFromJson('phone'); ?></label>
            <input type="text" class="form-control" id="phone" placeholder="<?php echo app('translator')->getFromJson('phone'); ?>" name="phone"
                value="<?php echo e(old('phone')? old('phone'): $user->phone); ?>" required>
            <?php if($errors->has('phone')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('phone')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label><?php echo app('translator')->getFromJson('Password'); ?></label>
            <input name="password" type="password" class="form-control"
            placeholder="New Password">
            <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
            <?php endif; ?>
          </div>
          <button type="submit" class="btn btn-block btn-success"><?php echo app('translator')->getFromJson('Save'); ?></button>
        </form>
      </div>
    </div>
<!-- ================= End My Acount ================= -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>