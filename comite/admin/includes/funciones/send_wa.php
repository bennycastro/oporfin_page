<?php

 //   $nombre= $_GET['nombre'];
 //   $monto = $_GET['monto'];

//TOKEN QUE NOS DA FACEBOOK
$token = 'EAAayMajKh1UBAGpkLLi3ZAXGc0Gw7VUfxvsxBo4lFxSzZCuV9hwI4HK7HpmKMTzFhlHSvWQ8nTj9ZCUYdc2NlDr7st53o2WS0O6ZC1P1a4b8lK0toayIAS7GOuArBiRkLZBQDMvvsQMnoHZCKUxnAoCOGZAURZAfbe9c8eRtdsF15ZAH4gAmdYcwApa8ZCqYlSiZBhrsZCCecCkM0uZCeS1xuNxu6';
//NUESTRO TELEFONO
$telefono = '525580568575';
//URL A DONDE SE MANDARA EL MENSAJE
$url = 'https://graph.facebook.com/v17.0/108114602341511/messages';

//CONFIGURACION DEL MENSAJE
$mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telefono.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "notificar",'
      //  . '     "nombre":"'.$nombre.'", '
     //   . '     "monto": "'.$monto.'", '
        . '     "language":{ "code": "es_MX" } '
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

