<?php
 session_start();
 $curp = $_SESSION['curp'];
 $nombre = $_SESSION['nombre'];
 //
     $segundo_nombre = $_SESSION['segundo-nombre'];
     // echo $segundo_nombre;
     $apellido_paterno = $_SESSION['apellido-paterno'];
     // echo$apellido_paterno;
     $apellido_materno = $_SESSION['apellido-materno'];
     // echo $apellido_materno;
   
     $num_celular = $_SESSION['num_celular'];
     // echo$num_celular;
     $num_casa = $_SESSION['num_casa'];
     // echo $num_casa;
     $correo_cte = $_SESSION['correo_cte'];
     // echo $correo_cte;
     //$password = sha1($_SESSION['password']);
   //  $passwordsha1 = sha1('$password');
    // $password;
    $notificaciones = $_SESSION['notificaciones'];
    // echo $notificaciones;
    // echo $vivienda = $_SESSION['vivienda'];
    $vivienda;
     $calle = $_SESSION['calle'];
     // echo $calle;
     $num_ext = $_SESSION['num_ext'];
     // echo $num_ext;
     $num_int = $_SESSION['num_int'];
     // echo $num_int;
     $colonias = $_SESSION['colonias'];
     // echo $colonias;
     $estudios = $_SESSION['estudios'];
     // echo $estudios;
     $sit_laboral = $_SESSION['sit_laboral'];
     // echo  $sit_laboral;
     $empresa = $_SESSION['empresa'];
     // echo $empresa;
     $anti = $_SESSION['anti'];
     // echo $anti;
     $industria = $_SESSION['industria'];
     // echo $industria;
     $pensionado = $_SESSION['pensionado'];
     // echo $pensionado;
     $institución = $_SESSION['institución'];
     // echo $institución;
     $_SESSION['estado_civil'] = htmlentities ($_POST["estado_civil"]);
     $estado_civil = $_SESSION['estado_civil'];
     // echo $estado_civil;
     $_SESSION['motivo'] = htmlentities ($_POST["motivo"]);
     $motivo = $_SESSION['motivo'];
     // echo $motivo;
     $_SESSION['municipio'] = htmlentities ($_POST["municipio"]);
     // echo $municipio;
     $_SESSION['ciudad'] = htmlentities ($_POST["ciudad"]);
     // echo $ciudad;
   include_once 'includes/templates/header.php';?>
 <link rel="stylesheet" href="cargar/style.css">
  
  <section class="seccion contenedor2">
    <h2 class="titulo">Subir <span  class="remarcado">archivos</span></h2>
 
   <div class="container">
        <div class="header-section">
            
            <p>INE</p>
            <p>Comprobantes de Ingresos</p>
            <p>Comprobante de Domicilio</p>
            <a href="https://oporfin.com.mx/elblog/guia-para-obtener-tu-buro-de-credito-de-forma-gratuita/" alt="Tutorial para generalo de manera gratuita" target="_blank" >Reporte de Buró de Crédito</a>
            <p><span>Nota:</span>En la etapa 2 se te solicitará el resto de la documentación</p>

        </div>
        <div class="drop-section">
            <div class="col">
                <div class="cloud-icon">
                    <img src="cargar/icons/cloud.png" alt="cloud">
                </div>
                <span>Arrastra y suelta tus archivos aquí</span>
                <span>O</span>
                <button class="file-selector">Buscar Archivo</button>
                <input type="file" class="file-selector-input" multiple>
            </div>
            <div class="col">
                <div class="drop-here">Soltar aquí</div>
            </div>
        </div>
        <div class="list-section">
            <div class="list-title">Archivo Cargado</div>
            <div class="list"></div>
        </div>
    </div>
<form action="form-registro-ingresos.php" class="formulario" method="post" id="formulario-familiar">



 

      

  <!--Mensajes-->
  <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
    <div class="espacio"></div> <div class="espacio"></div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="button" id="siguiente" tabindex="3">Siguiente</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">
          
        </p>
			</div> <div class="espacio"></div> <div class="espacio"></div>
		</form>
    
      

      		

   
</section>



<script src="cargar/script.js"></script>


      <?php include_once 'includes/templates/footer.php';?>
      <script src="js/formulario-familiar.js"></script>


