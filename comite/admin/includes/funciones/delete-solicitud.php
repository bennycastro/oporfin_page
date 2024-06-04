<?php 
  include_once 'bd_conexion.php';

 if(isset($_GET['id_aut'])){
    $id = $_GET['id_aut'];
    $query = "UPDATE solicitud_autorizacion set id_status = '1' WHERE id_aut = $id";        
    $result = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0) {
        header('location:../../view-solicitudes.php?result=success');
    } else {
        header('location:../../view-solicitudes.php?result=fail');
    }
   }  
   ?>