<?php 
    $promotor = $_POST['promotor'];

    $id_solicitud = $_POST['sol'];
  
       include '../../../includes/funciones/bd_conexion.php';  
       $query = "UPDATE solicitud_cliente SET id_promotor  = '$promotor'  WHERE id_solicitud = '$id_solicitud'";
        $result = mysqli_query($conn,$query);
       if(mysqli_affected_rows($conn)>0) {
           header('location:../../view-solicitudes.php?result=success');
       } else {
           header('location:../../view-solicitudes.php?result=fail');
       }
                            
   ?>   