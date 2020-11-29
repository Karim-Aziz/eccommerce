<?php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
?>


<?php $__env->startSection('title', @$place->name); ?>
<?php $__env->startSection('content'); ?>

<style>
    .background_section {
      background: linear-gradient(rgb(0 0 0 / 65%), rgb(67 49 44)), url("<?php echo e(url('/images/details.jpg')); ?>");
      height: 400px;
      width: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
  </style>
<!-- Start background image -->
  <div class="background_section"></div>
<!-- End background image -->
<!-- Start Details Products -->
    <div class="details_product <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?> ">
      <div class="container">
        <?php if(session()->has('success')): ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

              </div>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">

        <?php if($place): ?>
          <div class="col-md-5">
            <div class="slider_images">
              <div class="owl-carousel owl-theme" id="details_product">
              <?php $__currentLoopData = @$place->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">

                  <img src="<?php echo e(@$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" />
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
          <div class="col-md-7">

            <div class="det_info">
              <h5 class="mb-4 mt-4">
                <?php if(App::isLocale('ar')): ?>
                  <?php echo e(@$place->title_ar); ?>

                <?php else: ?>
                  <?php echo e(@$place->title); ?>

                <?php endif; ?>
              </h5>
              <b>
                <span>
                  <?php if(App::isLocale('ar')): ?>
                    <?php echo e(@$place->price_after_discount_ar); ?>

                  <?php else: ?>
                    <?php echo e(@$place->price_after_discount); ?>

                  <?php endif; ?>
                </span>
                <span class="sale">
                  <?php if(App::isLocale('ar')): ?>
                    <?php echo e(@$place->price_ar); ?>

                  <?php else: ?>
                    <?php echo e(@$place->price); ?>

                  <?php endif; ?>
                </span>
              </b>
              <p class="mt-4">
                <?php if(App::isLocale('ar')): ?>
                  <?php echo @$place->desc_ar; ?>

                <?php else: ?>
                  <?php echo @$place->desc; ?>

                <?php endif; ?>
              </p>
              <div class='info-buttons'>
                <a class="back" href="<?php echo e(url('/')); ?>"><?php echo app('translator')->getFromJson('Back To Home'); ?></a>
                <!-- Start Butom Order -->
                <!-- Button trigger modal -->
                <button
                  class="order_mod"
                  type="button"
                  data-toggle="modal"
                  data-target="#staticBackdrop"
                >
                  <?php echo app('translator')->getFromJson('Add Your Ordar'); ?>
                </button>
              </div>
              <!-- Modal -->
              <div
                class="modal fade"
                id="staticBackdrop"
                data-backdrop="static"
                data-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form role="form" class="text-center" action="<?php echo e(url('/requests/'.@$place->id)); ?>" method="post">
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
                                  <input type="text" class="form-control" id="number" placeholder="<?php echo app('translator')->getFromJson('number'); ?>" name="number"
                                      value="<?php echo e(old('number')); ?>" required>
                                  <?php if($errors->has('number')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('number')); ?></strong>
                                  </span>
                                  <?php endif; ?>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                              <div class="form-group">
                                  <input type="text" class="form-control" id="Address" placeholder="<?php echo app('translator')->getFromJson('Address'); ?>"
                                      name="Address" value="<?php echo e(old('Address')); ?>" required>
                                  <?php if($errors->has('Address')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('Address')); ?></strong>
                                  </span>
                                  <?php endif; ?>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <select class="custom-select mb-3" name="Size">
                              <option selected value="0"><?php echo app('translator')->getFromJson('Size'); ?></option>
                              <option value="Sm">Sm</option>
                              <option value="Lg">Lg</option>
                              <option value="Xl">Xl</option>
                              <option value="Xxl">Xxl</option>
                            </select>
                            <?php if($errors->has('Size')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('Size')); ?></strong>
                            </span>
                            <?php endif; ?>
                          </div>
                          <div class="col-md-6">
                            <select class="custom-select mb-3" name="Color">
                              <option selected value="0"><?php echo app('translator')->getFromJson('Color'); ?></option>
                              <option value="Red">Red</option>
                              <option value="Black">Black</option>
                              <option value="Orange">Orange</option>
                              <option value="Other">Other</option>
                            </select>
                            <?php if($errors->has('Color')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('Color')); ?></strong>
                            </span>
                            <?php endif; ?>
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
                        <button type="submit" class="btn-block send_form"><?php echo app('translator')->getFromJson('Send'); ?></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- End Details Products -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>