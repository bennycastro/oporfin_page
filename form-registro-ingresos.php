<?php session_start();
 include_once 'includes/templates/header.php';?>

  <section class="seccion contenedor2">
  <?php
/*Abre la sesion */
   //  echo "Aqui van todas las variables";
     $nombre = $_SESSION['nombre'];
     // echo $nombre;
     $segundo_nombre = $_SESSION['segundo-nombre'];
    //  echo $segundo_nombre;
     $apellido_paterno = $_SESSION['apellido-paterno'];
    //  echo$apellido_paterno;
     $apellido_materno = $_SESSION['apellido-materno'];
   //   echo $apellido_materno;
     $curp = $_SESSION['curp'];
   //   echo$curp;
     $num_celular = $_SESSION['num_celular'];
   //   echo $num_celular;
     $num_casa = $_SESSION['num_casa'];
   //   echo $num_casa;
     $correo_cte = $_SESSION['correo_cte'];
    //  echo $correo_cte;
     //$password = sha1($_SESSION['password']);
   //  $passwordsha1 = sha1('$password');
    // $password;
    $notificaciones = $_SESSION['notificaciones'];
    $vivienda = $_SESSION['vivienda'];
    $calle = $_SESSION['calle'];
    $num_ext = $_SESSION['num_ext'];
    $num_int = $_SESSION['num_int'];
    $colonias = $_SESSION['colonias'];
     $municipio = $_SESSION['municipio'];
     $ciudad = $_SESSION['ciudad'];
  
     $estudios = $_SESSION['estudios'];
  
     $sit_laboral = $_SESSION['sit_laboral'];

     $empresa = $_SESSION['empresa'];
  
     $anti = $_SESSION['anti'];
   
     $industria = $_SESSION['industria'];

     $pensionado = $_SESSION['pensionado'];
   
     $institución = $_SESSION['institución'];
  
    // $_SESSION['estado_civil'] = htmlentities ($_POST["estado_civil"]);
     $estado_civil = $_SESSION['estado_civil'];

     //$_SESSION['motivo'] = htmlentities ($_POST["motivo"]);
     $motivo = $_SESSION['motivo'];
   
      ?>

    

   <?php    try {
            $conn = new mysqli('localhost', 'oporfin_user', 'gh$u}ppQtk0j','oporfin_cms');//remoto
    $conn-> set_charset("utf8");

    if ($conn->connect_error){
        echo $error -> $conn->connect_error;
    

    }

        $sql ="INSERT INTO `cliente`
        (`curp`, `primer_nombre`, `segundo_nombre`,
        `apell_pat`, `apell_mat`, `num_cel`, `num_casa`,
        `correo_cte`,`contrasena`,`registro_newsletter`,
        `tipo_vivienda`,`calle`,`num_ext`,`num_int`,`cp`,
        `id_colonia`, `municipio`, `ciudad`, `edo_civil`, `nivel_estudios`,
        `situación_laboral`, `empresa`, `antiguedad`,
         `industria`,`pensionado`,`institucion`) 
        VALUES 
        ('$curp', '$nombre', '$segundo_nombre',
         '$apellido_paterno', '$apellido_materno', '$num_celular',
         '$num_casa', '$correo_cte','1234567890','1',
         '$vivienda','$calle', '$num_ext', '$num_int','$cp','$colonias','$municipio','$ciudad',
         '$estado_civil','$estudios', '$sit_laboral', '$empresa', 
         '$anti', '$industria', '$pensionado', '$institucion')
    /*SI EL CLIENTE YA ESTA REGISTRADO, VALIDA EL CURP Y ACTUALIZA EL REGISTRO COMPLETO DEL CLIENTE*/
    ON DUPLICATE KEY UPDATE primer_nombre = '$nombre',
                            segundo_nombre = '$segundo_nombre',
                             apell_pat ='$apellido_paterno',
                             apell_mat ='$apellido_materno',
                             num_cel= '$num_celular',
                             num_casa='$num_casa',
                             correo_cte= '$correo_cte',
                             contrasena='1234567890',
                             registro_newsletter= '1',
                             tipo_vivienda='$vivienda',
                             calle='$calle',
                             num_ext= '$num_ext',
                             num_int='$num_int',
                             cp='$cp',
                             id_colonia='$colonias',
                             municipio='$municipio',
                             ciudad='$ciudad',
                             edo_civil='$estado_civil',
                             nivel_estudios='$estudios',
                             situación_laboral= '$sit_laboral',
                             empresa='$empresa',
                             antiguedad='$anti',
                             industria='$industria',
                             pensionado='$pensionado',
                             institucion ='$institucion'     
                             ";
           $resultado =$conn ->query($sql);
                                    
          } 
          
          catch (\Exception $e){
            echo $e->getMessage();
         }
        
     
                  
     
      $conn->close();
   ?>

    <h2 class="titulo">¿Cual es <span  class="remarcado">tu ingreso ?</span></h2>
    <form action="enviando.php" class="registro caja-1-row" method="post" id="formulario-ingresos">

 <!-- Grupo: Num Inteior -->
 <div class="formulario__grupo" id="grupo__ingresos">
				<label for="ingresos" class="formulario__label">Ingresos comprobables después de impuestos</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="ingresos" id="ingresos"   tabindex="1"onchange="MASK(this,this.value,'-$##,###,##0.00',1)" autocomplete="off" type="number" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Introduzca el número válido</p>
			</div>


    
     <div class="espacio"></div> <div class="espacio"></div>
     

     <div class="formulario__mensaje" id="formulario__mensaje">
       <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
     </div>
