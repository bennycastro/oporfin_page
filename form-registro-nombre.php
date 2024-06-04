<?php session_start();?>

<?php include_once 'includes/templates/header.php';?>

<!-----------------------------------------MAIN---------------------------------------------->
<section class="seccion contenedor2">
<h2 class="titulo">¡Hola! <span  class="remarcado">¿Cual es tu nombre?</span></h2></dection>
    <form action="form-registro-curp.php" class="formulario" method="post" id="formulario-nombre">
   
   <?php
   if(isset($_POST['importe'])){
	$_SESSION['importe'] = htmlentities ($_POST["importe"]);//obtenemos el valor del cotizador 
	$importe = $_SESSION['importe'];//lo guardamos en la variable 
	}else{
		
	}
    ?>
			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" autocomplete="off" name="nombre" id="nombre">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca su Nombre</p>
			</div>
<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__segundo_nombre">
				<label for="segundo-nombre" class="formulario__label">Segundo Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input"  autocomplete="off" id="segundo-nombre" name="segundo-nombre" >
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca su segundo Nombre.</p>
			</div>
<!-- Grupo: Nombre -->
<div class="formulario__grupo" id="grupo__apellido_paterno">
				<label for="apellido-paterno" class="formulario__label">Apellido Paterno</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" autocomplete="off"  name="apellido-paterno" id="apellido-paterno">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca su Apellido Paterno.</p>
			</div>
      <!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__apellido_materno">
				<label for="apellido-materno" class="formulario__label">Apellido Materno</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" autocomplete="off"  name="apellido-materno" id="apellido-materno">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca su Apellido Materno</p>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
    <div class="espacio"></div> <div class="espacio"></div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="button">Siguiente</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito"></p>
			</div> <div class="espacio"></div> <div class="espacio"></div>
		</form>
</section>
</div>
<!-------------------------------------------cIERRE MAIN-------------------------------------------------->
<?php include_once 'includes/templates/footer.php';?>
<script src="js/formulario.js"></script>






