
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php include_once 'includes/funciones/funciones.php';?>
<script src="sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<style>
  .dt-buttons{
    padding:20px;
    display:flex;

  }
</style>
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
  <section class="content-header">
<div class="row">
<?php
	

	
  if($rol_id == 2) {?>
  <div class="col-md-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Datos del Cliente</h3>

       
      </div>
      <form method="POST" name="crear-admin" id="crear-admin" action="insertar-sol.php">
          <div class="card-body">

          <div class="form-group">
              <label for="num">Número de Solicitud</label>
              <input type="number"  class="form-control" id="num" name="num" placeholder="NÚMERO DE SOLICITUD">
            </div>

          <div class="form-group">
          <select class="form-control col-md-12"" id="sel3" name="tipo">
         
                      <option selected> TIPO DE CRÉDITO</option>
                      <option value="SIMPLE">SIMPLE</option>
                      <option value="MICROCRÉDITO">MICROCRÉDITO</option>
                      <option value="SIMPLE PM">SIMPLE PM</option>
                    </select>

              <!--<label for="usuario">Usuario</label>
              <input type="text"  class="form-control" id="usuario" name="usuario" placeholder="Usuario"> -->
            </div>
           
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="NOMBRE DEL CLIENTE">
            </div>
            <div class="form-group">
              <label for="Monto">Monto Solicitado</label>
              <input type="text" class="form-control" name="monto" id="Monto"  placeholder="$0.00"  tabindex="1"onchange="MASK(this,this.value,'-$##,###,##0.00',1)" autocomplete="off" type="number" required>
             
            </div>
            <div class="form-group">
           <select class="form-control col-md-12" id="sel5" name="plazo">
         
         <option selected> SELECCIONA PLAZO</option>
         <option value="12 QUINCENAS">12 QUINCENAS</option>
         <option value="14 QUINCENAS">14 QUINCENAS</option>
          <option value="10 MESES">10 MESES</option>
         <option value="12 MESES">12 MESES</option>
         <option value="18 QUINCENAS">18 QUINCENAS</option>
         <option value="20 QUINCENAS">20 QUINCENAS</option>
         <option value="24 QUINCENAS">24 QUINCENAS</option>
         <option value="18 MESES">18 MESES</option>
         <option value="36 QUINCENAS">36 QUINCENAS</option>
         <option value="40 QUINCENAS">40 QUINCENAS</option>
          <option value="22 MESES">22 MESES</option>
         <option value="24 MESES">24 MESES</option>
          <option value="26 MESES">26 MESES</option>
         <option value="48 QUINCENAS">48 QUINCENAS</option>
         <option value="30 MESES">30 MESES</option>
         <option value="60 QUINCENAS">60 QUINCENAS</option>
         <option value="36 MESES">36 MESES</option>
         <option value="72 QUINCENAS">72 QUINCENAS</option>
         <option value="42 MESES">42 MESES</option>
         <option value="92 QUINCENAS">92 QUINCENAS</option>
         <option value="48 MESES">48 MESES</option>
         <option value="54 MESES">54 MESES</option>
         <option value="60 MESES">60 MESES</option>
         <option value="66 MESES">66 MESES</option>
         <option value="72 MESES">72 MESES</option>
         
       </select>

</div>
              <div class="form-group">
              <label for="tasa">Tasa</label>
              <input type="text"  class="form-control" id="tasa" name="tasa" placeholder="TASA DE INTERÉS">
            </div>
            <div class="form-group">
              <label for="comision">% Comisión</label>
              <input type="text"  class="form-control" id="comision" name="comision" placeholder="COMISIÓN POR APERTURA">
            </div>
            <div class="form-group">
              <label for="uso">Uso de Crédito</label>
              <input type="text" class="form-control" id="uso" name="uso" placeholder="DESTINO DEL CRÉDITO">
              </div>
              <div class="form-group">
              <label for="observaciones">Observaciones Analista</label>
              <textarea row="6"  class="form-control" id="observaciones" name="observaciones" placeholder="OBSERVACIONES"></textarea>
            </div>
            <div class="form-group">
                <select class="form-control col-md-12" id="sel1" name="dictamen">
                      <option selected> DICTAMEN</option>
                      <option value="APROBADO">APROBADO</option>
                      <option value="RECHAZADO">RECHAZADO</option>
                      <option value="A CONSIDERACIÓN">A CONSIDERACIÓN</option>
                </select>


             </div>
        <div class="form-group">
           <select class="form-control col-md-12"" id="sel4" name="promotor">
         
         <option selected> PROMOTOR</option>
         <option value="INTERNO">INTERNO</option>
         <option value="ROSA OLVERA">ROSA OLVERA</option>
         <option value="ANASTACIO A">ANASTACIO A.</option>
        
       </select>

 <!--<label for="usuario">Usuario</label>
 <input type="text"  class="form-control" id="usuario" name="usuario" placeholder="Usuario"> -->
</div>


        <div class="form-group">
            <select class="form-control col-md-12" id="sel2" name="analista">
         
         <option selected> ANALISTA</option>
        
         <option value="ALFREDO MUÑIZ">ALFREDO MUÑIZ</option>
         
        
         
       </select>
        </div>


            </div>


            <!-- /.card-body -->
            <div class="card-footer">
              <input type="hidden" name="agregar-sol" value="1">
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
          </form>

</div></div>
<?php }?>

        <!-- /.card -->



  <!-- /.tabla de lista de solicitudes -->

        <div class="col-md-9">
                  <!-- /.card -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Lista de Solicitudes</h3>

              </div>
            </div>
            <div class="card-body p-3">
            <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                                <th hidden>id</th>
                                
                                <th>#Sol</th>
                                <th>Nombre</th>
                                <th>Solicitado</th>
                                <th>Autorizado</th>
                                <th>Plazo</th>
                                <th>Dictamen</th>
                                <th>Fecha y Hora de Dictamen</th>
                                <th>Acción</th>
                                <th hidden>Monto a Dispersar</th>
                      </tr>
                  </thead>
                <tbody>
