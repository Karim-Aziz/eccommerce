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

<!-- ================= Start background Product ================= -->
    <div class="bac-img">
      <img src="<?php echo e(url('/img/bac/1.jpg')); ?>" />
    </div>
    <!-- ================= End background Product ================= -->
<!-- End background image -->
<!-- ================= Start Details Product ================= -->
  <div class="detals-product  <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?> ">
    <div class="container">
      <div class="card">
        <div class="wrapper row">
          <div class="preview col-md-5">
            <div class="preview-pic tab-content">
              <?php if(@$place->images ): ?>
                <?php $__currentLoopData = @$place->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="tab-pane <?php if($key == 0 ): ?>  active  <?php endif; ?>" id="pic-<?php echo e(@$image->id); ?>">
                    <img src="<?php echo e(@$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" />
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </div>

            <ul class="preview-thumbnail nav nav-tabs">
              <?php if(@$place->images ): ?>
                <?php $__currentLoopData = @$place->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class=" <?php if($key == 0 ): ?>  active  <?php endif; ?> ">
                    <a data-target="#pic-<?php echo e(@$image->id); ?>" data-toggle="tab"
                      >
                    <img src="<?php echo e(@$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" />
                    </a>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </ul>
          </div>

          <div class="details col-md-7">
            <h2>
               <?php if(App::isLocale('ar')): ?>
                <?php echo e(@$place->title_ar); ?>

              <?php else: ?>
                <?php echo e(@$place->title); ?>

              <?php endif; ?>
            </h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <h2>
              <span>
                <?php echo e(@$place->price_after_discount); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
              </span>
              <span class="sale">
                <?php echo e(@$place->price); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
              </span>
            </h2>

            <h6><?php echo app('translator')->getFromJson('Product Overview'); ?></h6>
            <?php if(App::isLocale('ar')): ?>
              <?php echo @$place->desc_ar; ?>

            <?php else: ?>
              <?php echo @$place->desc; ?>

            <?php endif; ?>

            <h6><?php echo app('translator')->getFromJson('Size'); ?></h6>
            <ul>
              <?php if($place->sizes_main->count() > 0): ?>
                <?php $__currentLoopData = $place->sizes_main; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                    <?php if(App::isLocale('ar')): ?>
                      <?php echo e(@$size->name_ar); ?>

                    <?php else: ?>
                      <?php echo e(@$size->name); ?>

                    <?php endif; ?>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </ul>

            <h6><?php echo app('translator')->getFromJson('Color'); ?></h6>
            <ul>
              <?php if($place->colors_main->count() > 0): ?>
                <?php $__currentLoopData = $place->colors_main; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                    <?php if(App::isLocale('ar')): ?>
                      <?php echo e(@$color->name_ar); ?>

                    <?php else: ?>
                      <?php echo e(@$color->name); ?>

                    <?php endif; ?>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </ul>

            <div class="add-cart">
              <a href="<?php echo e(url('/cart')); ?>" class="cart-icon" data-id="<?php echo e(@$place->id); ?>"> <?php echo app('translator')->getFromJson('Add To Cart'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ================= End Img Details Product ================= -->

  <!-- ================= Start Description ================= -->
  <div class="description <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?> ">
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button
                class="btn btn-link"
                type="button"
                data-toggle="collapse"
                data-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              ><?php echo app('translator')->getFromJson('description'); ?>

              </button>
            </h2>
          </div>

          <div
            id="collapseOne"
            class="collapse show"
            aria-labelledby="headingOne"
            data-parent="#accordionExample"
          >
            <div class="card-body">
              <?php if(App::isLocale('ar')): ?>
                <?php echo @$place->desc_ar; ?>

              <?php else: ?>
                <?php echo @$place->desc; ?>

              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button
                class="btn btn-link collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              > <?php echo app('translator')->getFromJson('review'); ?>

              </button>
            </h2>
          </div>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionExample"
          >
            <div class="card-body">
              <?php if(App::isLocale('ar')): ?>
                <?php echo @$place->desc_ar; ?>

              <?php else: ?>
                <?php echo @$place->desc; ?>

              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button
                class="btn btn-link collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              ><?php echo app('translator')->getFromJson('shipping'); ?>

              </button>
            </h2>
          </div>
          <div
            id="collapseThree"
            class="collapse"
            aria-labelledby="headingThree"
            data-parent="#accordionExample"
          >
            <div class="card-body">
              <?php if(App::isLocale('ar')): ?>
                <?php echo @$place->desc_ar; ?>

              <?php else: ?>
                <?php echo @$place->desc; ?>

              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ================= End Description ================= -->
<div class="overlay-load"></div>
<style>
    .clickable-row{
        cursor: pointer;
    }
    .cart .table .sale {
        text-decoration: line-through;
    }
    .overlay-load{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(255,255,255,0.8) url("<?php echo e(url('/images/loader.gif')); ?>") center no-repeat;
    }
    /* Turn off scrollbar when body element has the loading class */
    body.loading{
        overflow: hidden;
    }
    /* Make spinner image visible when body element has the loading class */
    body.loading .overlay-load{
        display: block;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php if(Auth::check()): ?>
  <script>
    $(document).on({
        ajaxStart: function(){
            $("body").addClass("loading");
        },
        ajaxStop: function(){
          $("body").removeClass("loading");
        }
    });
    $(document).ready(function () {
      $('.cart-icon').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var request = $.ajax({
          url: "/cart/add/"+id,
          type: "POST",
          data: {
            "_token": "<?php echo e(csrf_token()); ?>"
          },
          dataType: 'json',
        });

        request.done(function(msg) {
          $.ajax({
            url: "/cart/count",
            type: "POST",
            data: {
              "_token": "<?php echo e(csrf_token()); ?>"
            },
            dataType: 'json',
          }).done(function(value) {
            $('#badge-danger').html(value.message)
          });
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: msg.message,
            showConfirmButton: false,
            timer: 1500
          });

        });

        request.fail(function(jqXHR, textStatus) {
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: "Request failed: " + textStatus ,
            showConfirmButton: false,
            timer: 1500
          });
        });
      });
    });
  </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>