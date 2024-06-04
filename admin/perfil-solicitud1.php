
<?php include_once 'includes/templates/header.php';
      include_once 'includes/templates/slide-bar.php';
      include_once 'includes/funciones/funciones.php';

if (isset($_GET['curp'])) {
 
$_SESSION['curp'] = $_GET['curp'];
$curp = $_SESSION['curp'];
   
     $query = "SELECT * FROM solicitud_cliente 
     INNER JOIN cliente ON solicitud_cliente.curp_cliente =cliente.curp
     INNER JOIN tipos_credito ON solicitud_cliente.id_tipo_credito = tipos_credito.id_tipo_cred
     INNER JOIN admins ON solicitud_cliente.id_promotor = admins.id WHERE curp ='$curp'
     ORDER BY id_solicitud ASC";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre_completo = $row['primer_nombre'].' '. $row['segundo_nombre'].' '.$row['apell_pat'].' '.$row['apell_mat'];
      $pnombre = $row['primer_nombre'];
      $snombre = $row['segundo_nombre'];
      $papell = $row['apell_pat'];
      $sapell = $row['apell_mat'];
      $curp = $row['curp'];
      echo $curp;
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
      $id_solicitud = $row['id_solicitud'];
      $nom_promo = $row['nombre'];
      $monto_solicitado = $row['monto_solicitado'];
      $motivo_prestamo = $row['motivo_prestamo'];
      $tipo_credito = $row['nom_tipo_cred'];
      $correo_cliente = $row ['correo_cte'];
     }
  }?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solicitud</h1>
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
                <li class="nav-item active"><a class="nav-link" href="#solicitud" data-toggle="tab">Solicitud</a></li>
                <li class="nav-item"><a class="nav-link"  href="#expediente" data-toggle="tab" onclick="inhabilitar()">Expediente</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" onclick="inhabilitar()">Contactar</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
          <!-- /.tab-estatus -->
          <div class="active tab-pane" id="solicitud">
                    <!-- estatus -->  
                  <section class="content">
                    <div class="row" >
                      <div class="col-md-12">
                       <!-- general form elements disabled --> 
           
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center">PARA USO EXCLUSIVO DE OPORFIN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Num. Solicitud</label>
                        <input type="text" class="form-control" value="<?php echo $id_solicitud; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Sucursal</label>
                        <input type="text" class="form-control" value="Mitikah" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ejecutivo</label>
                        <input type="text" class="form-control" value="<?php echo $nom_promo; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Num. Expediente</label>
                        <input type="text" class="form-control" value="<?php echo $id_solicitud; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Otro</label>
                        <input type="text" class="form-control" value="" disabled >
                      </div>
                    </div>
                  </div>
                       
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row" >
                      <div class="col-md-12">
                       <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center">I. SOLICITUD</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tipo de Crédito</label>
                        <input type="text" class="form-control" value="<?php echo $tipo_credito; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Monto del crédito solicitado</label>
                        <input type="text" class="form-control" value="<?php echo $monto_solicitado; ?>" disabled >
                      </div>
                    </div>
                               
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Destino Especifico del crédito</label>
                        <input type="text" class="form-control" value="<?php echo $motivo_prestamo; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Plazo del crédito (Meses)</label>
                        <input type="text" class="form-control" value="18 MESES" disabled >
                      </div>
                    </div>
              
        
                   <!-- <div class="col-sm-4">
                      <div class="form-group">
                        <label>Actualmente cuenta con algun crédito Oporfin</label>
                        <input type="text" class="form-control" value="" disabled >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Tipo de Crédito (si ya tiene otro crédito)</label>
                        <input type="text" class="form-control" value="" disabled >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Adeudo a la fecha</label>
                        <input type="text" class="form-control" value="" disabled >
                      </div>
                    </div>-->
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>


            </div>


        
            <div class="row" >
                      <div class="col-md-12">
                       <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center">II. DATOS GENERALES</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                  <div class="row">
                    <div class="col-sm-9">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre del Solicitante</label>
                        <input type="text" class="form-control" value="<?php echo $nombre_completo; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>C.U.R.P.</label>
                        <input type="text" class="form-control" value="<?php echo $curp; ?>" disabled >
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Domicilio. Calle</label>
                        <input type="text" class="form-control" value="<?php echo $calle; ?>" disabled >
                      </div>
                    </div>
                 
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Num. Ext.</label>
                        <input type="text" class="form-control" value="<?php echo $num_ext; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Num. Int</label>
                        <input type="text" class="form-control" value="<?php echo $num_int; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" class="form-control" value="<?php echo $id_colonia; ?>" disabled >
                      </div>
                    </div>
                 
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control" value="<?php echo $nombre_ciudad; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Entidad Federativa</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Delegación o Municipio </label>
                        <input type="text" class="form-control" value="<?php echo $nombre_municipio; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-1">
                      <div clascs="form-group">
                        <label>C.P.</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Pais</label>
                        <input type="text" class="form-control" value="MÉXICO" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" value="<?php echo $num_casa; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="text" class="form-control" value="<?php echo $num_cel; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="<?php echo $correo_cliente; ?>" disabled >
                      </div>
                    </div>
                  </div>
                       
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row" >
                      <div class="col-md-12">
                       <!-- general form elements disabled -->
         <!--   <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center">PERSONA FÍSICA CON ACTIVIDAD EMPRESARIAL (PFAE)</h3>
              </div>-->
              <!-- /.card-header -->
           <!--    <div class="card-body">
               
                  <div class="row">
                    <div class="col-sm-8">
                 
                      <div class="form-group">
                        <label>Nombre y Apellidos</label>
                        <input type="text" class="form-control" value="<?php echo $pnombre; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>R.F.C. </label>
                        <input type="text" class="form-control" value="<?php echo $snombre; ?>" disabled >
                      </div>
                    </div>
                                      
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Nivel de Estudios</label>
                        <input type="text" class="form-control" value="<?php echo $papell; ?>" disabled >
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Domicilio Particular</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                 
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Num. Ext.</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Num. Int</label>
                        <input type="text" class="form-control" value="<?php echo $num_int; ?>" disabled >
                      </div>
                    </div>
                   
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Entre calle y</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div clascs="form-group">
                        <label>calle</label>
                        <input type="text" class="form-control" value="<?php echo $calle; ?>" disabled >
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" class="form-control" value="<?php echo id_colonia; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control" value="<?php echo $nombre_ciudad; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Pais</label>
                        <input type="text" class="form-control" value="MÉXICO" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Entidad Federativa</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Delegación o Municipio</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>C.P.</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Télefono</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Monto de Renta</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tipo de Vivienda</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Antigüedad en Domicilio</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Fecha de Nacimiento</label>
                        <input type="text" class="form-control" value="<?php echo $sapell; ?>" disabled >
                      </div>
                    </div>
                    
                   
                  </div>
              </div>--> 
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
      
        


            
       
        </div>
        </form>
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
                  <div class="tab-pane" id="expediente">
                    <form class="form-horizontal">
                      <iframe src="upload.php" width="100%" height="825" style="border:none; overflow:hidden">
                      </iframe>
                      
                    </form>
                  </div>
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
