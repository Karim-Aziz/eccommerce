<?php $__env->startSection('title'); ?>
    Article
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- ***************************************************************** -->
    <!-- Start title-article -->
    <div class="title-article">
        <div class="container-fluid">
            <div class="row">
                <img src="img/article.jpg">
            </div>
        </div>
    </div>
    <!-- End  title-section -->
    <!-- ***************************************************************** -->
    <!-- Start Sections -->
    <div class="section sections-article">
        <div class="container">
            <div class="row mb-4 my-3">
                <?php $__currentLoopData = $articles_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--Card-->
                    <div class=" col-lg-4 col-md-6 text-right mb-3 ">
                        <a class="link-card" href="<?php echo e(url('/articles_categories/'.$category->id)); ?>">
                            <div class="card img-thumbnail bg-dark">
                                <!--Card image-->
                                <img src="<?php echo e('/img/articles_categories/'.@$category->image->name); ?>" class="card-img-top" alt="<?php echo e($category->name); ?>">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h3 class="card-title"><?php echo e($category->name); ?></h3>
                                    <!--Text-->
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/.Card-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- End  Sections -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>