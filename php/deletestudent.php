<?php
//підключили файл для конфігурації підключення до БД
require 'configuration2.php';
require 'class_person.php';
// require_once 'class_teacher.php';
//отримую поля з форми
$sSurname = filter_var(trim($_POST['student-surname']), FILTER_SANITIZE_STRING);
$sName = filter_var(trim($_POST['student-name']), FILTER_SANITIZE_STRING);
$sPatronymic = filter_var(trim($_POST['student-patronymic']), FILTER_SANITIZE_STRING);
$sBirthday = filter_var(trim( $_POST['student-birthday']), FILTER_SANITIZE_STRING);
//підключення до БД
$mysql = new mysqli($host, $username, $password, $data);
// створив екземляр класу вчителя
$student = new Person($sName, $sSurname, $sPatronymic, $sBirthday);
// sql запит
$query = "DELETE FROM `school2`.`student` WHERE `student`.`surname` = '$student->perSurname' AND `student`.`name` = '$student->perName' AND `student`.`patronymic` = '$student->perPatronymic' AND `student`.`birthday` = '$student->perBirthday'";
//запис в змінну результату необхідного запросу
$mysql->query($query);

$mysql->close();

header('Location: /administration/removestudent.php');


