<?php
    include "conexion.php";
    $email =$_POST['email'];
    $password = sha1($_POST['pass']);
    $res = $conexion->query("select * from admins 
        where correo='$email' 
        and pass='$password'  
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        echo "Todo bien";
        
    }else{
        echo "login incorrecto";
    }
?>