<!--Trae el listado de solicitudes -->
                            <?php
                                            try {
                        $sql ="SELECT * FROM solicitud_autorizacion
                        INNER JOIN dictamen ON solicitud_autorizacion.id_dictamen =dictamen.id_dictamen
                        WHERE id_status = 0
                        ORDER BY num_sol desc";
                         $impo_comision= ($monto_aut * ($comision/100));
                         $iva_comision= $impo_comision *.16;
                         $monto_a_dispersar = ($monto_aut - ((($monto_aut * ($comision/100)) *.16)));
                            $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                        $error = $e->getMessage();
                      }
                        while($solicitud = $resultado->fetch_assoc()) {
                          $monto_a_dispersar = ($solicitud['monto_aut'] - ((($solicitud['monto_aut'] * ($solicitud['comision']/100)) * 1.16)));
                          ?>
                            <tr>    <!--imprime listado de solicitudes -->
                              <td hidden><span  id="id_aut<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['id_aut']; ?></span></td >
                             
                              <td><span id="num_sol<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['num_sol']; ?></span></td>
                              <td><span id="nombre<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['nombre']; ?></span></td>
                              <td><span id="monto_sol<?php echo $solicitud['id_aut'];?>">$<?php echo number_format ($solicitud['monto_sol'],2,".",",");   ?></span></td>
                              <td><span id="monto_aut<?php echo $solicitud['id_aut'];?>">$<?php echo number_format ($solicitud['monto_aut'],2,".",","); ?></span></td>
                              <td><span id="plazo<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['plazo']; ?></span></td>
                              <td > <?php if($rol_id == 1) {
                                              if($solicitud['id_dictamen'] ==0){
                                              ?>
                                              <button class="btn btn-secondary asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo "SIN DICTAMEN"; ?> </a>
                                              <?php 
                                              }else if($solicitud['id_dictamen'] ==1){
                                              ?><button class="btn btn-success asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                              <?php 
                                              }else if($solicitud['id_dictamen'] ==3){
                                                ?><button class="btn btn-danger asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                              }else if($solicitud['id_dictamen'] ==4){
                                                ?><button class="btn btn-info asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                              }else if($solicitud['id_dictamen'] ==5){
                                                ?><button class="btn btn-warning asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                                }else if($solicitud['id_dictamen'] ==6){
                                                  ?><button class="btn btn-outline-danger asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                  <?php 
                                                  }
                                          ?>
                                    <?php }?>
                                    <?php if($rol_id == 2) {?>
                                    <?php
                                              if($solicitud['id_dictamen'] ==0){
                                              ?>
                                              <button class="btn btn-secondary" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo "SIN DICTAMEN"; ?> </a>
                                              <?php 
                                              }else if($solicitud['id_dictamen'] ==1){
                                              ?><button class="btn btn-success" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                              <?php 
                                              }else if($solicitud['id_dictamen'] ==3){
                                                ?><button class="btn btn-danger" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                              }else if($solicitud['id_dictamen'] ==4){
                                                ?><button class="btn btn-info" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                              }else if($solicitud['id_dictamen'] ==5){
                                                ?><button class="btn btn-warning" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                                }else if($solicitud['id_dictamen'] ==6){
                                                ?><button class="btn btn-outline-danger" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                                }
                                          ?>
                                    <?php }?>
                                    </td> <td><span id="fecha<?php echo $solicitud['fecha_dictamen'];?>"><?php echo $solicitud['fecha_dictamen']; ?></span></td>
                                      <td><form target="_blank" action="https://formspree.io/f/mrgwzwyo" method="POST">
                                        <div class="float-left">
                                            <a href="perfil-solicitud.php?id_aut=<?php echo $solicitud['id_aut']; ?>" type="button" class="btn bg-yellow btn-flat margin btn-sm"> <i class="far fa-eye" aria-hidden="true"></i> </a>
                                              <?php if($solicitud['id_dictamen'] ==0 && $rol_id == 2) 
                                                  {?>
                                                  <a href="includes/funciones/delete-solicitud.php?id_aut=<?php echo $solicitud['id_aut'];?>" type="button" class="btn bg-red btn-flat margin btn-sm" id="eliminar"> <i class="fas fa-trash" aria-hidden="true"></i> </a>
                                                    <input type="text" name="Mensaje" hidden value="HOLA ROSA: SE HA CARGADO UNA NUEVA SOLICITUD A NOMBRE DE :">
                                                    <input type="text" name="Cliente" hidden value="<?php echo $solicitud['nombre']; ?>">
                                                    <input type="text" name="Monto Solicitado" hidden value="<?php echo number_format ($solicitud['monto_sol'],2,".",",");   ?>">
                                                    <input type="text" name="Ver" hidden value="https://oporfin.mx/comite/admin/perfil-solicitud.php?id_aut=<?php echo $solicitud['id_aut']; ?>">
                                                    <button type="submit" class="btn bg-secondary btn-flat margin btn-sm" id="mail"> <i class="fas fa-envelope" aria-hidden="true"></i>  </button>
                                                    <a href="includes/funciones/send_wa.php?nombre=<?php echo $solicitud['nombre']; ?>&monto=<?php echo number_format ($solicitud['monto_sol'],2,".",",");   ?>" target="_blank" type="button" class="btn btn-success btn-flat margin btn-sm" id="whats"> <i class="fab fa-whatsapp"></i></a>
                                              <?php }

                                              if($solicitud['id_dictamen'] ==1)
                                              {?>
                                              <a href="autorizacion.php?id_aut=<?php echo $solicitud['id_aut']; ?>" ´ target="_blank" type="button" class="btn btn-outline-info btn-sm btn-flat margin"> <i class="fa fa-file-pdf" style="color:blue" aria-hidden="true"></i> </a>
                                              <?php }
                                              if($solicitud['id_dictamen'] ==5) 
                                              {?>
                                              <a href="condicionado.php?id_aut=<?php echo $solicitud['id_aut']; ?>" ´ target="_blank" type="button" class="btn btn-outline-info btn-sm btn-flat margin"> <i class="fa fa-file-pdf" style="color:blue" aria-hidden="true"></i> </a>
                                              <?php }?>
                                        </div></form>
                                    </td>
                                    <td hidden><p>$</p><span id="monto_a_dispersar<?php echo $solicitud['id_aut'];?>"><?php echo number_format($monto_a_dispersar,2,".",","); ?></span></td>
                              </tr>  
                  <?php } ?>
                </tbody>
</table>

      </div>

<?php if($rol_id == 2) {?>
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Carga Masiva</h3>
        </diV>
        </diV>
      <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data"/>
      <div>
            <input class="form-control form-control-lg" id="file-input" name="dataCliente" type="file">
        </div>

       <div>
</br>
           <input type="submit" name="subir" class="btn btn-primary" value="Subir Excel"/>
           <a href="https://oporfin.mx/comite/admin/formatos/example.csv" type="button" class="btn bg-yellow btn-flat margin"></i> Descargar Plantilla </a>
       </div>
       </form>
      
</diV>


<?php }?>
    <!-- /.content -->
  </div>
 
</div>
<!-- ./wrapper -->

<?php include_once ('modal_asignar.php');?>
<script src='js/modal.js'</script>
<?php include_once 'includes/templates/footer.php';?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<script src="plugins/traduccion.js"></script>

 <script>
 $(document).ready(function() {
    $('#example').DataTable( {
      "sort": false,
      dom: 'Bfrtip',
         
         buttons: [
             'copyHtml5',
             'excelHtml5',
             'csvHtml5',
             'pdfHtml5'
             
         ],       
    } );
 
		      
		   
} );

    
 </script>        
<script>
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