<!-- Start Contact Seaction -->
    <div class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="mb-5"><?php echo app('translator')->getFromJson('Contact Us'); ?></h3>
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
          <div class="col-md-6">
            <div class="location">
              <iframe
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              ></iframe
              ><a href="https://www.maps.ie/route-planner.htm"
                >Road Trip Planner</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Seaction -->
