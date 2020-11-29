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
    <div class="my_acount">
      <div class="container">
        <h1 class="mt-5 text-center"><?php echo app('translator')->getFromJson('My Account'); ?></h1>
        <div class="logoContainer">
          <img style="height: 100px;border-radius: 50%" src="<?php echo e(@$user->image->name ? '/img/users/'.$user->image->name : url('/dist/img/user2-160x160.jpg')); ?>">
        </div>
        <div class="fileContainer sprite">
          <span><?php echo app('translator')->getFromJson('choose image'); ?></span>
          <input type="file" value="Choose File" name="img"/>
        </div>
        <form>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" />
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" />
          </div>
          <button type="submit" class="btn btn-secondary">Save</button>
        </form>
      </div>
    </div>
<!-- ================= End My Acount ================= -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>