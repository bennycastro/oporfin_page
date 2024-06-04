<?php
   session_start();?>
   <?php include_once 'includes/templates/header.php';?>


  <section class="seccion contenedor2">
    <h2 class="titulo">Por favor, completa tu <span  class="remarcado">registro</span></h2>
  
 <form action="form-registro-direccion.php" class="formulario" method="post" id="formulario-mail">
 <?php
  

  
       $_SESSION['curp'] = htmlentities ($_POST["curp"]);
       $curp = $_SESSION['curp'];
   
       $_SESSION['num_celular'] = htmlentities ($_POST["num_celular"]);
       $num_celular = $_SESSION['num_celular'];
       
       if(isset($_POST['num_casa'])){
       $_SESSION['num_casa'] = htmlentities ($_POST["num_casa"]);
       $num_casa = $_SESSION['num_casa'];
       }
       else{
        $num_casa="0000000000";
        
       }
  
       ?>


     <!-- Grupo: Correo Electronico -->

			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo_cte" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo_cte" id="correo_cte" autocomplete="off" placeholder="tucorreoelectrónico@dominio.com" tabindex="1">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>
     <!-- Grupo: Correo Electronico -->

			<div class="formulario__grupo" id="grupo__correo_confirmacion">
				<label for="correo_confirmacion" class="formulario__label">Confirmar Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo_confirmacion" autocomplete="off" id="correo_confirmacion" placeholder="tucorreoelectrónico@dominio.com" tabindex="2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambos correos deben ser iguales.</p>
			</div>

			
      		<!-- Grupo: Contraseña -->
			<!-- <div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" autocomplete="off" id="password" tabindex="3">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 8 a 15 caracteres<br>
       Al menos una letra mayúscula<br>Al menos una letra minúscula<br>Al menos un caracter especial<br>Sin espacios en blanco
        </p>
			</div>-->

		<!-- Grupo: Contraseña 2-->
			<!-- <div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" autocomplete="off" id="password2" tabindex="4">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>
			</div>--><div class="espacio"></div>
      <div class="espacio"></div><div class="espacio"></div>

      </section> 
      
      <section class="bg"> 
      <section class="contenedor2">
      <div class="espacio"></div>
      <div class="espacio"></div>
			<!--Grupo: Terminos y Condiciones -->
      
			<div class="formulario__grupo" id="grupo__terminos">
      <div tabindex="5"><br>
          <input type="checkbox" id="buro" class="check" >
          <label for="buro"> Acepto que se consulte mi historial crediticio en las Sociedades de Información Crediticia.</label>
             <h3 class="justify buro">Por este conducto autorizo expresamente a OPORFIN, para que por conducto de sus funcionarios facultados lleve a cabo investigaciones sobre mi comportamiento crediticio en las Sociedades de Información Crediticia que estime conveniente. Así mismo, declaro que conozco la naturaleza y alcance de la información que se solicitara, del uso que OPORFIN hará de tal información y de que esta podrá realizar consultas periódicas de mi historial crediticio, consintiendo que esta autorización se encuentra vigente por un periodo de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos relación jurídica.</h3>
          </div>
            <div tabindex="6">      
          <input type="checkbox" id="privacidad" class="check-priv">
          <label for="privacidad" >
            He leído y acepto las políticas de privacidad</label>
            <h3 class="justify"> <a href="https://oporfin.mx/aviso_de_Privacidad.pdf" target="_blank">Leer políticas de privacidad.</a> </h3>
           
          </div><br>
          <div tabindex="7">
            
              <input type="checkbox" id="notificaciones" name="notificaciones" value="1" class="check-priv">
              <label for="notificaciones" >
                 Acepto recibir noticias, ofertas e información relevante sobre mi cuenta.</label>
              
      
        </div>

				
			</div><div class="espacio"></div>
      <div class="espacio"></div><div class="espacio"></div>
      <div class="espacio"></div>
     
      <br><br>
     

     </div>
      <div class="formulario__mensaje" id="formulario__mensaje">
		<!-- 		<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>-->
			</div>
      			<div class="formulario__grupo formulario__grupo-btn-enviar"><br>
				<button type="submit" id="enviarmail" class="button"tabindex="9">Enviar</button><br>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito"></p>
			</div>
      </section>

     </form> 
      <?php include_once 'includes/templates/footer.php';?>
      <script src="js/formulario-mail.js"></script>
      

     
     
