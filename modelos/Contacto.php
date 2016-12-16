<?php

class Contacto {

    public $nombre;
    public $apellidos;
    public $correo;
    public $telefono;
    public $asunto;
    public $mensaje;

    public function __construct() {
        $this->nombre = '';
        $this->apellidos = '';
        $this->correo = '';
        $this->telefono = '';
        $this->asunto = '';
        $this->mensaje = '';
    }
    
    
    public function enviar() {
	
    	require 'formulario/PHPMailer/PHPMailerAutoload.php';
    	$mensaje = '<b>====Formulario de Contacto====<br/>';
    	$mensaje .= '<b>                              <br/>';
    	$mensaje .= '<b>   Nombre: </b> '.$this->nombre.'<br/>';
    	$mensaje .= '<b>   Apellidos: </b> '.$this->apellidos.'<br/>';
    	$mensaje .= '<b>   Telefono: </b> '.$this->telefono.'<br/>';
    	$mensaje .= '<b>   Email: </b> '.$this->correo.'<br/>';
    	$mensaje .= '<b>                              <br/>';
    	$mensaje .= '<b>   Mensaje: </b> '.$this->mensaje.'';
    	
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
    	$mail->Subject = $this->asunto;
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
    	
    }
    


