<?php 
include_once 'bd_conexion.php';

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
?>
  <div class="row">
  <div class="col-md-4">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Datos del Usuario</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <form method="POST" name="edit-admin" id="edit-admin" action="edit-admin.php">
          <div class="card-body">
          <div class="form-group">
          <select class="form-control col-md-12"" id="sel1" name="rol">
         
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
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>

        <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../js/demo.js"></script>