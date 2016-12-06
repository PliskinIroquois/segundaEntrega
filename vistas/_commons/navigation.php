<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Agencia de Viajes S.A.</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo (WEB_PATH . '/usuario.php?action=show&id=' . LoginController::getUsuario()->id); ?>"><i class="fa fa-user fa-fw"></i> Mi usuario</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo (WEB_PATH . '/login.php?action=logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
    </ul>
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?php echo (WEB_PATH . '/usuario.php') ?>"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                </li>
                <li>
                    <a href="<?php echo (WEB_PATH . '/hotel.php') ?>"><i class="fa fa-building fa-fw"></i> Hoteles</a>
                </li>
                <li>
                    <a href="<?php echo (WEB_PATH . '/tour.php') ?>"><i class="fa fa-tree fa-fw"></i> Tours</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>