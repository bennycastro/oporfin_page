<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('8t8a_nxx9Y4-i_WPP')
</script><?php


$nombre = $_SESSION['nombre'];
     try {
      require_once ('bd_conexion.php');
       
          $sql ="INSERT INTO `solicitud_cliente` (`id_solicitud`,`id_estatus`,  `curp_cliente`, `monto_solicitado`, `motivo_prestamo`, `ingresos_comprobables`, `id_tipo_credito`, `fecha_solicitud`, `id_promotor`) VALUES
                              (NULL,'1', '$curp', '$importe', '$motivo', '$ingresos', '2', NOW(),'$promotor')";
              
              
           $resultado =$conn ->query($sql);
            if(mysqli_affected_rows($conn)>0) {
              SendMail();
              // header('location:index.php?result=success');
          } else {
             header('location:index.php?result=fail');
          }
                       
          } catch (\Exception $e)
          
          {
            echo $e->getMessage();
         }

         <script>
         function SendMail()  {
           var params ={
             nombre ="";
             correo_cte ="";
             nombre = JSON.parse ('<?php echo json_encode($nombre);?>');
             correo_cte = JSON.parse ('<?php echo json_encode($correo_cte);?>');
             
           }
           emailjs.send("service_6n27p81","template_9nwtp8n",params).then(function (res){
       
           })
           location.href = "index.php?result=success";
         }
       </script>