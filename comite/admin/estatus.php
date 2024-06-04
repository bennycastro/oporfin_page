<?php include_once 'includes/funciones/funciones.php';


if  (isset($_GET['curp'])) {
    $curp = $_GET['curp'];
    $query = "SELECT * FROM cliente WHERE curp= $curp";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $curp = $row['curp'];
     
     }
  }?>

<html>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">

  <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-them.min.css">


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del Cliente</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $snombre; ?>">
              </div>

              <div class="form-group">
            <label for="inputStatus">Estatus del crédito </label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Seleccione</option>
                  <option selected>Solicitud en revision</option>
                  <option>Autorizado</option>
                  <option>Rechazado</option>
                  <option>Liquidado</option>
                  <option>Mora</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Tipo de Cliente</label>
                <input type="text" id="inputClientCompany" class="form-control" value="Cliente Premium">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Correo electrónico</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="bennycastro@gmail.com">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Telefono Celular</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="5580568575">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Telefono Fijo </label>
                <input type="text" id="inputProjectLeader" class="form-control" value="5580568575">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Cumpleaños</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="20/12/1985 ">
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Importes y Plazo</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Importe Solicitado</label>
                <input type="number" id="inputEstimatedBudget" class="form-control" value="85000" step="1">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Importe Autorizado</label>
                <input type="number" id="inputSpentBudget" class="form-control" value="60000" step="1">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Plazo del Credito (meses)</label>
                <input type="number" id="inputEstimatedDuration" class="form-control" value="48" step="12">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Expediente</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Tamaño</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Functional-requirements.docx</td>
                    <td>49.8005 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>UAT.pdf</td>
                    <td>28.4883 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Email-from-flatbal.mln</td>
                    <td>57.9003 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Logo.png</td>
                    <td>50.5190 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>
                    <td>Contract-10_12_2014.docx</td>
                    <td>44.9715 kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancelar</a>
          <input type="submit" value="Guardar" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
 

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

