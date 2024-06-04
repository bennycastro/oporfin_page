<?php
    session_start();?>
<script src="admin/sweet/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="admin/sweet/dist/sweetalert2.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/>
<?php include_once 'includes/templates/header.php';?>
<!--Genera los mensajes de alerta -->
<script>
  Swal.fire(
  'ATENCIÓN',
  
  '<span style="text-align: justify; font-size:1rem;">A todos nuestros clientes y público en general, se les informa que nuestra financiera <strong>Oportunidades Financieras para tu Negocio, S.A. DE C.V., SOFOM E.N.R. (Oporfin)</strong>, no solicita ningún tipo de pago previo a la liberación de algún crédito.</br> </br>Actualmente solo tenemos presencia en la CDMX y algunas zonas del Estado de México.</br></br> Si alguien les ofrece un crédito a nombre de Oporfin, y les solicita el pago por adelantado para liberarles su crédito <strong> PRESTA MUCHA ATENCIÓN, SE TRATA DE UN FRAUDE</strong>, en Oporfin no solicitamos ningún anticipo previo al otorgamiento del crédito. </br></br>Si tienes dudas comunícate directamente a nuestra línea <strong>(55)7160-6534</strong>. </br><br>DENUNCIA AL 800 999 80 80 - Condusef .</br></br><a href="https://tramites.condusef.gob.mx/QuejaElectronica/index.php"> QUEJAS CONDUSEF </a></span>',
  'warning' )
</script>
<script language= javascript type= text/javascript >

 function success(){
Swal.fire(
  'Tu Solicitud fue recibida exitosamente!',
  'Uno de nuestros asesores te contactará en un periodo no mayor a 24 horas  para darte excelentes noticias sobre tu solicitud.',
  'success' )
}
function fail(){
  Swal.fire({
    icon: 'error',
    title: 'Algo Salio Mal al Registrar tu solicitud!',
    text: 'Por favor intentalo de nuevo',
})}
  </script>;
  <?php
   

//Funcion que recibe el codigo de referido 
  if (isset($_GET['refer'])) {
    $_SESSION['promotor'] = $_GET["refer"]; 
    $promotor = $_SESSION['promotor'];
  }

//Funcion que recibe el resultado del registro de la solicitud y lo muestra en un mensaje sweet alert
  if(isset($_GET['result']  ))
  {
  if($_GET['result']=='success'){
    echo "<script>";
    echo "success();";
    echo "</script>";
  }
  if($_GET['result']=='fail'){
    echo "<script>";
    echo "fail();";
    echo "</script>";
  }
}?>



  <header class="site-header">
    <!--Hero-->
    <div class="hero">
     <div class="contenido-header">
 
      </div>
      <div class="texto-banner">
        <?php include_once 'estimador.php';?> <!--Llamamos al cotizador de créditos-->
      </div>
    </div><!--Close Hero-->
  </header>

    <!--Secciones-->
    <div class="espacio"></div>
    <div class="circles-separator">
      <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
     <section class="seccion contenedor">
      <h2>Tu crédito en <span  class="remarcado">3 Sencillos Pasos</span></h2>
    </section>

  <div class="pasos contenedor">
                <section class="paso">
                    <h3>1. Completa tu solicitud</h3>
                          <div class="iconos">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                <line x1="16" y1="5" x2="19" y2="8" />
                              </svg>
                            </div>
                  <p  class="info-iconos">Llena la Solicitud de Crédito y el formato de autorización para la consulta de su historial crediticio.</p>
                </section>
                       <section class="paso">
                          <h3>2. Prepara tu documentación</h3>
                             <div class="iconos">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="3" y="4" width="18" height="16" rx="3" />
                                <circle cx="9" cy="10" r="2" />
                                <line x1="15" y1="8" x2="17" y2="8" />
                                <line x1="15" y1="12" x2="17" y2="12" />
                                <line x1="7" y1="16" x2="17" y2="16" />
                              </svg>
                            </div>
                              <p  class="info-iconos">  <p  class="info-iconos">Prepara tu INE, Comprobante de Domicilio, Comprobante de ingresos y los formatos que te enviaremos</p></p>
                        </section>

                <section class="paso">
                       <h3>3.Listo para recibir tu dinero</h3>
                          <div class="iconos">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                              <circle cx="12" cy="12" r="9" />
                              <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                              <path d="M12 6v2m0 8v2" />
                            </svg>
                          </div>
                    <p  class="info-iconos">Una vez autorizado el crédito, la firma del contrato se realizará en las oficinas para validar documentación y solicitar datos bancarios.</p>
                </section>
  </div>
    <!--Close Primera Seccion "3 sencillos pasos"-->
    <!--Open Segunda Seccion "Por que elegir Oporfin"-->
    <div class="espacio"></div>
    <section class="seccion contenedor bg">
      <div class="espacio"></div>
        <h2>Por que elegir <span  class="remarcado">Oporfin</span></h2>
        <p>Nuestra misión es apoyar las necesidades de financiamiento tanto de trabajadores, emprendedores y empresarios. ¡Siempre estaremos encantados de atenderte!</p>
      <div class="caracteristicas contenedor">
        <section class="caracteristica">
          <h3>Rápidez</h3>
              <div class="iconos">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <circle cx="12" cy="13" r="7" />
                  <polyline points="12 10 12 13 14 13" />
                  <line x1="7" y1="4" x2="4.25" y2="6" />
                  <line x1="17" y1="4" x2="19.75" y2="6" />
                </svg>
              </div>
          <p  class="info-iconos">Te damos respuesta rápida a tu solicitud de crédito.</p>
        </section>
        
          <section class="caracteristica">
            <h3>Flexibilidad</h3>
                <div class="iconos">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="14" cy="6" r="2" />
                    <line x1="4" y1="6" x2="12" y2="6" />
                    <line x1="16" y1="6" x2="20" y2="6" />
                    <circle cx="8" cy="12" r="2" />
                    <line x1="4" y1="12" x2="6" y2="12" />
                    <line x1="10" y1="12" x2="20" y2="12" />
                    <circle cx="17" cy="18" r="2" />
                    <line x1="4" y1="18" x2="15" y2="18" />
                    <line x1="19" y1="18" x2="20" y2="18" />
                  </svg>
                </div>
            <p  class="info-iconos">Buscamos en conjunto un producto a tu medida con plazos que se ajusten a tus necesidades y sin penalización por pagos anticipados.</p>
          </section>
        <section class="caracteristica">
          <h3>Comprometidos contigo</h3>
            <div class="iconos">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-accessible" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1" />
                <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
              </svg>
            </div>
          <p  class="info-iconos">No hay pagos por adelantado, depósitos o pólizas de seguro para la autorización de tu crédito.</p>
      </section>
      <section class="caracteristica">
        <h3>Confidencialidad</h3>
          <div class="iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <rect x="5" y="11" width="14" height="10" rx="2" />
              <circle cx="12" cy="16" r="1" />
              <path d="M8 11v-4a4 4 0 0 1 8 0v4" />
            </svg> 
          </div>
          <p  class="info-iconos">Tu información personal será utilizada única y exclusivamente para proveer los servicios y productos solicitados.</p>
      </section>
    </div>
  </section>
  <!--Close segunda seccion Por que elegir Oporfin-->
  <!--Open tercera seccion "Bienvenidos"-->
      <div class="espacio"></div><div class="espacio"></div>
      <section class="accion contenedor">
        <section></section>
        <section><nav class="cotizar"><a href="form-registro-nombre.php">¡Solicítalo ahora!</a></nav></section>
        <section></section>
      </section>

    <section class="seccion contenedor">
 
    <h2>¡Bienvenido a <span  class="remarcado">Oporfin</span></h2>
    <p>Somos un grupo de profesionales financieros comprometidos en atender sus necesidades, con calidad y eficiencia, siempre buscando el producto financiero que le ajuste mejor!</p>
