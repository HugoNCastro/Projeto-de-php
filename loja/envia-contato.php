<?php 
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//Inserindo o PhpAutoLoad
require_once("PHPMailerAutoload.php");

//criando um email a ser enviado
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->STMPAuth = true;
$mail->Username = "alura.php.e.mysql@gmail.com";
$mail->Password = "123456"

//Dados do meu email, quem esta enviando o email
$mail -> setFrom("alura.php.e.mysql@gmail.com", "Alura Curso PHP e MySQL");

//endereço alvo quem vai receber o email
$mail->addAddress("hugonaaman@gmail.com");
$mail->Subject = "Email de contato de loja";

//Conteúdo que será enviado no email
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem {$mensagem}";

if ($mail->send()) {
	$_SESSION['success'] = "Mensagem enviada com êxito.";
	header("Location: index.php");
}else{
	$_SESSION['danger'] = "Erro ao enviar a mensagem, verifique os dados e tente novamente." . $mail->ErrorInfo;
	header("Location: contato.php");
}
die();









 ?>