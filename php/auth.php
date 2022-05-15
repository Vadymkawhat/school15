<?php 
    //підключили файл для конфігурації підключення до БД
    require 'configuration2.php';
    require 'configuration.php';
    require 'adminconfiguration.php';
    //отримую поля з форми
    $email = filter_var(trim( $_POST['email']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim( $_POST['pass']), FILTER_SANITIZE_STRING);
    //хешування паролю
    $pass = md5($pass);
    //підключення до БД
    $mysql = new mysqli($host, $username, $password, $data);
    // sql запит
    $query = "SELECT * FROM `users` WHERE `user_email` = '$email' AND `user_pass` = '$pass'";
    //запис в змінну результату необхідного запросу
    $result = $mysql->query($query);
    $user = $result->fetch_assoc();
    // встановлення cookie для всіх сторінок сайту протягом 1 год
    setcookie('user', $user['user_email'], time() + 3600, "/", NULL);
    if(count($user) == 0){
        echo "Користувач не знайдений";
        exit();
    }

    if($email == $admin_email && $pass == $adminpass){
        //закриття БД
        $mysql->close();
        // переадресація на сайт
        sleep(3); 
        header('Location: /adminpage.php');
        exit();
    }else{
        //закриття БД
        $mysql->close();
        // переадресація на сайт
        sleep(3); 
        header('Location: /site.php');
        exit();
    }
?>