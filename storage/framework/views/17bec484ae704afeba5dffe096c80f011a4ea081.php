<!DOCTYPE html>
<html>
    <?php echo $__env->make('admin.partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('styles'); ?>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="/admin" class="logo">
                      <span>
                        <img src="<?php echo e(asset('template/images/logo2.png')); ?>" alt="" height="50">
                      </span>
                      <i>
                        <img src="<?php echo e(asset('template/images/logo_sm.png')); ?>" alt="" height="48">
                      </i>
                    </a>
                </div>
                <?php echo $__env->make('admin.partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php echo $__env->make('admin.partials._aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left"><?php echo $__env->yieldContent('page-title'); ?></h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item text-white"><?php echo $__env->yieldContent('page-caminho'); ?></li>
                                        <li class="breadcrumb-item active"><?php echo $__env->yieldContent('page-title'); ?></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <?php echo $__env->make('admin.partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="row">
                          <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->

                <footer class="footer text-right">
                    2021 © Like Publicidade
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <?php echo $__env->make('admin.partials._bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
