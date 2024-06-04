
  
<?php
 include_once 'includes/funciones/funciones.php';
 if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM admins WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      header('location: mantenimiento_admins.php?result=failed');
    }else {
  
      header('Location: mantenimiento_admins.php?result=success');
  }}
?>

