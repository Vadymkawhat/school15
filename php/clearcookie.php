<?php

    // видалення cookie для всіх сторінок сайту
    setcookie('user', $user['user_email'], time() - 3600, "/", NULL);
    sleep(1);
    header('Location: /index.php');

?>