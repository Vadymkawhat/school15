<?php
//підключили файл для конфігурації підключення до БД
require 'configuration.php';
//отримую поля з форми
$title = filter_var(trim( $_POST['title']), FILTER_SANITIZE_STRING);
$description = filter_var(trim( $_POST['message']), FILTER_SANITIZE_STRING);
$photo_link = filter_var(trim( $_POST['photo-name']), FILTER_SANITIZE_STRING);
//підключення до БД
$mysql = new mysqli($host, $username, $password, $data);
// sql запит
$query = "INSERT INTO `registerdb`.`news` (
    `news_id` ,
    `title` ,
    `description` ,
    `photo_link`
    )
    VALUES (
    NULL , '$title', '$description', '$photo_link'
    )";
//запис в змінну результату необхідного запросу
$mysql->query($query);


$mysql->close();

 
header('Location: /administration/addnews.php');
