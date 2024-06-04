<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php       $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    };?>
<script src="sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<style>
  .dt-buttons{
    padding:20px;
    display:flex;

  }
</style>
<?php
if(isset($_GET['result']  ))
{
  if($_GET['result']=='successfull')
  {
    
  ?>
  <script> 
Swal.fire(
  'Listo!',
  'El promotor seleccionado ha sido eliminado correctamente!',
  'success' )
  </script>;
  
  <?php
  }
  if($_GET['result']=='failed')
  {
    
  ?>
  <script> 
  Swal.fire({
    icon: 'error',
    title: 'Error...',
    text: 'No es posible eliminar a un promotor con solicitudes asignadas!',  })
    </script>;
  
  <?php
  }
if($_GET['result']=='success')
{
  
?>
<script> 
Swal.fire(
  'Listo!',
  'Nuevo Usuario agregado Correctamente!',
  'success' )
  </script>;

<?php
}
if($_GET['result']=='fail'){
  ?>
  <script> 
  Swal.fire({
    icon: 'error',
    title: 'Error...',
    text: 'Algo Salio Mal al Intentar Agregar el Registro!',
    
  }) </script>;

<?php
  }
}
if (isset($_POST['eliminar'])) {
    $id = $_GET['id'];
    $query = "UPDATE admins set estado='2' WHERE id=$id";
    mysqli_query($conn, $query);?>
    <script> 
    Swal.fire(
      'Listo!',
      'El usuario fue eliminado Correctamente!',
      'success' )
      </script>;<?php
    header('Location: mantenimiento_admins.php');
  }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div>
          <div class="col-sm-4">
            <h1>Mantenimiento de Usuarios</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del Cliente</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form method="POST" name="crear-admin" id="crear-admin" action="insertar-admin.php">
                <div class="card-body">
                <div class="form-group">
                <select class="form-control col-md-12"" id="sel1" name="rol">
               
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
        <div class="col-md-8">
                  <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Usuarios Registrados</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Fecha de Registro</th>
                            
                             <th></th>
                        </tr>
                </thead>
                <tbody>
                <?php
                  try {
                    $sql = "SELECT * FROM admins WHERE estado ='1' AND id !='154'
                    ";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }

                while($usuario = $resultado->fetch_assoc() ) {  ?>
                      <tr>    <td><?php echo $usuario['id']; ?></td>
                              <td><?php echo $usuario['nombre']; ?></td>
                              <td><?php echo $usuario['correo']; ?></td>
                              <td><?php echo $usuario['rol_id']; ?></td>
                              <td><?php echo $usuario['fecha_crea']; ?></td>           
                              
                              <td>
                                <div class="float-right">
                                  <a href="edit_admins.php?id=<?php echo $usuario['id']; ?>" type="button" class="btn bg-green btn-flat margin"> <i class="fas fa-pencil-alt"></i></a>
                                  <a href="delete_admins.php?id=<?php echo $usuario['id']; ?>" type="button" class="btn bg-red btn-flat margin" name="eliminar"> <i class="fas fa-trash" aria-hidden="true"></i> </a>
                                  </div>
                             </td>
                             
                      </tr>  
                  <?php } ?>
                  
                </tbody>
                <tfoot>
                <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Fecha de Registro</th>
                            
                             <th></th>
                    </tr>
                  </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

