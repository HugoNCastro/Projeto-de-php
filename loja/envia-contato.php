<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "hugonaaman@gmail.com";
$mail->Password = "guitarra100195";

//Dados do meu email, quem esta enviando o email
$mail->setFrom("hugonaaman@gmail.com", "Alura Curso PHP e MySQL");


//endereço alvo quem vai receber o email
$mail->addAddress("hugonaaman@gmail.com");
$mail->Subject = "Email de contato da loja";


//Conteúdo que será enviado no email
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();


 ?>