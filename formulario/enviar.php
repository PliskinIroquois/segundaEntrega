<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario De Contacto</title> <!-- Aquí va el título de la página -->

</head>

<body>
<?php

date_default_timezone_set('America/Costa_Rica');

$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Asunto = $_POST['Asunto'];
$Mensaje = $_POST['Mensaje'];

if ($Nombre=='' || $Apellidos=='' || $Telefono==''|| $Email==''|| $Asunto==''|| $Mensaje==''){ // Si falta un dato en el formulario mandara una alerta al usuario.

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{

	require 'PHPMailer/PHPMailerAutoload.php';
$mensaje = '<b>====Formulario de Contacto====<br/>';
$mensaje .= '<b>                              <br/>';
$mensaje .= '<b>   Nombre: </b> '.$Nombre.'<br/>';
$mensaje .= '<b>   Apellidos: </b> '.$Apellidos.'<br/>';
$mensaje .= '<b>   Telefono: </b> '.$Telefono.'<br/>';
$mensaje .= '<b>   Email: </b> '.$Email.'<br/>';
$mensaje .= '<b>                              <br/>';
$mensaje .= '<b>   Mensaje: </b> '.$Mensaje.'';

//Crear una instancia de PHPMailer
$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host = 'smtp.gmail.com';
//El puerto será el 587 ya que usamos encriptación TLS
$mail->Port = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth = true;
//Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username = "pruebas.curso.programacion@gmail.com";
//Introducimos nuestra contraseña de gmail
$mail->Password = "1q2w3e4r!";
//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom('pruebas.curso.programacion@gmail.com', 'Web Page - Agencia de Viajes');
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
//$mail->AddReplyTo('replyto@correoquesea.com', 'El de la réplica');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress('josefco123@hotmail.com');
//Definimos el tema del email
$mail->Subject = $Asunto;
//Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
$mail->MsgHTML($mensaje);
//Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
$mail->AltBody = 'This is a plain-text message body';

//Enviamos el correo
if (!$mail->Send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Enviado!";
	header('Location: ../index.html');
}
}

?>
</body>
</html>