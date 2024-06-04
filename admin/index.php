
<script src="sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<?php 


    $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }

session_start();

 if($_POST){
  $correo = $_POST['correo'];
  $pass = $_POST['pass'];

  $sql = "SELECT id,nombre,correo,pass,rol_id,estado FROM admins WHERE correo = '$correo'";
  $resultado = $conn->query($sql);
  $num =$resultado->num_rows;

  if($num>0){
    $row = $resultado->fetch_assoc();
    $password_db = $row['pass'];//obtenemos la contraseña de la base de datos

    $pass_c = sha1("$pass"); //ciframos la contra
 if ( $password_db == $pass_c) //comparamos las contraseñas
         {

          $_SESSION['nombre']= $row ['nombre'];
          $_SESSION['id']= $row ['id'];
          $_SESSION['rol_id']= $row ['rol_id'];
          $rol_id=$_SESSION['rol_id'];
          header("Location: home.php");
         
    
          }else{
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Contraseña incorrecta!';
            echo '</div>';
          

          }
  
    }else{
      echo '<div class="alert alert-danger" role="alert">';
      echo 'Usuario no existe';
      echo '</div>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin Oporfin V1.0 | Recuperar Contraseña </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="icon" type="image/png" href="../img/favicon.png" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
  <div class="card-header text-center">
      <a href="#" class="brand-link">
        <img src="img/OporfinLogo.png" alt="Oporfin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="font-weight-bold">Admin Oporfin V1.0</span>
      </a>
  
    </div>
    <div class="card-body">
      <p class="login-box-msg">Iniciar Sesión</p>

      <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="correo" required="required"  />
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="pass" required="required" />
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit" value="login">Entrar</button>
            
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
       <!--   <a href="recuperar-password.php">Olvide mi contraseña</a>-->
      </p>
    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
