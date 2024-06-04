<?php
  // $conn = new mysqli('localhost', 'benito','Benny0320053.*','oporfin_cms');//local
      $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms_carga');//remoto
    $conn-> set_charset("utf8");
     //$conn = new mysqli("localhost", "usuario", "contraseña", "basedatos");
    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }
?>

