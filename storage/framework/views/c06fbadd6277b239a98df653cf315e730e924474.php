<?php
    $places = App\places::orderBy('view', 'ascd')->take(5)->get();
?>

<?php if($places->count() > 0): ?>
<!--  ======================= Start Latest Products =============================  -->
  <div class="product">
    <div class="container">
      <div class="title-section mb-5 <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
        <h2 class="text-uppercase"><?php echo app('translator')->getFromJson('POPULAR PRODUCTS'); ?></h2>
      </div>
      <div id="product-all-2" class="owl-carousel owl-theme">
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
          <div class="product-top">
            <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>">
            <?php
              if (@$place->images ) {
                foreach ($place->images as $image) {
                  $src =  '/img/places_images/'.$image->name ;
                  break;
                }
              } else {
                $src = null;
              }
            ?>
            <img src="<?php echo e(@$src ? @$src : url('/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(@$place->name); ?>" />
            </a>
            <div class="overlay-right">

              <button
                type="button"
                class="btn btn-secondary"
                title="Quick Shop"
              >
                <a href="<?php echo e(url('/pages/place/'.$place->id)); ?>"><i class="fas fa-eye"></i></a>
              </button>

              <button
                type="button"
                class="btn btn-secondary"
                title="Add To Wishlist"
              >
                <a href="<?php echo e(url('/favorite')); ?>" class="favorite" data-id="<?php echo e(@$place->id); ?>"><i class="fas fa-heart"></i></a>
              </button>

              <button
                type="button"
                class="btn btn-secondary"
                title="Add To Cart"
              >
                <a href="<?php echo e(url('/cart')); ?>" class="cart-icon" data-id="<?php echo e(@$place->id); ?>"><i class="fas fa-cart-arrow-down"></i></a>
              </button>
            </div>
          </div>
          <div class="product-bottom text-center">
            <?php if(@$place->sale): ?>
              <span class="custom-sale"><?php echo app('translator')->getFromJson('Sale'); ?> </span>
            <?php endif; ?>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <h3>
              <?php if(App::isLocale('ar')): ?>
                <?php echo e(@$place->title_ar); ?>

              <?php else: ?>
                <?php echo e(@$place->title); ?>

              <?php endif; ?>
            </h3>
            <h5>
              <?php if(@$place->sale): ?>
                <span class="text-secondary sale">
                  <?php echo e(@$place->price_after_discount); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
                </span>
              <?php endif; ?>
              <span class="text-secondary">
                <?php echo e(@$place->price); ?> <?php if(App::isLocale('ar')): ?> جنية <?php else: ?> EL <?php endif; ?>
              </span>
            </h5>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<!--  ======================= End  Latest Products =============================  -->
<div class="overlay-load"></div>

<?php endif; ?>
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
        /*setTimeout(function () {
              $("body").removeClass("loading");
          }, 1000);*/
    });
    $(document).ready(function () {
      $('.favorite').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var request = $.ajax({
          url: "/favorite/add/"+id,
          type: "POST",
          data: {
            "_token": "<?php echo e(csrf_token()); ?>"
          },
          dataType: 'json',
        });

        request.done(function(msg) {
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
