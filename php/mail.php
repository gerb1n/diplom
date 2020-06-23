<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];


$mail->isSMTP();                                     
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;                               
$mail->Username = 'great-souls@mail.ru'; 
$mail->Password = 'Kwazimoda2015'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('great-souls@mail.ru'); 
$mail->addAddress('great-souls@mail.ru');     

$mail->isHTML(true);                                  

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$fio . ' оставил заявку, его телефон ' .$phone. ', его сообщение'.$text.'<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo "все отправилось";
}
?>