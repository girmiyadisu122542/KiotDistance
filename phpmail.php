
<?php
require 'PHPmailer/class.phpmailer.php';
require 'PHPmailer/class.smtp.php';
    
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPDebug  = 1;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'ageriewudu766@gmail.com';
$mail->Password = '12345asu';
$mail->SMTPAuth = true;

$mail->From = 'ageriewudu766@gmail.com';
$mail->FromName = 'Mohammad Masoudian';
$mail->AddAddress('tadesseangaw@gmail.com');
//$mail->AddReplyTo('phoenixd110@gmail.com', 'Information');

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