<?php

//Incluimos la clase de PHPMailer
include 'plugins/phpmailer/class.phpmailer.php';
include 'plugins/phpmailer/class.smtp.php';

$nombre = $name;
$mailde = $email;
$mensaje = $text;

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n\r\n";
$mensaje .= "Su e-mail es: " . $mailde . " \r\n\r\n";
$mensaje .= "Mensaje: " . $mensaje . "\r\n\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()

//$correo->IsSMTP();

//Activaremos la autentificación SMTP el cual se utiliza en la mayoría de casos
$correo->SMTPAuth = true;

//Especificamos la seguridad de la conexion, puede ser SSL, TLS o lo dejamos en blanco si no sabemos
$correo->SMTPSecure = '';

//Especificamos el host del servidor SMTP
$correo->Host = "mail.justj.tv";

//Especficiamos el puerto del servidor SMTP
$correo->Port = 25;

//El usuario del servidor SMTP
$correo->Username   = "noreply@justj.tv";

//Contraseña del usuario
$correo->Password   = "asdasdasd123";

//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom($mailde);

//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
//$correo->AddReplyTo("me@micodigophp.com","Mi Codigo PHP");

//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("hello@justj.tv", "Consulta via web");
$correo->AddAddress("julieta.camarda@me.com", "Consulta via web");
//$correo->AddAddress("juliandrets@gmail.com", "Consulta via web");

//Ponemos el asunto del mensaje
$correo->Subject = "Consulta Via Web";

// Timeout para el servidor de correos. Por defecto es valor es '10'
$correo->Timeout=30;

// Codificación UTF8. Obligado utilizarlo en aplicaciones en Español
$correo->CharSet = 'UTF-8';

/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */
$correo->IsHTML(false);
$correo->Body = $mensaje;


//Enviamos el correo
if(!$correo->Send()) {
    echo "Hubo un error: " . $correo->ErrorInfo;
} else {
    echo 'Mensaje enviado con exito. ';
}

//}

?>

<meta http-equiv="refresh" content="1; url=index">