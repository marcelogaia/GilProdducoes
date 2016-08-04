<?php

$host 		= ""; // Link do host. Ex.: "smtp.gilprodducoes.com.br"
$usuario 	= ""; // Nome de usuario. Ex.: "site@gilproducoes.com.br"
$senha 		= ""; // Senha do usuario. Ex.: "123@Mudar!"

$sent = false;

$email 	= isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) exit ("E-mail invalido: {$email}");

require "../includes/phpmailer/PHPMailerAutoload.php";

$subject="Novo cadastro para newsletter";

$body = "<b>Email:</b> {$email}";

$altbody = "Email: {$email} \n\r";

$mail = new PHPMailer;
//$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = $host;
$mail->SMTPAuth = true;
$mail->Username = $usuario;
$mail->Password = $senha;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = "UTF-8";

$mail->setFrom($usuario, 'Gil Produções (Social) - Contato');
$mail->addAddress('contato@gilproducoes.com.br', 'Gil Produções');

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = $altbody;

if(!$mail->send()) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
	exit("SUCCESS");
}

?>
