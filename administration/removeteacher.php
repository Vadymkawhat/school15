<?php
    //підключили файл для конфігурації підключення до БД
    require '../php/configuration2.php';
    require '../php/class_student.php';
    //sql запит
    $query = "SELECT * FROM `student`";
    // підключення до БД та виконання необхідних запитів
    $result = mysqli_query($connect, $query);
    while ($student = mysqli_fetch_assoc($result)){
      $posts[] = $student;
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
    <title>Видалення учнів</title>
</head>
<body>
    <div class="container-xxl">
        <a class="nav-link mt-6 link-success" href="../adminpage.php">назад</a>
        <h1 class="text-center mb-4 fs-2">Видалити учня</h1>
        <div class="row mt-4 mb-4">
        <form class="" action="../php/deletestudent.php" method="post">
            <input class="form-control me-3 w-50 mt-4" type="search" placeholder="Введіть Прізвище..." aria-label="Search" name="student-surname"> 
            <input class="form-control me-3 w-50 mt-4" type="search" placeholder="Введіть ім'я..." aria-label="Search" name="student-name">
            <input class="form-control me-3 w-50 mt-4" type="search" placeholder="Введіть по батькові..." aria-label="Search" name="student-patronymic">
            <input class="form-control me-3 w-50 mt-4" type="date" value="2022-05-03" placeholder="Введіть дату народження..." aria-label="Search" name="student-birthday">
            <button class="btn btn-outline-danger mt-4" type="submit">Видалити</button>
        </form>
        </div>
        </div>
        <?php
    foreach($posts as $info){
      $mystudent = new Student($info['name'], $info['surname'], $info['patronymic'], $info['birthday'], $info['file_name']);
  ?>
         <div class="card mt-3 w-75 rounded mx-auto d-block">
                <div class="row g-0">
                   <div class="col-md-4">
                     <img src="/img/students/<?= $mystudent->studFileName; ?>.png" class="img-fluid rounded-start text-center mx-auto" alt="student photo">
                     </div>
                  <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title text-center mt-4 fs-4"><?php $mystudent->PrintAllName(); ?></h5>
                        <p class="card-text mt-4 fs-5">Дата народження: <?= 
                            $mystudent->perBirthday;
                            ?> </p></p>
                     </div>
                    </div>
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
