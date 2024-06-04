<?php include_once 'includes/templates/header.php';?>
<?php include_once 'includes/templates/slide-bar.php';?>
<?php include_once 'includes/funciones/funciones.php';?>
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
    text: 'Algo Salio Mal al Intentar Borrar el Registro!',
    
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
                  <th>Núm. Solicitud</th>
                            <th>Nombre</th>
                            <th>Monto Solicitado</th>
                            <th>Monto Autorizado</th>
                            <th>Plazo</th>
                            <th>Dictamen</th>
                               
                               <th></th>
                        </tr>
                </thead>
            <tbody>
                       <!--Trae el listado de solicitudes -->          
                       <?php
	
                  unset($_SESSION['curp']);
                try {
                  $sql ="SELECT * FROM solicitud_autorizacion 
                   INNER JOIN dictamen ON solicitud_autorizacion.id_dictamen =dictamen.id_dictamen
                   WHERE id_status = 0
                                      
                                      ";
                      $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                }
                  while($solicitud = $resultado->fetch_assoc()) {  ?>
                      <tr>    <!--imprime listado de solicitudes --> 
                              <td hidden><span id="id_aut<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['id_aut']; ?><span></td>
                              <td><span id="num_sol<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['num_sol']; ?><span></td>
                              <td><span id="nombre<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['nombre']; ?><span></td>
                              <td><span id="monto_sol<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['monto_sol']; ?><span></td>
                              <td><span id="monto_aut<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['monto_aut']; ?><span></td>
                              <td><span id="plazo<?php echo $solicitud['id_aut'];?>"><?php echo $solicitud['plazo']; ?><span></td>
                              <td>     
                              
                              <?php if($rol_id == 1) {
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
                                                ?><button class="btn btn-warning asignar" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
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
                                                ?><button class="btn btn-warning" value="<?php echo $solicitud['id_aut']; ?>"> <?php echo $solicitud['dictamen']; ?> </a>
                                                <?php 
                                              }
                                          ?>
                                     
                             <?php }?> 
                             <td>     <div class="float-left">
                                  <a href="perfil-solicitud.php?id_aut=<?php echo $solicitud['id_aut']; ?>" type="button" class="btn bg-yellow btn-flat margin"> <i class="far fa-eye" aria-hidden="true"></i> </a>
                                 <?php if($solicitud['id_dictamen'] ==0) {?> <a href="includes/funciones/delete-solicitud.php?id_aut=<?php echo $solicitud['id_aut'];?>" type="button" class="btn bg-red btn-flat margin" id="eliminar"> <i class="fas fa-trash" aria-hidden="true"></i> </a>
                                 <?php } ?>
                                  <?php if($solicitud['id_dictamen'] ==1) {?><a href="autorizacion.php?id_aut=<?php echo $solicitud['id_aut']; ?>" type="button" class="btn bg-blue btn-flat margin"> <i class="fa fa-file-pdf" aria-hidden="true"></i> </a>
                                    <?php 
                                      }?>
                              
                                  </div>
                             </td></td>
                             
                      </tr>  
                  <?php } ?>
                  
                </tbody>
                <tfoot>
                    <tr><th></th>
                    <th></th>
                    <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
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

