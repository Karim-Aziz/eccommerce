<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
    <style>
        .help-block {
            color: red;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="<?php echo e(url('/siteAdmin')); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>M</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"> Small Shop </span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                            <img src="<?php echo e(@Auth::user()->image->name ? '/img/users/'.@Auth::user()->image->name : url('/dist/img/user2-160x160.jpg')); ?>"
                                class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?php echo e(@Auth::user()->image->name ? '/img/users/'.@Auth::user()->image->name : url('/dist/img/user2-160x160.jpg')); ?>"
                                        class="img-circle"
                                        alt="User Image">

                                    <p>
                                        <?php echo e(Auth::user()->name); ?>

                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="<?php echo e(route('logout')); ?>" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); ">
                                        logout</a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </div>

                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                    <img src="<?php echo e(@Auth::user()->image->name ? '/img/users/'.@Auth::user()->image->name : url('/dist/img/user2-160x160.jpg')); ?>"
                        class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo e(Auth::user()->name); ?></p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <ul class="sidebar-menu " data-widget="tree">
                    <li class="header">Manage Website</li>
                    <li>
                        <a href="/" target="blank">
                            <i class="fa fa-home"></i> <span>Preview Site</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-image"></i>
                            <span>Home slider</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            
                            <li>
                                <a href="<?php echo e(url('/siteAdmin/slider/show')); ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Show / Edit
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-address-book" ></i>
                            <span>About Us</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li>
                                <a href="<?php echo e(url('/siteAdmin/about_us/show')); ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Show / Edit
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                            <span>categories</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/siteAdmin/pages/add">
                                    <i class="fa fa-circle-o"></i> Add category
                                </a>
                            </li>
                            <li>
                                <a href="/siteAdmin/pages/show">
                                    <i class="fa fa-circle-o"></i> Show / Edit categories
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            <span>Shop Items</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li>
                                <a href="/siteAdmin/places/add">
                                    <i class="fa fa-circle-o"></i> Add Item
                                </a>
                            </li>
                            <li>
                                <a href="/siteAdmin/places/show">
                                    <i class="fa fa-circle-o"></i> Show / Edit Items
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>User</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo e(url('/siteAdmin/user/add')); ?>">
                                    <i class="fa fa-circle-o"></i> Add
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/siteAdmin/user/show')); ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Show / Edit
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/siteAdmin/requests">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                             <span>requests</span>
                        </a>
                    </li>
                    <li>
                        <a href="/siteAdmin/contact">
                            <i class="fa fa-envelope"></i> <span>Contact Messages</span>
                        </a>
                    </li>

                    <li>
                        <a href="/siteAdmin/settings">
                            <i class="fa fa-cogs"></i> <span>Site Settings</span>
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 <a href="https://vudigitalsolution.com/">Vu Digital</a>.</strong> All rights
            reserved.
        </footer>


        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
   <!-- Scripts -->
   <script src="<?php echo e(asset('js/app.js')); ?>"></script>

   <?php echo $__env->yieldContent('js'); ?>
   <script>
       $(document).ready(function () {
           $('.confirm').click(function (e) {
               if (!confirm('are you sure')){
                return false;
               }
           });
           $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })

       });

   </script>
</body>

</html>

