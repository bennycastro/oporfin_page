<?php
  //  $conn = new mysqli('localhost', 'root','','consul91_oporfin');//local
     $conn = new mysqli('localhost', 'oporfin_aut_user', 'Benny0320053.*','oporfin_aut');//remoto
    $conn-> set_charset("utf8");
     //$conn = new mysqli("localhost", "usuario", "contraseña", "basedatos");
    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }
?>

