
<?php include_once 'includes/templates/header.php';
      include_once 'includes/templates/slide-bar.php';
      include_once 'includes/funciones/bd_conexion.php';

if (isset($_GET['id_aut'])) {
      
    $_SESSION['id_aut'] = $_GET['id_aut'];
    $id_aut = $_SESSION['id_aut'];
   
     $query = "SELECT * FROM solicitud_autorizacion
     WHERE id_aut ='$id_aut'";
  

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $id_aut = $row['id_aut'];
      $nombre = $row['nombre'];
      $monto_sol = $row['monto_sol'];
      $monto_aut = $row['monto_aut'];
      $plazo = $row['plazo'];
      $tasa = $row['tasa'];
      $comision = $row['comision'];
      $promotor = $row['promotor'];
     
      $uso_cred = $row['uso_cred'];
      $tipo_credito = $row['tipo_credito'];
      $dictamen_analista = $row['dictamen_analista'];
      $observaciones_analista = $row['observaciones_analista'];
      $analista = $row['analista'];
      $observaciones_comite = $row['observaciones_comite'];
     }
  }?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edición de Solicitud</h1>
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
                <h3 class="card-title text-center">RESULTADO DEN ANÁLISIS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Num. Solicitud</label>                
                        <input type="text" class="form-control" value="<?php echo $id_aut; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Sucursal</label>
                        <input type="text" class="form-control" value="Mitikah" disabled >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ejecutivo</label>
                        <input type="text" class="form-control" value="<?php echo $promotor; ?>" disabled >
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Analista</label>
                        <input type="text" class="form-control" id="analista" value="<?php echo $analista; ?>" disabled >
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
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tipo de Crédito</label>
                        <input type="text" class="form-control" id="tipo_cred" value="<?php echo $tipo_credito; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Monto del crédito solicitado</label>
                        <input type="text" class="form-control" id="monto_sol" value="<?php echo $monto_sol; ?>" disabled >
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Destino Especifico del crédito</label>
                        <input type="text" class="form-control" id="desti" value="<?php echo $uso_cred; ?>" disabled >
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                          <div class="form-group">
                            <label>Plazo del crédito (Meses)</label>
                            <input type="text" class="form-control" id="plazo" value="<?php echo $plazo; ?>" disabled >
                          </div>
                      </div>
                                       
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Dictamen del Analista</label>
                        <input type="text" class="form-control" id="dict_ana" value="<?php echo $dictamen_analista; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Observaciones del Analista</label>
                        <textarea class="form-control" id="obs_ana" rows="5" disabled ><?php echo $observaciones_analista; ?></textarea>
                      </div>
                    </div>
                  </div>
                
                  </div>    <div class="card-header">
                <h3 class="card-title text-center">ÁREA EXCLUSIVA PARA USO DEL COMITÉ</h3>
              </div>
                  <div class="row">
              
                    <div class="col-sm-10">
                      <div class="form-group">
                      <label>Observaciones del Comité </label>
                      <textarea type="text" class="form-control" id="obs_com"rows="5" disabled ><?php echo $observaciones_comite; ?></textarea>
                      </div>
                    </div>

                    <div class="col-sm-2">
                          <div class="form-group">
                            <label>Monto Autorizado</label>
                            <input type="text" class="form-control" id="mont_aut" value="<?php echo $monto_aut; ?>" disabled >
                          </div>
                      </div>

                  </div>
                
               
                       
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>


            </div>

        </div>
        </form>
      <div class="row">
        <div class="col-12">
          <a onclick="habilitar()" class="btn btn-primary">Editar</a>
          <a onclick="inhabilitar()" class="btn btn-secondary">Cancelar</a>
          <input type="submit" value="Guardar" class="btn btn-success float-right" onclick="inhabilitar1()">
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
  <?php if($rol_id == 1) { ?>
  document.getElementById("obs_com").disabled = false;
  document.getElementById("mont_aut").disabled = false;
  <?php  } else {?>
  document.getElementById("analista").disabled = false;
  document.getElementById("tipo_cred").disabled = false;
  document.getElementById("monto_sol").disabled = false;
  document.getElementById("desti").disabled = false;
  document.getElementById("plazo").disabled = false;
  document.getElementById("dict_ana").disabled = false;
  document.getElementById("obs_ana").disabled = false;
  
 
 
  <?php  } ?>
}



function inhabilitar() {
  
  <?php if($rol_id == 1) { ?>
  document.getElementById("obs_com").disabled = true;
  document.getElementById("mont_aut").disabled = true;
  <?php  } else {?>
  document.getElementById("analista").disabled = true;
  document.getElementById("tipo_cred").disabled = true;
  document.getElementById("monto_sol").disabled = true;
  document.getElementById("desti").disabled = true;
  document.getElementById("plazo").disabled = true;
  document.getElementById("dict_ana").disabled = true;
  document.getElementById("obs_ana").disabled = true;

<?php  } ?>
}
</script>
