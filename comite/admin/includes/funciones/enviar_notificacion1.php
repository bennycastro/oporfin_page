<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mensaje = $_POST['inputMensaje'];

    phpMailer();
    
        
       function phpMailer(){




        
        require 'vendor/PHPMailer/src/1/Exception.php';
        require 'vendor/PHPMailer/src/1/PHPMailer.php';
        require 'vendor/PHPMailer/src/1/SMTP.php';
        

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
       
        try {
           //Server settings
           
           $mail->SMTPDebug = 0;                      //Enable verbose debug output
           $mail->isSMTP();                                            //Send using SMTP
           $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
           $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
           $mail->Username   = 'credito@oporfin.mx';                     //SMTP username
           $mail->Password   = 'yeccvtpbniyuwngm';                              //SMTP password
           $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
           $mail->Port = 587;// TCP port to connect to
           $mail->CharSet = 'UTF-8';                                    //465 ssl or TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
           $mail->SMTPKeepAlive = true;  
           $mail->Mailer = "SMARTSMTP"; 
           //Recipients
           $mail->setFrom('credito@oporfin.mx', 'MESA DE CONTROL'); //Quien envia
         //  $mail->addAddress('amuniz@oporfin.mx');              //Quien recibe
         //  $mail->addAddress('lburgos@oporfin.mx');
           $mail->addAddress('bcastro@oporfin.mx');
            //Content
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nuevos Expedientes Cargados';
            $mail->Body    =  'Hola';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            header('location:../../notificar.php?result=success');
        } catch (Exception $e) {
            echo "Error al enviar: {$mail->ErrorInfo}";
        }
        }//Cierre de funcion phpMailer
        ?>
   
   