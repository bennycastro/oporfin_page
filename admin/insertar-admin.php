<?php



    if($conn->ping())
    
    if(isset($_POST['agregar-admin'])){

      

        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
    

        /*ENCRIPTA EL PASSWORD*/
        $opciones = array (
            'cost' => 12// ENTRE MAS ALTO EL COSTO MAYOR SEGURIDAD, MENOS RENDIMIENTO
        );
        $password_hashed = password_hash($password,PASSWORD_BCRYPT,$opciones);//ENCRIPTA Y ASIGNA EL VALOR DE 60 CARACTERES A UNA NUEVA VARIABLE
       
        try {
             $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    };
            $stmt = $conn->prepare("INSERT INTO admins (nombre , correo , pass, rol_id, fecha_crea, estado) VALUES (?, ?, ?, ?,NOW(),1)");
            $stmt->bind_param("ssss", $nombre, $email, $password, $rol );//SE ENVIA LA VARIABLE CON LA CONTRASEÑA ENCRIPTADA
            $stmt->execute();

            if(mysqli_affected_rows($conn)>0) {
                header('location:mantenimiento_admins.php?result=success');
            } else {
               header('location:mantenimiento_admins.php?result=fail');
            }
           
                        
            $stmt->close();
            $conn->close();
                      
         
            
        } catch (\Exception $e){
            header('location:mantenimiento_admins.php?result=fail');
            //echo $e->getMessage();
        }
      
} 
?>

