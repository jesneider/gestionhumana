<?php include APP_PATH . "/layouts/header.php"; ?>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Gestion</b>Humana</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus datos para iniciar Sesion</p>

    <form action="<?php echo BASE_APP; ?>" method="post" autocomplete="off">
      <div class="form-group has-feedback">
        <input type="email" name="user" class="form-control" placeholder="Correo Electronico" autofocus="on"/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordar Sesion
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->                
      </div>
      <div class="row">
      	<div class="col-lg-12">
      		<div id="msg-error" class="alert alert-danger" style="display: <?php echo $display = (!empty($error_msg)) ? 'block' : 'none' ?>;"><?php echo $show = (!isset($error_msg) || empty($error_msg)) ? '' : $error_msg; ?></div>
      	</div>
      </div>
    </form>
    <a href="#">Olvide mi contrasena ?</a><br>
  </div>
  <!-- /.login-box-body -->
</div>

<?php include APP_PATH . "/layouts/footer.php"; ?>
</body>
</html>