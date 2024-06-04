
<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php     $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
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
  <!-- Content Wrapper. Contains page content -->  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
        <div class="col-sm-12">
            <div class="alert alert-primary" role="alert">
          <h1 class="text-center"> Listado de Clientes</h1>
            </div>
        
    
  
      <table id="example1" class="table table-bordered table-striped">
  <thead>
                        <tr>
                            <th>Curp</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                </thead>
                <tbody>

                <?php
                unset($_SESSION['curp']);
                  try {
                    $sql = "SELECT * FROM cliente";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }

                  while($cliente = $resultado->fetch_assoc() ) {  ?>
                      <tr>
                              <td><?php echo $cliente['curp'];?></td>
                              <td><?php echo $cliente['primer_nombre'] . " " . $cliente['segundo_nombre'] . " " . $cliente['apell_pat'] . " " . $cliente['apell_mat']; ?></td>
                              <td><p><?php echo $cliente['num_cel']; ?></p></td>
                              <td><?php echo $cliente['correo']; ?></td>
                              <td>
                                  <a href="perfil-cliente.php?curp=<?php echo $cliente['curp']; ?>" type="button" class="btn bg-green btn-flat margin"> <i class="far fa-eye" aria-hidden="true"></i> </a>
                                  
                                  
                             </td>
                      </tr>  
                  <?php } ?>
                  
                </tbody>
                <tfoot>
                    <tr>
                            <th>Curp</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
 
<!-- ./wrapper -->

<?php include_once ('modal_asignar.php');?>
<script src='js/modal.js'</script>
<?php include_once 'includes/templates/footer.php';?>
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


