<?php
    $conexion = new mysqli('localhost', 'root','','consul91_oporfin');//local
    //$conn = new mysqli('localhost', 'consul91_oporfin', 'Oporfin2022.*','consul91_oporfin');//remoto

     //$conn = new mysqli("localhost", "usuario", "contraseña", "basedatos");
    if ($conexion->connect_error){
        echo $error -> $conexion->connect_error;

    }
?>