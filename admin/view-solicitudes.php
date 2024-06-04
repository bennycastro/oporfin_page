
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php     $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }?>
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
    text: 'Algo Salio Mal al modificar el registro!',
    
  }) </script>;

<?php
  }
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
            <div class="alert alert-primary" role="alert">
          <h1 class="text-center"> Listado de Solicitudes</h1>
</div>
        
        </div>
         </div>   
  
      <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                            <th>Nombre</th>
                            <th>Ingresos Mensuales</th>
                            <th>Monto</th>
                            <th>Fecha de Solicitud</th>
                            <th>Tipo de Crédito</th>
                            <?php if($rol_id == '1') { ?>
                            <th>Promotor</th>
                            <?php } ?>
                            <th></th>
                        </tr>
                </thead>
                <tbody>
                       <!--Trae el listado de solicitudes -->          
                       <?php
	
                  unset($_SESSION['curp']);
                  
                  if($rol_id == 1){
                    $where ="";
                  }
                  else if($rol_id == 2){
                    $where ="WHERE id_promotor = $id";
                  }

                  try {
                  $sql ="SELECT * FROM solicitud_cliente 
                                      INNER JOIN cliente ON solicitud_cliente.curp_cliente =cliente.curp
                                      INNER JOIN tipos_credito ON solicitud_cliente.id_tipo_credito = tipos_credito.id_tipo_cred
                                      INNER JOIN admins ON solicitud_cliente.id_promotor = admins.id $where
                                      ORDER BY id_solicitud ASC";
                      $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                }
                  while($solicitud = $resultado->fetch_assoc()) {  ?>
                      <tr>    <!--imprime listado de solicitudes --> 
                              <td><span id="id_sol<?php echo $solicitud['id_solicitud'];?>"><?php echo $solicitud['id_solicitud']; ?><span></td>
                              <td><span id="nombre<?php echo $solicitud['id_solicitud'];?>"><?php echo $solicitud['primer_nombre'] . " " . $solicitud['segundo_nombre'] . " " . $solicitud['apell_pat'] . " " . $solicitud['apell_mat']; ?><span></td>
                              <td><span id="ingresos<?php echo $solicitud['id_solicitud'];?>"><?php echo $solicitud['ingresos_comprobables']; ?><span></td>
                              <td><span id="monto<?php echo $solicitud['id_solicitud'];?>"><?php echo $solicitud['monto_solicitado']; ?><span></td>
                              <td><span id="fecha<?php echo $solicitud['id_solicitud'];?>"><?php echo $solicitud['fecha_solicitud']; ?><span></td>
                              <td><span id="tipo"><?php echo $solicitud['nom_tipo_cred']; ?><span></td>
                              <?php if($rol_id == 1) {?>
                              <td><?php   
                              if($solicitud['id_promotor'] == 154){
                              ?>
                              <button class="btn btn-outline-warning asignar" value="<?php echo $solicitud['id_solicitud']; ?>"> <?php echo "Sin Asignar"; ?> </a>
                              <?php 
                              }else
                              { 
                            ?><button class="btn btn-outline-success asignar" value="<?php echo $solicitud['id_solicitud']; ?>"> <?php echo $solicitud['nombre']; ?> </a>
                              <?php } ?>
                                </td>
                              <?php } ?>
                              <td>
                                
                                <div class="float-right">
                                  <a href="perfil-solicitud.php?curp=<?php echo $solicitud["curp_cliente"];?>&sol=<?php echo $solicitud['id_solicitud']; ?>" type="button" class="btn bg-yellow btn-flat margin"> <i class="far fa-eye" aria-hidden="true"></i> </a>
                                  <a href="includes/funciones/delete-solicitud.php?id_solicitud=<?php echo $solicitud['id_solicitud'];?>" type="button" class="btn bg-red btn-flat margin" id="eliminar"> <i class="fas fa-trash" aria-hidden="true"></i> </a>
                                  </div>
                             </td>
                             
                      </tr>  
                  <?php } ?>
                  
                </tbody>
                <tfoot>
                    <tr><th>#</th>
                    <th>Nombre</th>
                            <th>Ingresos</th>
                            <th>Monto</th>
                            <th>Fecha de Solicitud</th>
                            <th>Tipo de Crédito</th>
                            <?php if($rol_id == '1')  { ?>
                            <th>Promotor</th>
                            <?php } ?>
                            <th></th>
                    </tr>
                  </tfoot>
                </table>
      </div></div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 

  
</div>
<!-- ./wrapper -->

<?php include_once ('modal_asignar.php');?>
<script src='js/modal.js'</script>
<?php include_once 'includes/templates/footer.php';?>

<script>
 $(document).ready(function() {
    $('#example').DataTable( {
      "order": [4,'desc'],
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
<!-- DataTables  & Plugins -->
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


