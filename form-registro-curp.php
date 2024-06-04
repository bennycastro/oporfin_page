<?php
session_start();?>

<?php include_once 'includes/templates/header.php';?>


<form action="form-registro-mail.php" class="registro caja-1-row" method="post" id="formulario-curp">
<?php

    $_SESSION['nombre'] = htmlentities ($_POST["nombre"]);/*Asigna el valor de HTML a una variable de session */
    $nombre = $_SESSION['nombre'];


    $_SESSION['segundo-nombre'] = htmlentities ($_POST["segundo-nombre"]);
    $segundo_nombre = $_SESSION['segundo-nombre'];

    $_SESSION['apellido-paterno'] = htmlentities ($_POST["apellido-paterno"]);
    $apellido_paterno = $_SESSION['apellido-paterno'];
    $_SESSION['apellido-materno'] = htmlentities ($_POST["apellido-materno"]);
    $apellido_materno = $_SESSION['apellido-materno'];
?>
<section class="seccion contenedor2">
    <h2 class="titulo">Completa tu información <span  class="remarcado"> para continuar </span></h2>
     <!-- Grupo: curp -->
     <div class="formulario__grupo" id="grupo__curp">
       <label for="curp" class="formulario__label">Curp</label>
       <div class="formulario__grupo-input">
         <input type="text" class="formulario__input"  autocomplete="off"name="curp" id="curp"  tabindex="1">
         <i class="formulario__validacion-estado fas fa-times-circle"></i>
       </div>
       <p class="formulario__input-error">Introduzca un Curp Valido (18 Caracteres) en MAYÚSCULAS</p>
     </div>
     <!-- Grupo: celular -->
     <div class="formulario__grupo" id="grupo__num_celular">
       <label for="num_celular" class="formulario__label">Celular</label>
       <div class="formulario__grupo-input">

      <input type="tel" class="formulario__input" autocomplete="off" name="num_celular" id="num_celular"tabindex="2">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">Introduzca un número de telefono a 10 dígitos</p>
    </div>

  <!-- Grupo: telefono fijo -->
<div class="formulario__grupo" id="grupo__fijo">
       <label for="num_casa" class="formulario__label">Telefono Fijo</label>
       <div class="formulario__grupo-input">
         <input type="tel" class="formulario__input" autocomplete="off" name="num_casa" id="num_casa"tabindex="3">
         <i class="formulario__validacion-estado fas fa-times-circle"></i>
       </div>
       <p class="formulario__input-error">Introduzca un número de telefono a 10 dígitos</p>
     </div>
     <div class="espacio"></div> <div class="espacio"></div>
 <div class="formulario__mensaje" id="formulario__mensaje">
       <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
     </div>
</div><div class="espacio"></div> <div class="espacio"></div>
     <div class="formulario__grupo formulario__grupo-btn-enviar">
       <button type="submit" class="button"tabindex="4">Siguiente</button>
       <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"></p>
     </div> <div class="espacio"></div> <div class="espacio"></div>
</section>
</form>

<!-------------------------------------------cIERRE MAIN-------------------------------------------------->
<script type="text/javascript" src="js/validar_curp.js"></script>
<script src="js/formulario-curp.js"></script>
<?php include_once 'includes/templates/footer.php';?>

