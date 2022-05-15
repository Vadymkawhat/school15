<?php
//підключили файл для конфігурації підключення до БД
require 'configuration2.php';
require 'class_teacher.php';
// require_once 'class_teacher.php';
//отримую поля з форми
$tSurname = filter_var(trim($_POST['teacher-surname']), FILTER_SANITIZE_STRING);
$tName = filter_var(trim($_POST['teacher-name']), FILTER_SANITIZE_STRING);
$tPatronymic = filter_var(trim($_POST['teacher-patronymic']), FILTER_SANITIZE_STRING);
$tBirthday = filter_var(trim( $_POST['teacher-birthday']), FILTER_SANITIZE_STRING);
$tFileName = filter_var(trim( $_POST['teacher-file-name']), FILTER_SANITIZE_STRING);
$tExperience = filter_var(trim( $_POST['teacher-experience']), FILTER_SANITIZE_STRING);
$tEducation = filter_var(trim( $_POST['teacher-education']), FILTER_SANITIZE_STRING);
//підключення до БД
$mysql = new mysqli($host, $username, $password, $data);
// створив екземляр класу вчителя
$myteacher = new Teacher($tName, $tSurname, $tPatronymic, $tBirthday, $tFileName, $tEducation, $tExperience);
// sql запит
$query = "INSERT INTO `school2`.`teacher` (
    `teacher_id` ,
    `file_name` ,
    `surname` ,
    `name` ,
    `patronymic` ,
    `birthday` ,
    `experience` ,
    `education`
    )
    VALUES (
    NULL , '$myteacher->teaFileName', '$myteacher->perSurname', '$myteacher->perName', '$myteacher->perPatronymic', '$myteacher->perBirthday', '$myteacher->experience', '$myteacher->education'
    )";
//запис в змінну результату необхідного запросу
$mysql->query($query);

$mysql->close();

header('Location: /administration/addteacher.php');


