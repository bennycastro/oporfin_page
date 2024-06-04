
<?php include_once 'includes/templates/header.php';
      include_once 'includes/templates/slide-bar.php';
      include_once 'includes/funciones/bd_conexion.php';?>
      <script src="sweet/dist/sweetalert2.min.js"></script>
      <?php
    
    if (isset($_GET['id_aut'])) {
      $_SESSION['id_aut'] = $_GET['id_aut'];
    $id_aut = $_SESSION['id_aut'];
   
    
    $query = "SELECT * FROM solicitud_autorizacion
     WHERE id_aut ='$id_aut'";
     $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['nombre'];
      $num_sol = $row['num_sol'];
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
      $id_dictamen = $row['id_dictamen'];
     }
  }

  //Actualizar REGISTRO
  if (isset($_POST['update']) && ($rol_id == 1)) {

if($id_dictamen == 1){?>
      <script> 
  Swal.fire({
    icon: 'error',
    title: 'Error...',
    text: 'Esta Solicitud tiene Status "Aprobada", no es posible modificarla',
    
  }) </script>;
  
     <?php }
     else{
      $id_aut = $_GET['id_aut'];
     $observaciones_comite = $_POST['observaciones_comite'];
      $monto_auto1 = (str_replace("$","", $_POST['monto_auto']));  
      $monto_auto2 = (str_replace(",","", $monto_auto1));  
      $monto_auto = (str_replace(".00","", $monto_auto2)); 
      
         if($monto_auto > $monto_sol){?>
              <script> 
            Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'El monto Autorizado Excede al monto solicitado',
            
            
            })  
            </script>;
       <?php }
       else{  
      $query = "UPDATE solicitud_autorizacion set monto_aut = '$monto_auto', observaciones_comite = '$observaciones_comite'
      WHERE id_aut=$id_aut";
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
      window.location.href = "perfil-solicitud.php?id_aut=<?php echo $_GET['id_aut'];?>";
    } 
  })
         
          </script>;
          ?>

    <?php
           } 
    
    }
  }
  }

  if (isset($_POST['update']) && ($rol_id == 2)) {

    if($id_dictamen == 1){?>
      <script> 
  Swal.fire({
    icon: 'error',
    title: 'Error...',
    text: 'Esta Solicitud tiene Status "Aprobada", no es posible modificarla',
    
  }) </script>;
     <?php }
     else{
    $id_aut = $_GET['id_aut'];
    $nombre = $_POST['nombre'];
    $num_sol = $_POST['num_sol'];

    $monto_sol1 = (str_replace("$","", $_POST['monto_sol']));  
    $monto_sol2 = (str_replace(",","", $monto_sol1));  
    $monto_sol = (str_replace(".00","", $monto_sol2)); 

    $plazo = $_POST['plazo'];
    $promotor = $_POST['promotor'];
    $uso_cred = $_POST['uso_cred'];
    $tipo_credito = $_POST['tipo_credito'];
    $dictamen_analista = $_POST['dictamen_analista'];
    $observaciones_analista = $_POST['observaciones_analista'];
    $analista = $_POST['analista'];
   
    $query = "UPDATE solicitud_autorizacion set nombre = '$nombre', monto_sol = '$monto_sol',plazo = '$plazo',
                                              promotor = '$promotor',uso_cred = '$uso_cred',tipo_credito = '$tipo_credito', dictamen_analista = '$dictamen_analista', 
                                observaciones_analista = '$observaciones_analista', analista = '$analista'
                                                       WHERE id_aut=$id_aut";
                                                      
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
    window.location.href = "perfil-solicitud.php?id_aut=<?php echo $_GET['id_aut'];?>";
  } 
})
       
        </script>;
        ?>

  <?php
         } 
  
  }}
    ?> 
    
 
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
                <!--<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" onclick="inhabilitar()">Contactar</a></li>-->
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
                <h3 class="card-title text-center">RESULTADO DEL ANÁLISIS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <form method="POST" action="perfil-solicitud.php?id_aut=<?php echo $_GET['id_aut'];?>">
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Num. Solicitud</label>                
                        <input type="text" class="form-control" value="<?php echo $num_sol; ?>" disabled >
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
                        <input type="text" class="form-control" name="promotor" id="promotor" value="<?php echo $promotor; ?>" disabled >
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Analista</label>
                        <input type="text" class="form-control" name="analista" id="analista" value="<?php echo $analista; ?>" disabled >
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
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tipo de Crédito</label>
                       
                        <input type="text" class="form-control"name="tipo_credito" id="tipo_cred" value="<?php echo $tipo_credito; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Monto del crédito</label>
                        <input type="text" class="form-control" name="monto_sol" id="monto_sol"  placeholder="$0.00"  onchange="MASK(this,this.value,'-$##,###,##0.00',1)" autocomplete="off" type="number" value="$<?php echo number_format($monto_sol,2,".",","); ?>" required disabled >
                        
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Destino</label>
                        <input type="text" class="form-control" name="uso_cred" id="desti" value="<?php echo $uso_cred; ?>" disabled >
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                          <div class="form-group">
                            <label>Plazo del crédito</label>
                            <input type="text" name="plazo" class="form-control" id="plazo" value="<?php echo $plazo; ?>" disabled >
                          </div>
                      </div>
                                       
                    <div class="col-sm-3">
                      <div class="form-group">
                        
                        <label>Dictamen del Analista</label>
                        <input name="dictamen_analista" type="text" class="form-control" id="dict_ana" value="<?php echo $dictamen_analista; ?>" disabled >
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label>Observaciones del Analista</label>
                        <textarea name="observaciones_analista" class="form-control" id="obs_ana" rows="5" disabled  ><?php echo $observaciones_analista; ?></textarea>
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
                      <textarea type="text" name="observaciones_comite" class="form-control" id="obs_com"rows="5" disabled><?php echo $observaciones_comite; ?></textarea>
                      
                    </div>
                    </div>

                    <div class="col-sm-2">
                          <div class="form-group">
                            <label>Monto Autorizado</label>
                            <input type="text" class="form-control" name="monto_auto" id="mont_auto"  placeholder="$0.00"  onchange="MASK(this,this.value,'-$##,###,##0.00',1)" autocomplete="off" value="$<?php echo number_format($monto_aut,2,".",","); ?>" required disabled >
                          
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
        
      <div class="row">
        <div class="col-12">
          <a onclick="habilitar()" class="btn btn-primary" id="btn_editar">Editar</a>
          <a onclick="inhabilitar()" class="btn btn-secondary">Cancelar</a>
          <button type="submit" class="btn btn-success" name="update" id="btn_update" disabled>Actualizar</button>
          
        </div>
      </div> </form>
    </section>
    <!-- /.content -->
                    
                  
                  </div>
                  <!-- /.tab-estatus -->


                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Asesor</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Asesor" value="<?php echo $nombre;?>">
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
  document.getElementById("mont_auto").disabled = false;
  document.getElementById("btn_update").disabled = false;
  document.getElementById("btn_editar").disabled = false;
  <?php  } else {?>
  document.getElementById("analista").disabled = false;
  document.getElementById("tipo_cred").disabled = false;
  document.getElementById("monto_sol").disabled = false;
  document.getElementById("desti").disabled = false;
  document.getElementById("plazo").disabled = false;
  document.getElementById("dict_ana").disabled = false;
  document.getElementById("obs_ana").disabled = false;
  document.getElementById("btn_update").disabled = false;
  document.getElementById("promotor").disabled = false;
  document.getElementById("nombre").disabled = false;
  document.getElementById("btn_editar").disabled = true;
 
  <?php  } ?>


  }

