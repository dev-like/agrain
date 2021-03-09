<nav class="navbar-custom">

    <ul class="list-unstyled topbar-right-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <span class="ml-1"><?php echo e(Auth::User()->nome); ?><i class="mdi mdi-chevron-down"></i> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h6 class="text-overflow m-0">Usuário</h6>
                </div>

                <!-- item-->
                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item notify-item" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    <i class="fi-power"></i> <span>Sair</span>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </a>

            </div>
        </li>

    </ul>

    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left waves-light waves-effect">
                <i class="dripicons-menu"></i>
            </button>
        </li>
    </ul>

</nav>
