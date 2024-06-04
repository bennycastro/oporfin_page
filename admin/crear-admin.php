

<?php include_once 'includes/templates/header.php';?>

<?php     $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }?>
<?php include_once 'includes/templates/slide-bar.php';?>
<script src="sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">
<?php
if(isset($_GET['result']  ))
{
if($_GET['result']=='success')
{
  
        ?>
        <script> 
        Swal.fire(
          'Listo!',
          'El nuevo administrador fue agregado Correctamente!',
          'success' )
          </script>;

        <?php
        }
        else{
          ?>
          <script> 
          Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Algo Salio Mal al Intentar agregar el Registro!',
            
          }) 
          
          </script>;

<?php
}
}
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div>
          <div class="col-sm-3">
            <h1>Crear Nuevo Perfil Administrador/Promotor</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Introduzca los datos <small>del nuevo miembro</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" name="crear-admin" id="crear-admin" action="insertar-admin.php">
                <div class="card-body">
                <div class="form-group">

                <select class="form-select form-select-lg col-md-12" id="rol" name="rol">
                            <option selected> Selecciona Rol de Nuevo Usuario </option>
                            <option value="1">1 Administrador</option>
                            <option value="2">2 Promotor</option>
                            
                          </select>

                    <!--<label for="usuario">Usuario</label>
                    <input type="text"  class="form-control" id="usuario" name="usuario" placeholder="Usuario"> -->
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"  class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  

                </div>
               

                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="agregar-admin" value="1">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php include_once 'includes/templates/copyright.php';?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<script src="sweet/dist/sweetalert2.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {

  $('#crear-admin').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      nombre: {
        required: true,
        minlength: 5,
      },
      usuario: {
        required: true,
        minlength: 5,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Introduzca la direccion de correo",
        email: "Introduzca una direccion de correo válido"
      },
      nombre: {
        required: "Debe capturar el nombre",
       
      },
      usuario: {
        required: "debe capturar el usuario",
        usuario: "capture un usuario válido"
      },
      password: {
        required: "debe introducir una contraseña",
        minlength: "la contraseña debe contener al menos 5 caracteres"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});



</script>
</body>

