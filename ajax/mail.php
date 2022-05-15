<?php
// отримуємо дані з полів
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];
//шифрування письма
$subject = "=?utf-8?B?".base64_encode("Повідомлення з сайту")."?=";

$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

// відправка на пошту 
$success = mail("school15test@gmail.com", $subject, $message, $headers);
echo $success;

?>
