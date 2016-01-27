<?php
$nombre = $_POST["txtNombre"];
$mail = $_POST["txtMail"];
$tel = $_POST["txtTel"];
$mensaje = $_POST["txtMensaje"];
$destinatario  = 'siauhospitalbetania@gmail.com' . ', ';
$destinatario .= 'informacionhospitalbetania@gmail.com';
$asunto = 'Mensaje de Contacto'; 
$cuerpo = ' 
<html> 
<head> 
   <title>Mensaje de Contacto - Hospital San Antonio</title> 
</head> 
<body> 
<h1>Mensaje de '.$nombre .'</h1> 
<p> 
<b>
'.$mensaje.'
</p>
<p>
	<ul>
		<li><strong>Teléfono: </strong> '.$tel.' </li>
		<li><strong>E-Mail: </strong> '.$mail.' </li>
	</ul>
</p>

</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Hospital San Antonio - www.hospitalbetania.com.co <siauhospitalbetania@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: siauhospitalbetania@gmail.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: siauhospitalbetania@gmail.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers);

header ("Location: index.php?menu=22&Estado=1&nom=$nombre&mail=$mail")

?>