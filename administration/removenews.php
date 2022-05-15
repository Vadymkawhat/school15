<?php
    //підключили файл для конфігурації підключення до БД
    require_once '../php/configuration.php';

    // // sql запит
    $query = "SELECT * FROM `news`";

    $result = mysqli_query($connect, $query);

    while ($info = mysqli_fetch_assoc($result)){
        $posts[] = $info;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="/img/education.ico" type="image/x-icon">
    <title>Видалення новин</title>
</head>
<body>
    <div class="container-xxl">
        <a class="nav-link mt-6 link-success" href="../adminpage.php">назад</a>
        <h1 class="text-center mb-4 fs-2">Видалити новину</h1>
        <div class="row mt-4 mb-4">
        <form class="d-flex" action="../php/deletenews.php" method="post">
            <input class="form-control me-3 w-25" type="search" placeholder="Введіть id необхідної новини" aria-label="Search" name="news-id">
            <button class="btn btn-outline-danger " type="submit">Видалити</button>
        </form>
        </div>
        <?php
            foreach($posts as $info){
        ?>
        <div class="row">
            <div class="col">
                <p>
                    ID: <?= $info['news_id'] ?> <br>
                    Заголовок: <?= $info['title'] ?>
                </p>
            </div>
         </div>
         <?php
        }
        ?>
     </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
