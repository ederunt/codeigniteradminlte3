<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
<!--    <div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
<!--        <div class="image">-->
<!--            <img src="--><?php //echo PATH_DIST; ?><!--img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
<!--        </div>-->
<!--        <div class="info">-->
<!--            <a href="#" class="d-block">--><?php //echo $this->session->userdata('user')['full_name']; ?><!--</a>-->
<!--        </div>-->
<!--    </div>-->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="<?php echo PATH_MAIN; ?>dashboard" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Inicio
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Mantenedores
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo PATH_MAIN; ?>dashboard/users" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo PATH_MAIN; ?>menu" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Menu</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>