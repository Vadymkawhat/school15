<?php
    //підключили файл для конфігурації підключення до БД
    require_once 'configuration.php';

    //отримую поля з форми
    $email = filter_var(trim( $_POST['email']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim( $_POST['pass']), FILTER_SANITIZE_STRING);
    $passconfirm = filter_var(trim( $_POST['passconfirm']), FILTER_SANITIZE_STRING);

    //перевірка довжини полів 
    if(mb_strlen($email) < 15 || mb_strlen($email) > 50){
        echo "Довжина пошти не задовільняє умовам (від 15 до 50 символів)";
        exit();
    } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 32 || mb_strlen($passconfirm) < 5 || mb_strlen($passconfirm) > 32){
        echo "Довжина пароля не задовільняє умовам (від 5 до 32 символів)";
        exit();
    }

    //підключення до БД
    $mysql = new mysqli($host, $username, $password, $data);

    //перевірка підключення до БД
    if($mysql->connect_error) die('Помилка підключення до БД');
    
    // перевірка на існування акаунту(емайлу)
    $query1 = "SELECT * FROM `users`";
    // підключення до БД та виконання необхідних запитів
    $result1 = mysqli_query($connect, $query1);
    while ($users = mysqli_fetch_assoc($result1)){
      $posts[] = $users;
    }
    foreach($posts as $info){
        if($info['user_email'] == $email){
            echo "Користувач вже існує";
            exit();
        }
    }

    if($pass == $passconfirm){
        //хешування паролю
        $pass = md5($pass);

        // sql запит
        $query = "INSERT INTO `registerdb`.`users` (`user_email` ,`user_pass`) VALUES ('$email', '$pass')";

        //заповнення БД
        $mysql->query($query);

        //перевірка заповнення БД
        if($mysql->connect_error) {
            die('Помилка заповнення БД');
        }else{
        // переадресація на сайт
        sleep(3); 
        header('Location: /index.php');
        }
    }else{
        echo "Паролі не співпадають!";
        exit();
    }
    //закриття БД
    $mysql->close();
    exit();
?>