</div><div class="espacio"></div> <div class="espacio"></div><div class="espacio"></div> <div class="espacio"></div>
     <div class="formulario__grupo formulario__grupo-btn-enviar">
       <button type="submit" class="button"tabindex ="2">Siguiente</button>
       <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"><p>
     </div> <div class="espacio"></div> <div class="espacio"></div>
</section>
   </form>     <div class="espacio"></div> <div class="espacio"></div>  
        <?php include_once 'includes/templates/footer.php';?>
      <script src="js/formulario-direccion.js"></script>


<script>
  document.getElementById('oculto').value = document.getElementById('ingresos').value;

  function MASK(form, n, mask, format) {
  if (format == "undefined") format = false;
  if (format || NUM(n)) {
    dec = 0, point = 0;
    x = mask.indexOf(".")+1;
    if (x) { dec = mask.length - x; }

    if (dec) {
      n = NUM(n, dec)+"";
      x = n.indexOf(".")+1;
      if (x) { point = n.length - x; } else { n += "."; }
    } else {
      n = NUM(n, 0)+"";
    } 
    for (var x = point; x < dec ; x++) {
      n += "0";
    }
    x = n.length, y = mask.length, XMASK = "";
    while ( x || y ) {
      if ( x ) {
        while ( y && "#0.".indexOf(mask.charAt(y-1)) == -1 ) {
          if ( n.charAt(x-1) != "-")
            XMASK = mask.charAt(y-1) + XMASK;
          y--;
        }
        XMASK = n.charAt(x-1) + XMASK, x--;
      } else if ( y && "$0".indexOf(mask.charAt(y-1))+1 ) {
        XMASK = mask.charAt(y-1) + XMASK;
      }
      if ( y ) { y-- }
    }
  } else {
     XMASK="";
  }
  if (form) { 
    form.value = XMASK;
    if (NUM(n)<0) {
      form.style.color="#FF0000";
    } else {
      form.style.color="#00d586;";
    }
  }
  return XMASK;
}

// Convierte una cadena alfanumérica a numérica (incluyendo formulas aritméticas)
//
// s   = cadena a ser convertida a numérica
// dec = numero de decimales a redondear
//
// La función devuelve el numero redondeado

function NUM(s, dec) {
  for (var s = s+"", num = "", x = 0 ; x < s.length ; x++) {
    c = s.charAt(x);
    if (".-+/*".indexOf(c)+1 || c != " " && !isNaN(c)) { num+=c; }
  }
  if (isNaN(num)) { num = eval(num); }
  if (num == "")  { num=0; } else { num = parseFloat(num); }
  if (dec != undefined) {
    r=.5; if (num<0) r=-r;
    e=Math.pow(10, (dec>0) ? dec : 0 );
    return parseInt(num*e+r) / e;
  } else {
    return num;
  }
}
</script>
