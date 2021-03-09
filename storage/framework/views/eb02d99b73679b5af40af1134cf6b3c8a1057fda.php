<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                  <a href="<?php echo e(route('quemsomos.index')); ?>">
                    <i class="fa fa-users"></i> <span> Quem somos </span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(route('banners.index')); ?>">
                    <i class="dripicons-photo-group"></i> <span> Banners </span>
                  </a>
                </li>

                <li>
                  <a href="<?php echo e(route('produto.index')); ?>">
                    <i class="fa fa-shopping-basket"></i> <span> Produtos </span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(route('noticia.index')); ?>">
                    <i class="fa fa-newspaper-o"></i> <span> Notícias </span>
                  </a>
                </li>

                <?php if(Auth::User()->nivel == 1): ?>
                <li>
                  <a href="<?php echo e(route('usuario.index')); ?>">
                    <i class="fa fa-user-o"></i> <span> Usuários </span>
                  </a>
                </li>
              <?php endif; ?>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
