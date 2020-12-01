<?php
    if (Session::get('app_locale') == 'ar') {
      App::setLocale('ar');
    } else {
      App::setLocale('en');
      Session::put(App::setLocale('en'));
    }
?>


<?php $__env->startSection('title', @$page->name); ?>
<?php $__env->startSection('content'); ?>

<!-- ================= Start background Product ================= -->
  <div class="bac-img">
    <img src="<?php echo e(url('/img/bac/1.jpg')); ?>" />
  </div>
<!-- ================= End background Product ================= -->


    <!-- ================= Start Filter Product =================-->
    <div class="products-shop <?php if(App::isLocale('ar')): ?>  text-right  <?php endif; ?>">
      <div class="container">
        <form id="form" action="<?php echo e(url('/pages/'.$page->id)); ?>" method="get">
        <div class="row">
          <div class="col-md-3">
            <div class="filter-pro">
              <div class="cat">
                <h6><?php echo app('translator')->getFromJson('Browse Categories'); ?></h6>
                <?php if(count($pages) > 0): ?>
                <ul>
                  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li >
                    <?php if(App::isLocale('ar')): ?>
                      <a  href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <?php echo e(@$page->name_ar); ?></a>
                    <?php else: ?>
                      <a href="<?php echo e(url('/pages/'.@$page->id)); ?>"> <?php echo e(@$page->name); ?></a>
                    <?php endif; ?>
                    </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
              </div>


            </div>
          </div>
          <div class="col-md-9">
            <div class="filter-search">
              <div class="row">
                <div class="col-md-6">
                  <select class="custom-select" name="sort" id="sort">
                    <option><?php echo app('translator')->getFromJson('Sort by'); ?></option>
                    <option <?php if(request()->query('sort')== 'Title'): ?> selected <?php endif; ?>  value="Title"><?php echo app('translator')->getFromJson('Title'); ?></option>
                    <option <?php if(request()->query('sort')== 'Price'): ?> selected <?php endif; ?>  value="Price"><?php echo app('translator')->getFromJson('Price'); ?></option>
                    <option <?php if(request()->query('sort')== 'Date'): ?> selected <?php endif; ?>  value="Date"><?php echo app('translator')->getFromJson('Date'); ?></option>
                  </select>
                </div>

                <div class="col-md-6">
                  <select class="custom-select" name="show" id="show">
                    <option <?php if(request()->query('show')== 12): ?> selected <?php endif; ?> value="12"><?php echo app('translator')->getFromJson('Show'); ?> 12</option>
                    <option <?php if(request()->query('show') == 24): ?> selected <?php endif; ?> value="24"><?php echo app('translator')->getFromJson('Show'); ?>  24</option>
                    <option <?php if(request()->query('show') == 48): ?> selected <?php endif; ?> value="48"><?php echo app('translator')->getFromJson('Show'); ?>  48</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="all-pro">
              <div class="product">
                <div class="container">
                  <?php if($places->count() > 0): ?>
                  <div class="row">
                      <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-md-4">
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
                  <div class="row">
                    <div class="col-md-12">
                      <?php echo e($places->links('vendor.pagination.custom')); ?>

                    </div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>


          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ================= Start Filter Product =================-->
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
          setTimeout(function () {
              $("body").removeClass("loading");
          }, 1000);
        }
    });
    $(document).ready(function () {
      $('#show').on('change', function (e) {
        $("#form").submit();
      });
      $('#sort').on('change', function (e) {
        $("#form").submit();
      });
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
          alert( msg.message );
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
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
          alert( msg.message );
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
        });
      });
    });
  </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>