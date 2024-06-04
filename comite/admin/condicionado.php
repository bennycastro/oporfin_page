
<?php

ob_start();
?>
<style>
  .clearfix:after {
  content: "";
  display: table;
  clear: both;
}
@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    
    src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTa-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');
      unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;

}
body {
  
  width: 100%;  
  height: 100%; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: 'Open Sans'; 
  font-size: .8em;
  

}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: left;
  margin-bottom: 10px;
  float: left;
}

#logo img {
  width: 250px;
  float: left;
}
.firma img {
 width: 150px;
 margin-left:200px;
 margin-top:-80px;
  
}
h2 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color:#000000;
  line-height: 1.1em;
  font-family: 'Open Sans';
  text-align: center;
  
}
h3 {
  color:#000000;
  margin: 3rem 0 2rem 0;
  text-align: justify;
  width: 145%;
  
  display: inline-block;
  font-family: 'Open Sans';
 
 
}
h4 {
  color:#000000;
  
  text-align: justify;
  width: 145%;
  margin-right: 10px;
  display: inline-block;
  font-family: 'Open Sans';
 
}

#project {
width:70%;
  float: left;
}

#project span {
  color:#000000;
  margin: 3rem 0 2rem 0;
  text-align: justify;
  width: 145%;
  margin-right: 10px;
  display: inline-block;
  font-family: 'Open Sans';
  font-weight:100;
}
#project2 {
width:30%;
  float: left;
}
#project2 span {
  color:#000000;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-family: 'Open Sans';
}
#company {
  text-align: center;
  float: left;
}

#project div,
#company div {
  white-space: nowrap;   
  margin-left: -200px     
}
#project2 div,
#company div {
  white-space: nowrap;        
}

table {
  font-family: 'Open Sans'; 
  width: 145%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 10px;
  
}

table tr:nth-child(2n-1) td {
  
}

table th,
table td {
  text-align: center;
   border-top: 1px solid #C1CED9;
   border-left: 1px solid #C1CED9;
	 border: 1px solid #C1CED9;
}
.firmas {
  text-align: center;
   border: 0;
}
.resultado {
  text-align: center;
   border: 1px solid #C1CED9;
}

table th {
  font-family: 'Open Sans'; 
  padding: 5px 5px;
  color:#000000;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
  background: #F5F5F5;
}
.fondo-gris{
  background: #F5F5F5;

}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding:5px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-family: 'Open Sans'; 

 
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

  </style>
<?php

include_once 'includes/funciones/funciones.php';



if (isset($_GET['id_aut'])) {
      
    $_SESSION['id_aut'] = $_GET['id_aut'];
    $id_aut = $_SESSION['id_aut'];
   
     $query = "SELECT * FROM solicitud_autorizacion
     WHERE id_aut ='$id_aut'";
  

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $id_aut = $row['id_aut'];
      $nombre = $row['nombre'];
      $num_sol = $row['num_sol'];
      $monto_sol = $row['monto_sol'];
      $monto_aut = $row['monto_aut'];
      $plazo = $row['plazo'];
      $tasa = $row['tasa'];
      $comision = $row['comision'];
      $promotor = $row['promotor'];
      $uso_cred = $row['uso_cred'];
      $tipo_credito = $row['tipo_credito'];
      $dictamen_analista = $row['dictamen_analista'];
      $observaciones_analista = $row['observaciones_analista'];
      $analista = $row['analista'];
      $observaciones_comite = $row['observaciones_comite'];
      $fecha_dictamen = $row['fecha_dictamen'];
     
     }
     $impo_comision= ($monto_aut * ($comision/100));
     $iva_comision= $impo_comision *.16;
     $monto_a_dispersar = ($monto_aut - ($impo_comision + $iva_comision));
  }?>



<html>
<body>
<header class="clearfix">
      <div id="logo">
        <img src="https://oporfin.mx/img/logo_oporfin.svg" >
      </div>
      <div id="company" class="clearfix">
        <div><h2>OPORTUNIDADES FINANCIERAS </br>
         PARA TU NEGOCIO S.A. DE C.V. SOFOM E.N.R.</h2></div>
        
        <div>AUTORIZACIÓN #: OP-MTK-V1-000<?php echo "$id_aut" ?></div>
        <div><?php echo "$nombre" ?></div>
        <div>CRÉDITO <?php echo "$tipo_credito"?></div>
    <div> <h2>C O N D I C I O N A D O</h2></div>
      </div>
	  <br>
      
	
    </header>
  
    <main>
			<p><?php
  // Obteniendo la fecha actual con hora, minutos y segundos en PHP
 
  echo $fecha_dictamen;