</section>  
<!--Close tercera seccion "Bienvenidos"-->
<!--Open cuarta seccion "Parallax"-->
    <div class="experiencias parallax">
      <div class="contenedor">
        <ul class="resumen clearfix">
          <li><h2 class="info-experiencias">Te ayudamos a cumplir tus sueños!</h2></li>
        </ul>
      </div>
    </div>
<!--Close cuarta seccion "Parallax"-->
<!--Open  quinta seccion "Elige la solución que necesitas"-->
 <section class="productos seccion ">
  <h2>Elige la solución que necesitas</h2>
  
  <div class="contenedor ">
    <ul class="lista-productos clearfix">
      <li>
        <div class="tabla-producto">
          
        <h3>Microcrédito</h3>
          <p>Créditos desde $10,000 y hasta $50,000 MXN, para algún imprevisto.</p>
          <nav class="cotizar"><a href="form-registro-nombre.php">¡Solicítalo ahora!</a></nav>
        </div>
      </li>
      <li>
        <div class="tabla-producto">
         
         
          <h3>Crédito Pyme</h3>
          <p>Crédito para microempresarios que buscan proyectar su negocio, te apoyamos a fortalecer tu empresa con hasta $700,000 MXN</p>
            
          <nav class="cotizar"><a href="form-registro-nombre.php">¡Solicítalo ahora!</a></nav>
        </div>
      </li>
      <li>
        <div class="tabla-producto">
        <h3>Crédito Simple</h3>
        <p> Obtén desde $51,000 MXN para tus necesidades de capital.</p>
          
          
          <nav class="cotizar"><a href="form-registro-nombre.php">¡Solicítalo ahora!</a></nav>
        </div>
      </li>
    </ul>
  </div><div class="espacio"></div>
 </section>
<!--close  quinta seccion "Entidades Reguladoras"-->

<section class="seccion contenedor">
      <h2>Con Oporfin<span  class="remarcado"> tu información esta segura</span></h2>
    </section>

  <div class="pasos contenedor">
             
                       <section class="paso">
                          
                          <div class="iconos">
                              <a href="admin/formatos/MODAVI15350-3112023-102433.pdf" target="_blank"><img src="img/une.webp" alt="Módelo UNE"></a>
                            </div>
                            
                        </section>
                        <section class="paso">
                  
                  <div class="iconos">
                      <a href="https://www.buro.gob.mx/" target="_blank"><img src="img/buro.webp" alt="Buró de Crédito"></a>
                    </div>
              </section>
                <section class="paso">
               
                          <div class="iconos">
                              <a href="https://www.condusef.gob.mx/?p=contenido&idc=1875&idcat=1" target="_blank"><img src="img/condusef.webp" alt="Módelo UNE"></a>
                            </div>
                    
                </section>
  </div>
  <div class="espacio"></div><div class="espacio"></div>
    <!--Close Primera Seccion "Entidades Reguladoras"-->

 <?php include_once 'includes/templates/footer.php';?>


