<?php


    include_once 'includes/templates/header.php';
      include_once 'includes/templates/slide-bar.php';
      include_once 'includes/funciones/bd_conexion.php';
      ?>
      <script src="sweet/dist/sweetalert2.min.js"></script>
  <?php

if(isset($_GET['result']  ))
{
if($_GET['result']=='success')
{
  
?>
<script> 
Swal.fire(
  'Listo!',
  'Operación Realizada con éxito',
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
    text: 'Algo Salio Mal al agregar el registro!',
    
  }) </script>;

<?php
  }
}
?>      
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notificar a comité</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Notificar</li>
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
         
              <div class="card-body">
                <div class="tab-content"> 
          <!-- /.tab-estatus -->
          <div class="tab-pane" id="solicitud">
                    <!-- estatus -->  
                  <section class="content">
                    <div class="row" >
                      <div class="col-md-12">
                       <!-- general form elements disabled --> 
           
            <div class="card card-info">
             
              <!-- /.card-header -->
              <div class="card-body">

    </section>
    <!-- /.content -->
                    
                  
                  </div>
                  <!-- /.tab-estatus -->


                  <div class="tab-pan active" id="settings">
                    <form class="form-horizontal" action="includes/funciones/enviar_notificacion.php">
                      
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Asesor</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Asesor" value="<?php echo $nombre;?>" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email"  value="rosemonterrubio@hotmail.com" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Asunto</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputasunto" placeholder="Asunto" value  ="Hemos Cargado nuevos expedientes" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Mensaje</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputMensaje" name="inputMensaje" placeholder="Escribe aqui tu mensaje"></textarea>
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
