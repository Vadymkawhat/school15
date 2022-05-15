<?php
//підключили файл для конфігурації підключення до БД
require 'configuration2.php';
require 'class_person.php';
// require_once 'class_teacher.php';
//отримую поля з форми
$tSurname = filter_var(trim($_POST['teacher-surname']), FILTER_SANITIZE_STRING);
$tName = filter_var(trim($_POST['teacher-name']), FILTER_SANITIZE_STRING);
$tPatronymic = filter_var(trim($_POST['teacher-patronymic']), FILTER_SANITIZE_STRING);
$tBirthday = filter_var(trim( $_POST['teacher-birthday']), FILTER_SANITIZE_STRING);
//підключення до БД
$mysql = new mysqli($host, $username, $password, $data);
// створив екземляр класу вчителя
$teacher = new Person($tName, $tSurname, $tPatronymic, $tBirthday);
// sql запит
$query = "DELETE FROM `school2`.`teacher` WHERE `teacher`.`surname` = '$tSurname' AND `teacher`.`name` = '$tName' AND `teacher`.`patronymic` = '$tPatronymic' AND `teacher`.`birthday` = '$tBirthday'";
//запис в змінну результату необхідного запросу
$mysql->query($query);

$mysql->close();

header('Location: /administration/removeteacher.php');


