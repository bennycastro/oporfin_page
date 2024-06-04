<?php
 session_start(); /*Abre la sesion */?>
 <?php include_once 'includes/templates/header.php';?>

<?php

     
     $_SESSION['vivienda'] = htmlentities ($_POST["vivienda"]);
     $vivienda = $_SESSION['vivienda'];
    

     $_SESSION['calle'] = htmlentities ($_POST["calle"]);
     $calle = $_SESSION['calle'];
   

     $_SESSION['num_ext'] = htmlentities ($_POST["num_ext"]);
     $num_ext = $_SESSION['num_ext'];
    

     $_SESSION['num_int'] = htmlentities ($_POST["num_int"]);
     $num_int = $_SESSION['num_int'];
  
     $_SESSION['cp'] = htmlentities ($_POST["cp"]);
     $cp = $_SESSION['cp'];
 

     $_SESSION['colonias'] = htmlentities ($_POST["colonias"]);
     $colonias = $_SESSION['colonias'];
     
   //  $_SESSION['sit_laboral'] = htmlentities ($_POST["sit_laboral"]);
    // $sit_laboral = $_SESSION['sit_laboral'];
    echo $colonias;
     
     $_SESSION['municipio'] = htmlentities ($_POST["municipio"]);
     $municipio = $_SESSION['municipio'];
    
     echo $municipio;
     
     $_SESSION['ciudad'] = htmlentities ($_POST["ciudad"]);
     $ciudad = $_SESSION['ciudad'];
     echo $ciudad;
     ?>  
<section class="seccion contenedor2">
    <h2 class="titulo"> Cuentanos sobre tu <span  class="remarcado">Situacion Laboral</span></h2></dection>
    <form action="form-registro-familiar.php" class="formulario" method="post" id="formulario-educacion-trabajo">
  

			<!-- Grupo: Tipo de Estudios -->
			<div class="formulario__grupo" id="grupo__estudios">
				<label for="estudios" class="formulario__label">Nivel de Estudios</label>
				<div class="formulario__grupo-input">
         
        <select id = "estudios" class="formulario__input"name="estudios"tabindex="1" >

          <option value="null">Selecciona una Opción</option>
          <option value="POST">Postgrado/Maestría</option>
          <option value="UNIV">Universidad</option>
          <option value="PREP">Preparatoria o Carrera Técnica</option>
          <option value="SECU">Secundaria</option>
          <option value="PRIM">Primaria</option>
          </select>


              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su nivel de estudios</p>
			</div>
      			<!-- Grupo: Situación-->
			<div class="formulario__grupo" id="grupo__sit_laboral">
				<label for="sit_laboral" class="formulario__label">Situación Laboral</label>
				<div class="formulario__grupo-input">
         
        <select id="sit_laboral" class="formulario__input"name="sit_laboral"tabindex="2" onchange="ShowSelected()" >
              <option value="null">Selecciona una Opción</option>
              <option value="TIIN">Contrato por Tiempo Indefinido</option>
              <option value="COTE">Contrato Temporal</option>
              <option value="NEPR">Negocio Propio</option>
              <option value="JUBI">Jubilado/a o Pensionado/a</option>
              <option value="ESTU">Estudiante</option>
              <option value="DESE">Desempleado</option>
              <option value="TRIF">Trabajador Independiente/Freelance</option>
              <option value="AMCA">Ama de Casa</option>
          
              </select>


              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su situación laboral</p>
			</div>
      <!-- Grupo: empresa -->
			<div class="formulario__grupo" id="grupo__empresa">
				<label for="empresa" class="formulario__label">Nombre Empresa</label>
				<div class="formulario__grupo-input">
        <input type="text" class="formulario__input" name="empresa" id="empresa" tabindex="3"autocomplete="off" >
					
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el nombre de la empresa.</p>
			</div>

	<!-- Grupo: Antigüedad -->
  <div class="formulario__grupo" id="grupo__antiguedad">
				<label for="anti" class="formulario__label">Antigüedad Laboral</label>
				<div class="formulario__grupo-input">
        <select id="anti"class="formulario__input" name="anti"tabindex="4"" >
              <option>Selecciona una Opción</option>
              <option>Menor a 1 año</option>
              <option>Entre 1 y 2 años</option>
              <option>Entre 2 y 3 años</option>
              <option>Entre 3 y 4 años</option>
              <option>Entre 4 y 5 años</option>
              <option>Mayor a 5 años</option>
             
          
              </select>

              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su antigüedad laboral</p>
			</div>
	<!-- Grupo: industria -->
  <div class="formulario__grupo" id="grupo__industria">
				<label for="industria" class="formulario__label">Industria</label>
				<div class="formulario__grupo-input">
        <select name="industria"class="formulario__input"tabindex="5">

              <option>Selecciona una Opción</option>
              <option>Alimentos</option>
              <option>Apuestas y Sorteos</option>
              <option>Automotriz</option>
              <option>Comercio de Armas</option>
              <option>Comercio de Divisas</option>
              <option>Comercio de Joyera y Arte</option>
              <option>Construcción</option>
              <option>Entretenimiento para Adultos</option>
              <option >Hotelería y Turismo</option>
              <option>Recivlaje</option>
              <option>Servicios</option>
              <option>Servicios Financieros</option>
              <option>Ventas Mayoreo</option>
              <option>Ventas Menudeo</option>
          
               </select>

              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su antigüedad laboral</p>
			</div>
      	<!-- Grupo: pensionado -->
  <div class="formulario__grupo" id="grupo__pensionado">
				<label for="pensionado" class="formulario__label">Jubilado por:</label>
				<div class="formulario__grupo-input">
        <select name="pensionado"class="formulario__input"tabindex="6">
    
    <option>Selecciona una Opción</option>
    <option>IMSS</option>
    <option>ISSSTE</option>
    <option>Sector Privado</option>
  </select>
  </div>

              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su antigüedad laboral</p>
			</div>
      <!-- Grupo: pensionado -->
  <div class="formulario__grupo" id="grupo__institución">
				<label for="institución" class="formulario__label">Institución</label>
				<div class="formulario__grupo-input">
        <select name="institución"class="formulario__input"tabindex="7">
      
      <option>Selecciona una Opción</option>
      <option>Universidad Nacional Autónoma de México</option>
      <option>Instituto Politécnico Nacional</option>
      <option>Universidad Autónoma Metropolitana</option>
      <option>Universidad Iberoamericana</option>
      <option>Universidad Autónoma del Estado de México</option>
      <option>Universidad Tecnológica de México</option>
      <option>Universidad de Monterrey</option>
      <option>Otra</option>
      
  
       </select>
  </div>

              <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de la opcion que corresponde con su antigüedad laboral</p>
			</div>
      <!--Mensajes-->
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
    <div class="espacio"></div> <div class="espacio"></div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="button" id="siguiente"tabindex="8">Siguiente</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito"></p>
			</div> <div class="espacio"></div> <div class="espacio"></div>
		</form>
    
  


      		

   
</section>

<script src="js/formulario-educacion-trabajo.js"></script>
      <?php include_once 'includes/templates/footer.php';?>
    


