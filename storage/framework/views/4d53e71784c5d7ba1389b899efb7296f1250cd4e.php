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
        <h1 class="mt-5 text-center">My Acount</h1>
        <div class="logoContainer">
          <img
            src="http://img1.wikia.nocookie.net/__cb20130901213905/battlebears/images/9/98/Team-icon-placeholder.png"
          />
        </div>
        <div class="fileContainer sprite">
          <span>choose file</span>
          <input type="file" value="Choose File" />
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