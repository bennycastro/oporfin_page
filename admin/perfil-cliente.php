
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>

 <?php   $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;};

if (isset($_GET['curp'])) {
 
$_SESSION['curp'] = $_GET['curp'];
$curp = $_SESSION['curp'];
   
     $query = "SELECT * FROM cliente WHERE curp ='$curp'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $pnombre = $row['primer_nombre'];
      $snombre = $row['segundo_nombre'];
      $papell = $row['apell_pat'];
      $sapell = $row['apell_mat'];
      $curp = $row['curp'];
      $num_cel = $row['num_cel'];
      $num_casa = $row['num_casa'];
      $correo = $row['correo'];
      $notificaciones = $row['registro_newsletter'];
      $tipo_vivienda = $row['tipo_vivienda'];
      $calle = $row['calle'];
      $num_ext = $row['num_ext'];
      $num_int = $row['num_int'];
      $id_colonia = $row['id_colonia'];
      $edo_civil = $row['edo_civil'];
      $nivel_estudios = $row['nivel_estudios'];
      $situacion_laboral = $row['situación_laboral'];
      $empresa = $row['empresa'];
      $antiguedad = $row['antiguedad'];
      $industria = $row['industria'];
      $pensionado = $row['pensionado'];
      $insitucion = $row['institucion'];

     }
  }?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil del Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil de Cliente</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#Informacion-cliente"" data-toggle="tab">General</a></li>
                  
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" onclick="inhabilitar()">Contactar</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="Informacion-cliente">
                    <!-- estatus -->  
                   <!-- Main content -->
                  <section class="content">
                    <div class="row" >
                      <div class="col-md-6">
                       <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Información General del Cliente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Primer Nombre</label>
                        <input type="text" class="form-control" value="<?php echo $pnombre; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Segundo Nombre</label>
                        <input type="text" class="form-control" value="<?php echo $snombre; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" value="<?php echo $papell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Apellido Materno</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>CURP</label>
                        <input type="text" class="form-control" value="<?php echo $curp; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Fecha de Nacimiento</label>
                        <input type="text" class="form-control" value="<?php echo $curp; ?>" disabled >
                      </div>
                    </div>
                   
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        <input type="text" class="form-control" value="<?php echo $correo; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Telefono Celular</label>
                        <input type="text" class="form-control" value="<?php echo $num_cel; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Telefono de Casa</label>
                        <input type="text" class="form-control" value="<?php echo $num_casa; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" class="form-control" value="<?php echo $id_colonia; ?>" disabled >
                      </div>
                    </div>
                  </div>
  
                 
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Calle</label>
                        <input type="text" class="form-control" value="<?php echo $calle; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label># ext</label>
                        <input type="text" class="form-control" value="<?php echo $num_ext; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label># Int</label>
                        <input type="text" class="form-control" value="<?php echo $num_int; ?>" disabled >
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Delegación</label>
                        <input type="text" class="form-control" value="<?php echo $curp; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control" value="<?php echo $curp; ?>" disabled >
                      </div>
                    </div>
                   
                                      
                  </div>
                  <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Comentarios</label>
                        <textarea class="form-control" rows="5" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div>
                                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
        </div>
        <div class="col-md-6">
                       <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Preferencias del Cliente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                <div class="row">
                    <div class="col-sm-8">
                      <!-- checkbox -->
                      <label>Autorizaciones</label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Autorizo Buró de crédito</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Acepto Terminos y Condiciones</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Suscrito a nositicaciones por correo</label>
                        </div>
                      </div>
                    </div>
                  
                    <div class="col-sm-4">
                      <!-- radio -->
                      <label>Estado Civil</label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Solter@</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">Casad@</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" >
                          <label class="form-check-label">Union Libre</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" >
                          <label class="form-check-label">Viud@</label>
                        </div>
                      </div>
                      
                    </div>

                    <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Información Laboral</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nivel de estudios</label>
                        <input type="text" class="form-control" value="<?php echo $nivel_estudios; ?>" disabled >
                      </div>
                    </div>
                <div class="col-sm-6">
                <div class="form-group">
                        <label>Situación Laboral</label>
                        <input type="text" class="form-control" value="<?php echo $situacion_laboral; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Empresa</label>
                        <input type="text" class="form-control" value="<?php echo $empresa; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Antiguedad</label>
                        <input type="text" class="form-control" value="<?php echo $antiguedad; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Industria</label>
                        <input type="text" class="form-control" value="<?php echo $industria; ?>" disabled >
                      </div>
                    </div>
                
                 
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pensionado</label>
                        <input type="text" class="form-control" value="<?php echo $pensionado; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Institución</label>
                        <input type="text" class="form-control" value="<?php echo $insitucion; ?>" disabled >
                      </div>
                  
                      </div>
                 
                  
                
               
                  </div>

               
                  
                   
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
        </div>
      
      </div>
      
      <div class="row">
        <div class="col-12">
          <a onclick="habilitar()" class="btn btn-primary">Editar</a>
          <a onclick="inhabilitar()" class="btn btn-secondary">Cancelar</a>
          <input type="submit" value="Guardar" class="btn btn-success float-right" onclick="inhabilitar()">
        </div>
      </div>
    </section>
    <!-- /.content -->
                    
                  
                  </div>
                  <!-- /.tab-estatus -->


                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Asesor</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Asesor">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Asunto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Asunto">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Mensaje</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Escribe aqui tu mensaje"></textarea>
                        </div>
                      </div>
                    
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
        
                  <!-- /.tab-expediente -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
</body>
</html>
<script>
function habilitar() {
  
  document.getElementById("inputnombre").disabled = false;
  document.getElementById("inputStatus").disabled = false;
  document.getElementById("inputtipocliente").disabled = false;
  document.getElementById("inputcel").disabled = false;
  document.getElementById("inputnumcasa").disabled = false;
  document.getElementById("inputcorreo").disabled = false;
  document.getElementById("inputcumple").disabled = false;

}
function inhabilitar() {
  
  document.getElementById("inputnombre").disabled = true;
  document.getElementById("inputStatus").disabled = true;
  document.getElementById("inputtipocliente").disabled = true;
  document.getElementById("inputcel").disabled = true;
  document.getElementById("inputnumcasa").disabled = true;
  document.getElementById("inputcorreo").disabled = true;
  document.getElementById("inputcumple").disabled = true;

}
</script>
