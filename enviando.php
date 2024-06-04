

<?php
 session_start(); /*Abre la sesion */
 
  if(isset($_SESSION['promotor'])){
    $promotor = $_SESSION['promotor'];
  }else{
    $promotor = 154;
  }
  if(isset($_SESSION['importe'])){
    $importe = $_SESSION['importe'];
  }else{
    $importe = 0;
  }
  $nombre = $_SESSION['nombre'];
  $correo_cte = $_SESSION['correo_cte'];
  $curp = $_SESSION['curp'];
  $motivo = $_SESSION['motivo'];
  $_SESSION['ingresos'] = htmlentities ($_POST["ingresos"]);
  $ingresos = $_SESSION['ingresos'];
 
 



     try {
      $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
      $conn-> set_charset("utf8");
      
      if ($conn->connect_error){
          echo $error -> $conn->connect_error;
      
  
      }
       
          $sql ="INSERT INTO `solicitud_cliente` (`id_solicitud`,`id_estatus`,  `curp_cliente`, `monto_solicitado`, `motivo_prestamo`, `ingresos_comprobables`, `id_tipo_credito`, `fecha_solicitud`, `id_promotor`) VALUES
                              (NULL,'1', '$curp', '$importe', '$motivo', '$ingresos', '2', NOW(),'$promotor')";
              
              
           $resultado =$conn ->query($sql);
            if(mysqli_affected_rows($conn)>0) { 
            header('location:enviar_mail.php');
          } else {
             header('location:index.php?result=fail');
          }
                       
          } catch (\Exception $e)
          
          {
            echo $e->getMessage();
         }
?>
         


