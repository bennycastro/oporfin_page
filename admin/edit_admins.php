<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>

<script src="sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<?php include_once 'includes/funciones/funciones.php';


//
$nombre = '';
$correo= '';
$rol= '';

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM admins WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['nombre'];
      $rol = $row['rol_id'];
      $correo = $row['correo'];
    }
  }
//Actualizar usuario
  if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre= $_POST['nombre'];
    $correo = $_POST['email'];
    $rol =   $_POST['rol'];

    $query = "UPDATE admins set nombre = '$nombre', rol_id = '$rol', correo = '$correo' WHERE id=$id";
    mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn)>0) {
      ?>
      <script> 
      const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Listo!',
  text: "El registro fue modificado correctamente",
  icon: 'success',
  showCancelButton: false,
  confirmButtonText: 'Ok',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = "mantenimiento_admins.php";
  } 
})
       
        </script>;<?php
  } 
  
  }
    ?> 
 
    


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div>
          <div class="col-sm-9">
            <h1>Editar Perfil de Usuario</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Solo se muestran los datos que pueden ser modificados</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="edit_admins.php?id=<?php echo $_GET['id'];?>">
                <div class="card-body">
                <div class="form-group">

                <select class="form-select form-select-lg col-md-12" id="rol" name="rol">
                            <option selected> <?php echo $rol;?> </option>
                            <option value="1">1 Administrador</option>
                            <option value="2">2 Promotor</option>
                            
                          </select>

                    <!--<label for="usuario">Usuario</label>
                    <input type="text"  class="form-control" id="usuario" name="usuario" placeholder="Usuario"> -->
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $nombre;?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"  class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $correo;?>">
                  </div>
                                  

                </div>
               

                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="agregar-admin" value="1">
                  <button type="submit" class="btn btn-primary" name="update" >Actualizar</button>
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
  

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


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

<footer class="main-footer">
    <?php include_once 'includes/templates/copyright.php';?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
