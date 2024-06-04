
  
<?php
    $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    };
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

