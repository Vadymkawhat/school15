<?php
//підключили файл для конфігурації підключення до БД
require 'configuration2.php';
require 'class_student.php';
//отримую поля з форми
$sSurname = filter_var(trim($_POST['student-surname']), FILTER_SANITIZE_STRING);
$sName = filter_var(trim($_POST['student-name']), FILTER_SANITIZE_STRING);
$sPatronymic = filter_var(trim($_POST['student-patronymic']), FILTER_SANITIZE_STRING);
$sBirthday = filter_var(trim( $_POST['student-birthday']), FILTER_SANITIZE_STRING);
$sFileName = filter_var(trim( $_POST['student-file-name']), FILTER_SANITIZE_STRING);
//підключення до БД
$mysq = new mysqli($host, $username, $password, $data);
// створив екземляр класу вчителя
$student = new Student($sName, $sSurname, $sPatronymic, $sBirthday, $sFileName);
// sql запит
$query = "INSERT INTO `school2`.`student` (
    `student_id` ,
    `surname` ,
    `name` ,
    `patronymic` ,
    `birthday` ,
    `file_name` ,
    `class` ,
    `activity_id`
    )
    VALUES (
    NULL , '$student->perSurname', '$student->perName', '$student->perPatronymic', '$student->perBirthday', '$student->studFileName', '', ''
    );";
//запис в змінну результату необхідного запросу
$mysq->query($query);

$mysq->close();

header('Location: /administration/addstudent.php');


