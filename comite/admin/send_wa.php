<?php
//TOKEN QUE NOS DA FACEBOOK
$token = 'EAACFUIrA6nwBAMbSxaZAAYwDOZArpnRw9cCsK4u8gE4ecAeR2zGZAs4SkzG2mBrfJ5ayYZA5vZBOwEgR38XtggBEO1hCZC0u65J9dv1Un3mtCJjssRajZCrZCMXh1wawujzy73tgNJwK01fJgyAZBv8DmWhV43lI4j1LcNn0TIPMmhq86pNjWaZB5D3MQHSzkltvwDrpCPGIFNZBQZDZD';
//NUESTRO TELEFONO
$telefono = '526682287955';
//URL A DONDE SE MANDARA EL MENSAJE
$url = 'https://graph.facebook.com/v17.0/109821042168496/messages';

//CONFIGURACION DEL MENSAJE
$mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telefono.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "hello_world",'
        . '     "language":{ "code": "en_US" } '
        . '} '
        . '}';
//DECLARAMOS LAS CABECERAS
$header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
//INICIAMOS EL CURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
$response = json_decode(curl_exec($curl), true);
//IMPRIMIMOS LA RESPUESTA 
print_r($response);
//OBTENEMOS EL CODIGO DE LA RESPUESTA
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//CERRAMOS EL CURL
curl_close($curl);
?>
<script>javascript:;window.close()</script>