function inhabilitar() {
  

  document.getElementById("obs_com").disabled = true;
  document.getElementById("mont_aut").disabled = true;
  document.getElementById("analista").disabled = true;
  document.getElementById("tipo_cred").disabled = true;
  document.getElementById("monto_sol").disabled = true;
  document.getElementById("desti").disabled = true;
  document.getElementById("plazo").disabled = true;
  document.getElementById("dict_ana").disabled = true;
  document.getElementById("obs_ana").disabled = true;
  document.getElementById("btn_update").disabled = true;
  document.getElementById("btn_editar").disabled = true;
}
</script>

<script>
  document.getElementById('oculto').value = document.getElementById('ingresos').value;

  function MASK(form, n, mask, format) {
  if (format == "undefined") format = false;
  if (format || NUM(n)) {
    dec = 0, point = 0;
    x = mask.indexOf(".")+1;
    if (x) { dec = mask.length - x; }

    if (dec) {
      n = NUM(n, dec)+"";
      x = n.indexOf(".")+1;
      if (x) { point = n.length - x; } else { n += "."; }
    } else {
      n = NUM(n, 0)+"";
    } 
    for (var x = point; x < dec ; x++) {
      n += "0";
    }
    x = n.length, y = mask.length, XMASK = "";
    while ( x || y ) {
      if ( x ) {
        while ( y && "#0.".indexOf(mask.charAt(y-1)) == -1 ) {
          if ( n.charAt(x-1) != "-")
            XMASK = mask.charAt(y-1) + XMASK;
          y--;
        }
        XMASK = n.charAt(x-1) + XMASK, x--;
      } else if ( y && "$0".indexOf(mask.charAt(y-1))+1 ) {
        XMASK = mask.charAt(y-1) + XMASK;
      }
      if ( y ) { y-- }
    }
  } else {
     XMASK="";
  }
  if (form) { 
    form.value = XMASK;
    if (NUM(n)<0) {
      form.style.color="#FF0000";
    } else {
      form.style.color="#00d586;";
    }
  }
  return XMASK;
}

// Convierte una cadena alfanumérica a numérica (incluyendo formulas aritméticas)
//
// s   = cadena a ser convertida a numérica
// dec = numero de decimales a redondear
//
// La función devuelve el numero redondeado

function NUM(s, dec) {
  for (var s = s+"", num = "", x = 0 ; x < s.length ; x++) {
    c = s.charAt(x);
    if (".-+/*".indexOf(c)+1 || c != " " && !isNaN(c)) { num+=c; }
  }
  if (isNaN(num)) { num = eval(num); }
  if (num == "")  { num=0; } else { num = parseFloat(num); }
  if (dec != undefined) {
    r=.5; if (num<0) r=-r;
    e=Math.pow(10, (dec>0) ? dec : 0 );
    return parseInt(num*e+r) / e;
  } else {
    return num;
  }
}
</script>
