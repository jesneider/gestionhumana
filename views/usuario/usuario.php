<?php include APP_PATH . "/layouts/header.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

	<header class="main-header">

		<a href="#" class="logo">      
      <span class="logo-mini"><b>G</b>H</span>
      
      <span class="logo-lg"><b>Gestión</b>Humana</span>
    </a>
    
    <nav class="navbar navbar-static-top">
      
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo BASE_APP; ?>assets/img/user8-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo getProfile($_SESSION['user']); ?></span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="<?php echo BASE_APP; ?>assets/img/user8-128x128.jpg" class="img-circle" alt="User Image">
                <p>
                  <?php echo getProfile($_SESSION['user']); ?>
                  <small><?php echo getRol($_SESSION['rol']); ?></small>
                  <small><?php echo sedeAdmin($_SESSION['user']); ?></small>
                  <span id="rol_user" style="display: none;"><?php echo $_SESSION['rol']; ?></span>
                </p>
              </li>              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo BASE_APP;?>?logout=salir" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
	</header>

	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo BASE_APP; ?>assets/img/user8-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo getProfile($_SESSION['user']); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Administrador Online</a>
        </div>
      </div>     
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU PRINCIPAL</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Resumen de Datos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo BASE_APP; ?>"><i class="fa fa-circle-o"></i> General </a></li>
          </ul>
        </li>               
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Empleados</span>
            <span class="pull-right-container"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo BASE_APP; ?>crear/empleados"><i class="fa fa-plus"></i> Crear</a></li>
            <li><a href="<?php echo BASE_APP; ?>ver/empleados"><i class="fa fa-list"></i> Listar</a></li>
          </ul>
        </li>                    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Datos de Contratacion</span>
            <span class="pull-right-container"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo BASE_APP; ?>crear/contrato"><i class="fa fa-plus"></i> Crear</a></li>
            <li><a href="<?php echo BASE_APP; ?>ver/contrato"><i class="fa fa-list"></i> Listar</a></li>
          </ul>
        </li>                    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <?php routingViews(); ?>
  </div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>


<?php include APP_PATH . "/layouts/footer.php"; ?>
</body>
</html>
