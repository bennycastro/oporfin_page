<?php include_once 'includes/templates/header.php';
session_start();
$nombre = $_SESSION['nombre'];
$correo_cte = $_SESSION['correo_cte'];
?>

<script type="text/javascript">
    window.onload =  function SendMail()  {
           var params ={
             
              nombre : "<?php echo $nombre;?>",
              correo_cte : "<?php echo $correo_cte;?>"
           }
           emailjs.send("default_service", "template_9nwtp8n", params).then(function (res){
            location.href = "index.php?result=success";
           })
           
         }
</script>
