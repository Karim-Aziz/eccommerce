 <?php
 $pages = App\pages::all();
 ?>
<?php if($pages->count() > 0): ?>
 <!--  ======================= Start Our Travels ============================== -->
 <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="travels wow fadeInUp">
     <a href="<?php echo e(url('/pages/'.$page->id)); ?>">
        <?php if(App::isLocale('ar')): ?>
            <h1 class="text-center border-buttom"><?php echo e($page->name_ar); ?></h1>
        <?php else: ?>
            <h1 class="text-center border-buttom"><?php echo e($page->name); ?></h1>
        <?php endif; ?>
     </a>
     <div class="container">
         <div class="travels-owl">
         <div id="owl-travels-<?php echo e($page->id); ?>" class="owl-carousel owl-theme">
                <?php if(App::isLocale('ar')): ?>
                    <?php $__currentLoopData = @$page->places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="card">
                                <a href="<?php echo e(url('/places/'.@$place->id)); ?>">
                                    <img src="<?php echo e('/img/places_images/'.@$place->first_image); ?>"
                                        alt="<?php echo e($place->title_ar); ?>" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <h5><?php echo e($place->title_ar); ?></h5>
                                    <div class="row text-center">
                                        <div class="col">
                                            <h6><?php echo e($place->feature1_ar); ?></h6>
                                        </div>
                                        <div class="col">
                                            <h6><?php echo e($place->feature2_ar); ?></h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row text-center">
                                        <div class="col">
                                            <h6><?php echo e($place->feature3_ar); ?></h6>
                                        </div>
                                        <div class="col">
                                            <h6><?php echo e($place->feature4_ar); ?></h6>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(url('/places/'.@$place->id)); ?>">
                                        <button class="btn-card btn-block"><?php echo app('translator')->getFromJson('Explore'); ?></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = @$page->places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="card">
                            <a href="<?php echo e(url('/places/'.@$place->id)); ?>">
                                <img src="<?php echo e('/img/places_images/'.@$place->first_image); ?>"
                                    alt="<?php echo e($place->title_ar); ?>" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h5><?php echo e($place->title); ?></h5>
                                <div class="row text-center">
                                    <div class="col">
                                        <h6><?php echo e($place->feature1); ?></h6>
                                    </div>
                                    <div class="col">
                                        <h6><?php echo e($place->feature2); ?></h6>
                                    </div>
                                </div>
                                <hr>
                                <div class="row text-center">
                                    <div class="col">
                                        <h6><?php echo e($place->feature3); ?></h6>
                                    </div>
                                    <div class="col">
                                        <h6><?php echo e($place->feature4); ?></h6>
                                    </div>
                                </div>
                                <a href="<?php echo e(url('/places/'.@$place->id)); ?>">
                                    <button class="btn-card btn-block"><?php echo app('translator')->getFromJson('Explore'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                 
                 
             </div>
         </div>
     </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <!--  ======================= End Our Travels ============================== -->

 <?php endif; ?>

