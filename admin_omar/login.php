<?php
  session_start();
  if( isset( $_GET['cerrar_sesion'] ) ) {
    if( $_GET['cerrar_sesion'] ) {
      session_destroy();
    }
  }
  include_once 'funciones/funciones.php'; //Conexion a BD
  include_once 'templates/header.php';
?>

<body class="hold-transition login-page">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../index.php" class="h1">Proyecto</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia sesion aqui</p>

      <?php
        // session_start();
        // echo"<pre>";
        // var_dump($_SESSION);
        // echo"</pre>";
      ?>

      <form name="login-admin-form" id="login-admin-form" method="post" action="login-admin.php" >
        <div class="input-group mb-3">
          <input type="text" class="form-control" name ="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name ="contrasena" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="hidden" name="login-admin" value="1">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


<?php
  include_once 'templates/footer.php';
?>