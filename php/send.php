<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];
$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$fio = urldecode($fio);
$phone = urldecode($phone);
$email = urldecode($email);
$text = urldecode($text);
$fio = trim($fio);
$phone = trim($phone);
$email = trim($email);
$text = trim($text);

if (mail("great-souls@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email. "Телефон:".$phone. "Текст письма:".$text,"From: roma-akinshin@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>