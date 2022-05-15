
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="/img/education.ico" type="image/x-icon">
    <title>Додавання новин</title>
</head>
<body>
    <div class="container-xxl">
    <a class="nav-link mt-6 link-success" href="../adminpage.php">назад</a>
    <h1 class="text-center mb-4 fs-2">Додати новину</h1>
        <form action="../php/addnews.php" method="post">
            <input class="form-control me-3 w-100 mt-4" type="search" placeholder="Введіть заголовок" aria-label="Search" name="title"> 
            <textarea class="form-control me-3 w-100 mt-4" type="search" placeholder="Введіть повідомлення" aria-label="Search" name="message"></textarea>
            <input class="form-control me-3 w-100 mt-4" type="search" placeholder="Введіть посилання на фото" aria-label="Search" name="photo-name">
            <button class="btn btn-outline-success mt-4" type="submit">Додати</button>
        </form>
     </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
