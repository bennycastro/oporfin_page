<?php
// Varios destinatarios//
$para  = 'bcastro@oporfin.mx' . ', '; // atención a la coma
$para .= 'wez@example.com';

// título
$título = 'Restablecer tu contraseña';
$codigo = rand(1000,9999);
// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer Contraseña</title>
</head>
<body>
  <h1>¡Oporfin!</h1>
  <div style="text-align:center; bakcground-color:#ccc">
  <p>Restablecer contraseña</p>
  <h3>'.$codigo.'</h3>
  <p><small>Si no solicitaste cambio de contraseña favor de omitir este correo<</small></p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>