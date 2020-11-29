<?php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
?>

<?php $__env->startSection('title'); ?> Login <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="login <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
        <a
            class="nav-link active"
            id="pills-home-tab"
            data-toggle="pill"
            href="#login"
            role="tab"
            aria-controls="pills-home"
            aria-selected="true"
            ><?php echo app('translator')->getFromJson('Login'); ?> </a
        >
        </li>
        <li class="nav-item">
        <a
            class="nav-link"
            id="pills-profile-tab"
            data-toggle="pill"
            href="#register"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            ><?php echo app('translator')->getFromJson('Create Account'); ?>
        </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div
        class="tab-pane fade show active"
        id="login"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
        >
        <div class="row">
            <div class="col-md-12">
            <!-- Start Form Login -->
            <form class="custom-form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <label for="email" ><?php echo app('translator')->getFromJson('Email Address'); ?></label>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required
                        autofocus>

                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <label for="password" ><?php echo app('translator')->getFromJson('Password'); ?></label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn-block"><?php echo app('translator')->getFromJson('Sign In'); ?></button>
            </form>
            <!-- End Form Login -->
            </div>
        </div>
        </div>
        <div
        class="tab-pane fade"
        id="register"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
        >
        <div class="row">
            <div class="col-md-12">
            <!-- Start Form Login -->
            <form role="form" action="<?php echo e(route('register')); ?>" method="post" enctype="multipart/form-data" class="custom-form">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label><?php echo app('translator')->getFromJson('full name'); ?></label>
                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                    <?php if($errors->has('name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label><?php echo app('translator')->getFromJson('Email Address'); ?></label>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"  required>

                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label><?php echo app('translator')->getFromJson('Password'); ?></label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label><?php echo app('translator')->getFromJson('Personal Photo'); ?></label>
                    <input name="img" class="form-control" type="file">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('img')); ?></strong>
                    </span>
                </div>
                <button type="submit" class="btn-block">
                    <?php echo app('translator')->getFromJson('Create Account'); ?>
                </button>
            </form>
            <!-- End Form Login -->
            </div>
        </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>