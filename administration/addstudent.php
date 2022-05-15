<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="/img/education.ico" type="image/x-icon">
    <title>Додавання студентів</title>
</head>
<body>
    <div class="container-xxl">
    <a class="nav-link mt-6 link-success" href="../adminpage.php">назад</a>
    <h1 class="text-center mb-4 fs-2">Додати студента</h1>
        <form action="../php/addstudent.php" method="post">
            <input class="form-control me-3 w-25 mt-4" type="search" placeholder="Введіть Прізвище..." aria-label="Search" name="student-surname"> 
            <input class="form-control me-3 w-25 mt-4" type="search" placeholder="Введіть ім'я..." aria-label="Search" name="student-name">
            <input class="form-control me-3 w-25 mt-4" type="search" placeholder="Введіть по батькові..." aria-label="Search" name="student-patronymic">
            <input class="form-control me-3 w-25 mt-4" type="date" value="2022-05-03" placeholder="Введіть дату народження..." aria-label="Search" name="student-birthday">
            <input class="form-control me-3 w-50 mt-4" type="search" placeholder="Введіть назву фото учня (Прізвище, ім'я, по батькові) ..." aria-label="Search" name="student-file-name"> 
            <button class="btn btn-outline-success mt-4" type="submit">Додати</button>
        </form>
     </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
