<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Edit Settings
    </h1>
</section>
<div class="row">
    <div class="col-sm-12">
        <?php if(\Session::has('success')): ?>
        <div class="alert alert-success">
            <ul>
                <li><?php echo \Session::get('success'); ?></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <form role="form" action="<?php echo e(url('/siteAdmin/settings/edit')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="box-body">
                        <div class="form-group">
                            <label>phone</label>
                            <input name="phone" type="text" class="form-control"
                                value="<?php echo e(old('phone')? old('phone'): @$settings->phone); ?>" required>
                            <?php if($errors->has('phone')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('phone')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input name="email" type="email" class="form-control"
                                value="<?php echo e(old('email')? old('email'): @$settings->email); ?>" required>
                            <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>location</label>
                            <input name="location" type="text" class="form-control"
                                value="<?php echo e(old('location')? old('location'): @$settings->location); ?>" required>
                            <?php if($errors->has('location')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('location')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>YouTube</label>
                            <input name="YouTube" type="text" class="form-control"
                                value="<?php echo e(old('YouTube')? old('YouTube'): @$settings->YouTube); ?>" required>
                            <?php if($errors->has('YouTube')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('YouTube')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Instegram</label>
                            <input name="Instegram" type="text" class="form-control"
                                value="<?php echo e(old('Instegram')? old('Instegram'): @$settings->Instegram); ?>" required>
                            <?php if($errors->has('Instegram')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('Instegram')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input name="Twitter" type="text" class="form-control"
                                value="<?php echo e(old('Twitter')? old('Twitter'): @$settings->Twitter); ?>" required>
                            <?php if($errors->has('Twitter')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('Twitter')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>Facebook</label>
                            <input name="Facebook" type="text" class="form-control"
                                value="<?php echo e(old('Facebook')? old('Facebook'): @$settings->Facebook); ?>" required>
                            <?php if($errors->has('Facebook')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('Facebook')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Contact US</label>
                            <textarea id="contact_us" class="form-control ckeditor" name="contact_us"
                                required><?php echo old('contact_us') ?  old('contact_us') : @$settings->contact_us; ?></textarea>
                            <?php if($errors->has('contact_us')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('contact_us')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Contact US Arbic</label>
                            <textarea id="contact_us_ar" class="form-control ckeditor" name="contact_us_ar"
                                required><?php echo old('contact_us_ar') ?  old('contact_us_ar') : @$settings->contact_us_ar; ?></textarea>
                            <?php if($errors->has('contact_us_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('contact_us_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>footer text</label>
                            <textarea id="footer_text" class="form-control ckeditor" name="footer_text"
                                required><?php echo old('footer_text') ?  old('footer_text') : @$settings->footer_text; ?></textarea>
                            <?php if($errors->has('footer_text')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('footer_text')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>footer text Arbic</label>
                            <textarea id="footer_text_ar" class="form-control ckeditor" name="footer_text_ar"
                                required><?php echo old('footer_text_ar') ?  old('footer_text_ar') : @$settings->footer_text_ar; ?></textarea>
                            <?php if($errors->has('footer_text_ar')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('footer_text_ar')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <img style=" height: 128px;width: auto;border: 1px solid #ccc; padding: 2px "
                                src="<?php echo e('/img/logo/'. @$settings->logo->name); ?>">
                            <input name="logo_id" class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label>footer logo</label>
                            <img style=" height: 128px;width: auto;border: 1px solid #ccc; padding: 2px "
                                src="<?php echo e('/img/logo/'. @$settings->logoFooter->name); ?>">
                            <input name="logo_footer_id" class="form-control" type="file">
                        </div>


                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('/ckeditor/ckeditor.js')); ?>"></script>
<script type="application/javascript">
    $(document).ready(function () {
        CKEDITOR.config.contentsLangDirection = 'rtl';
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>