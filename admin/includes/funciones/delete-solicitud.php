<?php 
  include_once '../../../includes/funciones/bd_conexion.php';

 if(isset($_GET['id_solicitud'])){
    $id = $_GET['id_solicitud'];
    $query = "UPDATE solicitud_cliente set id_estatus = '0' WHERE id_solicitud = $id";        
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0) {
        header('location:../../view-solicitudes.php?result=success');
    } else {
        header('location:../../view-solicitudes.php?result=fail');
    }
   }  
   ?>