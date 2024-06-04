<?php
 include_once 'includes/funciones/bd_conexion.php';
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;
 
foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(",", $linea);
        $num_sol	         = !empty($datos[0])  ? ($datos[0]) : '';
        $nombre	             = !empty($datos[1])  ? ($datos[1]) : '';
        $monto_sol	         = !empty($datos[2])  ? ($datos[2]) : '';
        $plazo	             = !empty($datos[3])  ? ($datos[3]) : '';
        $tasa	             = !empty($datos[4])  ? ($datos[4]) : '';
        $comision	         = !empty($datos[5])  ? ($datos[5]) : '';
        $promotor	         = !empty($datos[6])  ? ($datos[6]) : '';
        $observaciones_analista = !empty($datos[7])  ? ($datos[7]) : '';
        $uso_cred	         = !empty($datos[8])  ? ($datos[8]) : '';
        $tipo_credito   	 = !empty($datos[9])  ? ($datos[9]) : '';
        $dictamen_analista	 = !empty($datos[10])  ? ($datos[10]) : '';
        $analista            = !empty($datos[11])  ? ($datos[11]) : '';

       
  
    $sql = "INSERT INTO solicitud_autorizacion ( 
            id_aut,
            num_sol,
            nombre,
            monto_sol,
            monto_aut,
			plazo,
            tasa,
			comision,
            promotor,
            id_dictamen,
            observaciones_analista,
			uso_cred,
            tipo_credito,
            dictamen_analista,
            observaciones_comite,
            analista,
            id_status,
            fecha_dictamen
        ) VALUES(
            NULL,
            '$num_sol',
            '$nombre',
            '$monto_sol',
            '0',
			'$plazo',
            '$tasa',
			'$comision',
            '$promotor',
            '0',
            '$observaciones_analista',
			'$uso_cred',
            '$tipo_credito',
            '$dictamen_analista',
            'AUN SIN OBSERVACIONES',
            '$analista',
            '0',
            NULL
                    )";
         $resultado =$conn ->query($sql);
        
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}



  if($i>0) {
    header('location:view-solicitudes.php?result=success');
    
} else {
   header('location:view-solicitudes.php?result=fail');
}
?>


