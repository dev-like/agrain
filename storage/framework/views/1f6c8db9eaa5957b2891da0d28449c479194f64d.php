<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroSal | </title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/favicon.png')); ?>">

    <!-- Fonts e Animations -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animates.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-grid.min.css')); ?>">

    <!-- Styles Sheets -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/header-pages.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/produtos.css')); ?>">

    <!-- Librarys JavaScrip -->
    <script src="<?php echo e(asset('assets/js/lib/jquery.min.js')); ?>"></script>
</head>
<body>
    <!-- Menu -->
    <?php echo $__env->make('front.partials._menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Conteúdo -->
    <section class="bg-tp1 produto-descricao">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <img src="assets/images/error.png" alt="Error 404" class="embalagem-destaque" style="width:50%">
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <?php echo $__env->make('front.partials._bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(asset('assets/js/pages.js')); ?>"></script>
</body>
</html>
