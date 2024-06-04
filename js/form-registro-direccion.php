<?php
session_start();?>
<?php include_once 'includes/templates/header.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<section class="seccion contenedor2">
    <h2 class="titulo">¡Hola! <span  class="remarcado">¿Cual es tu dirección ?</span></h2></dection>
    <form action="form-registro-educacion-trabajo.php" class="formulario" method="post" id="formulario-direccion">
    <?php


$_SESSION['correo'] = htmlentities ($_POST["correo"]);
$correo = $_SESSION['correo'];
/*_
$SESSION['password'] = htmlentities ($_POST["password"]);
$password = $_SESSION['password'];
*/
if (isset($_POST['notificaciones'])) {
            $_SESSION['notificaciones'] = 1;
            $notificaciones = $_SESSION['notificaciones'];
            }
            else{
			$_SESSION['notificaciones'] = 0;
			$notificaciones = $_SESSION['notificaciones'];
            }
?>

			<!-- Grupo: Tipo de Vivienda -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Tipo de Vivienda</label>
				<div class="formulario__grupo-input">

	<select id="vivienda" name="vivienda"  class="formulario__input" tabindex="1" required>
		<option selected>Selecciona una opción</option>
	    <option>Rento</option>
	    <option>Casa Propia</option>
        <option>Casa de algun familiar o amigo</option></select>
        <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tipo de vivienda</p>
			</div>
<!-- Grupo: Calle -->
			<div class="formulario__grupo" id="grupo__calle">
				<label for="calle" class="formulario__label">Calle</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="calle" id="calle" autocomplete="off" tabindex="2" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el nombre de su calle.</p>
			</div>

<!-- Grupo: Num Exterior -->
<div class="formulario__grupo" id="grupo__num_ext">
				<label for="num_ext" class="formulario__label">Número Exterior</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="num_ext" id="num_ext"  autocomplete="off"tabindex="3" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca número exterior válido de su domicilio</p>
			</div>
<!-- Grupo: Num Inteior -->
			<div class="formulario__grupo" id="grupo__num_int">
				<label for="num_int" class="formulario__label">Número Interior</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="num_int" id="num_int" autocomplete="off" tabindex="4">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el número interior válido de su domicilio</p>
			</div>
        <!-- Grupo: CP -->
			<div class="formulario__grupo" id="grupo__cp">

				<label for="cp" class="formulario__label">Código Postal</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input"  name="cp" id="cp" onblur="focusColonias();" autocomplete="off" tabindex="5" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el número interior de su domicilio</p>
			</div>
        <!-- Grupo: Colonia -->
				<div class="formulario__grupo" id="grupo__colonias">
        <label for="colonias" class="formulario__label">Colonia</label>
		<!-- Muestra Colonias desde el GetMunicipios -->
        <select name="colonias" id="colonias" class="formulario__input"  tabindex="6" required>"
		</select>

				<div class="formulario__grupo-input">
				<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tu colonia</p>
			</div>


<!-- Grupo: alcaldía -->
				<div class="formulario__grupo" id="grupo__nombre">
				<label for="municipios" class="formulario__label">Alcaldía</label>
				<div class="formulario__grupo-input">
<!-- Muestra los municipios desde el GetMunicipios -->
       		 <select name="municipios" id="municipios" class="formulario__input"  tabindex="7"required>
			</select>

			    <i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tu alcaldía</p>
			</div>
<!-- Grupo: ciudad -->
				<div class="formulario__grupo" id="grupo__nombre">
				<label for="ciudades" class="formulario__label">Ciudad</label>
				<div class="formulario__grupo-input">
<!-- Muestra las ciudades desde el GetCiudades-->
			<select name="ciudades" id="ciudades" class="formulario__input" tabindex="8" required>
			</select>

			<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Selecciona tu ciudad</p>
			</div>

<!--Mensajes-->
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>
    <div class="espacio"></div> <div class="espacio"></div>
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="button" tabindex="9" required>Siguiente</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito"></p>
			</div> <div class="espacio"></div> <div class="espacio"></div>
		</form>

</section>




<?php include_once 'includes/templates/footer.php';?>
<script src="js/formulario-direccion.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
<script>
$(obtener_registrosColonias());

function obtener_registrosColonias(colonias) /*BUSCA LAS COLONIAS EN BASE AL CODIGO POSTAL INTRODUCIDO*/
{
	$.ajax({
		url : 'includes/funciones/buscador.php',
		type : 'POST',
		dataType : 'html',
		data : { colonias: colonias },
		})

	.done(function(resultado){
		$("#colonias").html(resultado);
	})
}
	
$(document).on('keyup', '#cp', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registrosColonias(valorBusqueda);
	}
	else
		{
			obtener_registrosColonias();
		}
});
</script>
<script>
$(obtener_registrosMunicipios());

function obtener_registrosMunicipios(municipios) /*BUSCA LAS COLONIAS EN BASE AL CODIGO POSTAL INTRODUCIDO*/
{
	$.ajax({
		url : 'includes/funciones/buscadorMunicipios.php',
		type : 'POST',
		dataType : 'html',
		data : { municipios: municipios },
		})

	.done(function(resultadoMunicipios){
		$("#municipios").html(resultadoMunicipios);
		
	})
}

$(document).on('focus', '#colonias', function()

{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registrosMunicipios(valorBusqueda);
	}
	else
		{
			obtener_registrosMunicipios();
		}
});

</script>
<script>
	function focusColonias(){
		document.getElementById(colonias).focus();
	}
</script>
<script>
$(obtener_registrosCiudades());

function obtener_registrosCiudades(ciudades) /*BUSCA LAS COLONIAS EN BASE AL CODIGO POSTAL INTRODUCIDO*/
{
	$.ajax({
		url : 'includes/funciones/buscadorCiudades.php',
		type : 'POST',
		dataType : 'html',
		data : { ciudades: ciudades },
		})

	.done(function(resultadoCiudades){
		$("#ciudades").html(resultadoCiudades);
	})
}

$(document).on('chage', '#municipios', function()

{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registrosCiudades(valorBusqueda);
	}
	else
		{
			obtener_registrosCiudades();
		}
});

</script>
