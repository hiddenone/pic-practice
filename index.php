<?php
require_once('class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'glennholt1@gmail.com';
$mail->Password = 'valid password';
$mail->SMTPAuth = true;

$mail->From = 'glennholt1@gmail.com';
$mail->FromName = 'Glenn Holt';
$mail->AddAddress('glennholt1@gmail.com');
$mail->AddReplyTo('glennholt1@gmail.com', 'Information');

$mail->IsHTML(true);
$mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = "Hello";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}
?>