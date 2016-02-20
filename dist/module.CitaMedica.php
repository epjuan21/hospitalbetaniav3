<?php
$nombre = $_POST["txtNombre"];
$tipoId = $_POST["select-tipo-id"];
$numDoc = $_POST["txtDocumento"];
$mail = $_POST["txtMail"];
$tel = $_POST["txtTel"];
$fechaHora = $_POST["txtFechaHora"];
$comentario = $_POST["txtComentario"];
$Fecha = substr($fechaHora, 0, 15);
$Hora = substr($fechaHora, 17, 5);

// CODIGO PARA VALIDAR EL RECAPTCHA

require_once('lib/recaptchalib.php');
$privatekey = "6LewvPgSAAAAAM7n6Ap9AeCuOhWiCI784Ytcg4p7";
$resp = recaptcha_check_answer ($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {

	header ("Location: index.php?menu=27&ErrorCaptcha=1");

exit;

} else {
	//reCAPTCHA Correcto

		// CODIGO PARA ENVIAR EL MENSAJE A LOS CORREOS INDICADOS	

	// Varios destinatarios
	$para  = 'admisionesbetania@gmail.com' . ', '; // atención a la coma
	$para .= 'informacionhospitalbetania@gmail.com';

	// titulo

	$tit = 'Solicitud Cita Médica';

	$mensaje = ' 
	<html> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   	<title>Mensaje de Contacto - Hospital San Antonio</title> 
	</head> 
	<body> 
	<h1>Solicitud de Cita Médica de '.$nombre .'</h1> 
	<p> 
	</p>
	<p>
		<ul>
			<li><strong>Tipo Documento: </strong> '.$tipoId.' </li>
			<li><strong>Numero Documento: </strong> '.$numDoc.' </li>
			<li><strong>Correo Electrónico: </strong> '.$mail.' </li>
			<li><strong>Teléfono: </strong> '.$tel.' </li>
			<li><strong>Fecha en la que el usuario desea la cita: </strong> '.$Fecha.' </li>
			<li><strong>Hora en que el usuario desea la cita: </strong> '.$Hora.' </li>
			<li><strong>Comentarios Adicionales: </strong> '.$comentario.' </li>

		</ul>
	</p>

	</body> 
	</html> 
	'; 

	// Para enviar un correo HTML, debe establecerse la cabecera Content-type
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	//dirección del remitente 
	$cabeceras .= 'From: Hospital San Antonio <informacionhospitalbetania@gmail.com>' . "\r\n";

	// Enviarlo
	$titulo= "=?utf-8?b?".base64_encode($tit)."?=";
	mail($para, $titulo, $mensaje, $cabeceras);

	header ("Location: index.php?menu=27&Estado=1");

}

?>