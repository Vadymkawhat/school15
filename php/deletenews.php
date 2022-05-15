<?php
//підключили файл для конфігурації підключення до БД
require_once 'configuration.php';
//отримую поля з форми
$news_id = filter_var(trim( $_POST['news-id']), FILTER_SANITIZE_STRING);
//підключення до БД
$mysql = new mysqli($host, $username, $password, $data);
// sql запит
$query = "DELETE FROM `registerdb`.`news` WHERE `news`.`news_id` = $news_id";
//запис в змінну результату необхідного запросу
$mysql->query($query);


$mysql->close();

 
header('Location: /administration/removenews.php');
$mysql->close();
?>