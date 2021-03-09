<!-- Menu -->
<!-- Top Contact Info -->
<div class="row logo-top-info">
    <div class="container">
        <div class="col-md-3 logo">
            <!-- Main Logo -->
            <a href="/"><img src="assets/images/logo.png" alt="Agrain Logo" /></a>
            <!-- Responsive Toggle Menu -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only"> Main Menu </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="col-md-9 top-info-social">
            <div class="pull-right">
                <div class="top-info">
                    <div class="market">
                        <h3 style="font-family:MangueiraMedium"> <?php echo app('translator')->getFromJson('menu.texto1'); ?> <p style="text-align:right; color:#3a9a30; font-size:18px; font-family:MangueiraBold"><?php echo app('translator')->getFromJson('menu.texto2'); ?></p> </h3>
                    </div>
                </div>
                <div class="social">
                    <ul class="social-icons">
                        <li><a href="<?php echo e(url('locale/pt-br')); ?>"><img border="0" alt="BR" src="assets/images/brasil.png"></a></li>
                        <li><a href="<?php echo e(url('locale/en')); ?>"><img border="0" alt="EUA" src="assets/images/eua.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation Section -->
<nav id="navbar" class="collapse navbar-collapse main-menu">
    <div class="container">
        <ul class="main-menu">
            <li> <a href="#sobre"><?php echo app('translator')->getFromJson('menu.item2'); ?></a>  </li>
            <?php if(!empty($produtos)): ?>
              <li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo app('translator')->getFromJson('menu.item3'); ?>
                  <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                  <ul>
                    <?php $count = 0; ?>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($count == 4) break; ?>
                      <li> <a href="<?php echo e(route('produto.item',$produto->slug)); ?>" style="color:#23b953"><?php echo e($produto->nome); ?></a> </li>
                      <?php $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              </li>
            <?php endif; ?>

              <!--<li><a href="#depoimentos"><?php echo app('translator')->getFromJson('menu.item5'); ?></a> </li>-->

            <!-- <li><a href="#dicasdemanejo"><?php echo app('translator')->getFromJson('menu.item6'); ?></a> </li> -->

              <li><a href="#noticia"><?php echo app('translator')->getFromJson('menu.item7'); ?> </a></li>

              <!--<li><a href="#parceiros"><?php echo app('translator')->getFromJson('menu.item8'); ?></a> </li>-->
            <!--<li><a href="#contato"><?php echo app('translator')->getFromJson('menu.item9'); ?></a> </li>-->
        </ul>
    </div>
</nav>
