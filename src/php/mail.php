<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$order = $_POST['user_order'];
$radio = $_POST['Radios'];
$checkbox = $_POST['check'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kirillcbr1000rr@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Ly2xopfn6WJuajMP34Gm'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('kirillcbr1000rr@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('kozlovkirill859@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Тема письма';
$mail->Body    = '' . " Скрипт сработал! <br>" . $email. "<br>" .$phone. "<br>" .$order. "<br>" .$radio. "<br>" .$checkbox;
$mail->AltBody = '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}
?>