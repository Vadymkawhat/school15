<?php

$host = '127.0.0.1';
$username = 'root';
$password = '';
$data = 'registerdb';

$connect = mysqli_connect($host, $username, $password, $data); 

if($connect==false)
{
    echo "Помилка при підключені";
}


?>