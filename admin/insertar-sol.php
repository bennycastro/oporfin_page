<?php

    
    $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    };

    if($conn->ping())
    
    if(isset($_POST['agregar-sol'])){
      
        $num = $_POST['num'];
        $nombre = $_POST['nombre'];
        $monto = $_POST['monto'];
        $promotor = $_POST['promotor'];
        $plazo = $_POST['plazo'];
        $tasa = $_POST['tasa'];
        $comision = $_POST['comision'];
        $uso = $_POST['uso'];
        $tipo = $_POST['tipo'];
        $observaciones = $_POST['observaciones'];
        $dictamen = $_POST['dictamen'];
        $analista = $_POST['analista'];
       
        try {
            include_once 'includes/funciones/bd_conexion.php';
             
                $sql ="INSERT INTO `solicitud_autorizacion` (`id_aut`,`num_sol`,  `nombre`, `monto_sol`, `monto_aut`, `plazo`, `tasa`, `comision`, `promotor`,`id_dictamen`, `dictamen_analista`, `observaciones_analista`, `uso_cred`, `tipo_credito`, `observaciones_comite`, `analista`, `id_status`) VALUES
                                                                 (NULL,'$num', '$nombre', '$monto','0', '$plazo','$tasa','$comision','$promotor', '0', '$dictamen','$observaciones', '$uso','$tipo','AUN SIN OBSERVACIONES','$analista','0')";
                    
                    
                 $resultado =$conn ->query($sql);
                  if(mysqli_affected_rows($conn)>0) {
                    header('location:view-solicitudes.php?result=success');
                    
                } else {
                   header('location:view-solicitudes.php?result=fail');
                }
                             
                } catch (\Exception $e)
                
                {
                  echo $e->getMessage();
               }
      
    
      
} 
?>

