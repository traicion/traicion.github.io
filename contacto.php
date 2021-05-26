<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
	
	// ¿por qué descargaste un archivo de una página como esta?
	// estás demente
	// no sabemos cómo hacer que funcione esto
	// pero si quieres, nos puedes contactar al correo de aquí abajo <3
	$toEmail = "traicion.uno@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	mail($toEmail, $subject, $content, $mailHeaders);
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "tu mensaje se envió con éxito.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>
