<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class clsMail{

    private $mail = null;
   
    function __construct(){
        
        /* Configuración Libreria PHPMailer*/
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->Port = 587;

        /* Configuración correo emisor*/
        $this->mail->Username = "soporte.invpriv@gmail.com";
        $this->mail->Password = "jkmoxoifrtnznltv";

    }

    public function metEnviar($titulo,$correo,$asunto,$bodyHTML){
        $this->mail->setFrom("soporte.invpriv@gmail.com",$titulo);
        $this->mail->addAddress($correo);
        $this->mail->Subject = $asunto;
        $this->mail->Body = $bodyHTML;
        $this->mail->isHTML(true);
        $this->mail->CharSet= "UTF-8";
        return $this->mail->send();  
    }  
}
?>