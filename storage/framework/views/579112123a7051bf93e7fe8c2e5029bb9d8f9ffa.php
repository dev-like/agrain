<?php $__env->startSection('page-caminho'); ?>
  Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Página Inicial
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!-- <h3><b>NUTRIR, CULTIVAR E COLHER!</b></h3> -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>