?></p>

<div id="project">
  
<span>Yo, Rosa
Monterrubio Cotija, en carácter de representante del comité de crédito de la
empresa Oportunidades Financieras para tu Negocio S.A. de C.V. SOFOM ENR
(OPORFIN) y con la autoridad que el mismo me ha otorgado, AUTORIZO la
dispersión de los fondos solicitados bajo las siguientes especificaciones y con la condicionante que se especifica al pie del documento.</span>
      <table>
        <thead>
          <tr>
            <th class="qty">CRITERIO</th>
            <th class="qty">VALOR</th>
            <th class="qty">CHECK</th>
           
          </tr>
        </thead>
        <tbody>
  					<tr>
  					<td class="fondo-gris">NOMBRE</td>
  					<td class="TOTAL"><?php echo "$nombre" ?></td>
            <td class="TOTAL"></td>
  					</tr>';
      
              <tr>
              <td class="fondo-gris">MONTO AUTORIZADO</td>
             
              <td class="TOTAL">$ <?php echo number_format($monto_aut,2,".",",") ?> </td>
              <td class="TOTAL"></td>
              </tr> 
              <tr>
              <td class="fondo-gris">- COMISIÓN (<?php echo "$comision" ?> %)</td>
              <td class="TOTAL">$ <?php echo number_format($impo_comision,2,".",","); ?></td>
              <td class="TOTAL"></td>
              </tr> 
              <tr>
              <td class="fondo-gris">- IVA de la Comisión (16%)</td>
              <td class="TOTAL"> $ <?php echo number_format ($iva_comision,2,".",",");?></td>
              <td class="TOTAL"></td>
              </tr> 
              <tr>
              <tr>
              <td class="fondo-gris">MONTO A DISPERSAR</td>
              <td class="TOTAL"><strong>$ <?php echo number_format ($monto_a_dispersar,2,".",",");?></strong></td>
           
              <td class="TOTAL"></td>
              </tr> 
              <tr>
  					<td class="fondo-gris">PRODUCTO</td>
  					<td class="TOTAL"><?php echo "$tipo_credito" ?></td>
            <td class="TOTAL"></td>
  					</tr>';
      
              <tr>
              <td class="fondo-gris">PLAZO</td>
              <td class="TOTAL"><?php echo "$plazo" ?></td>
              <td class="TOTAL"></td>
              </tr> 
         
      
      
        </tbody>
      </table>
      <table class="resultado">
   
          <tr>
            <th class="resultado">RESULTADO DEL ANÁLISIS:</th>
                     
          </tr>
       
        <tr>

          <td class="firmas"><?php echo "$observaciones_comite" ?><</td></tr>
      </table>
      <h3>El monto autorizado en este documento, debe coincidir con el monto especificado en el contrato, de lo contrario no debe de continuar con el proceso.</h3></br></br></br></br></br>
      <table class="firmas">
        <thead>
         <tbody>
  					<tr>
  					<td class="firmas"><div class="firma"><img" src="https://oporfin.mx/comite/admin/img/miembros/rosa-.svg" ></div></td>
  					<td class="firmas"> </td>
            <td class="firmas"></td>
  					</tr>  
            <tr>
  					<td class="firmas">DIRECCIÓN DE OPERACIONES</BR> Mtra. Rosa Monterrubio Cotija</td>
  					<td class="firmas">GERENTE DE CRÉDITO</BR>FIRMA DE COTEJO DE INFORMACIÓN</BR> C.P.M.A. José Alfredo Muñiz Rivera</td>
            <td class="firmas">ADMINISTRACIÓN Y FINANZAS </BR>C.P.C. Livia Olvera Cobos</td>
  					</tr>                  
        </tbody>
      </table>
	    </main>

    </body>

</html>

<?php 

$html=ob_get_clean();
require_once 'includes/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf =new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$options->set('chroot', realpath(''));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setpaper('letter');

$dompdf->render();

$dompdf->stream($nombre ."_autorizacion.pdf", array("Atachment" => false));

?>
