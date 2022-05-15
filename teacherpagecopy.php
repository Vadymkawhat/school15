<?php
    //підключили файл для конфігурації підключення до БД
    require_once '/php/configuration2.php';
    require_once '/php/class_teacher.php';
    //отримую поля з форми
    $tSurname = filter_var(trim($_POST['t-surname']), FILTER_SANITIZE_STRING);
    //sql запит
    $query = "SELECT * FROM `school2`.`teacher` WHERE `teacher`.`surname` LIKE '%$tSurname%'";
    // підключення до БД та виконання необхідних запитів
    $result = mysqli_query($connect, $query);
    while ($teacher = mysqli_fetch_assoc($result)){
      $posts[] = $teacher;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/img/education.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Список вчителів</title>
</head>
<body>
<?php
    if($_COOKIE['user'] == ''):
  ?>
  <header>
    <div class="container-xxl">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark mybg-green">
              <a class="navbar-brand fs-3 pl-3" href="site.php">Ліцей №15</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="feedbackpage.php">Зворотній зв'язок</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="teacherpage.php">Вчителі</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="studentpage.php">Учні</a>
                  </li>
                </ul>
                <a class="btn btn-info btn-sm" href="index.php" role="button">Ввійти/реєстрація</a>
                <!-- <form class="d-flex">
                  <input class="form-control me-3" type="search" placeholder="Дані для пошуку..." aria-label="Search">
                  <button class="btn btn-outline-warning " type="submit">Пошук</button>
                </form> -->
              </div>
          </nav>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="img/шкила.png" class="img-fluid" alt="school">
          </div>
        </div>
      </div>
    </header>
    <?php else: ?>

      <header>
    <div class="container-xxl">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark mybg-green">
              <a class="navbar-brand fs-3 pl-3" href="site.php">Ліцей №15</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="feedbackpage.php">Зворотній зв'язок</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="teacherpage.php">Вчителі</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="studentpage.php">Учні</a>
                  </li>
                </ul>
                <a class="btn btn-secondary btn-sm" href="php/clearcookie.php" role="button">Вийти</a>
                <!-- <form class="d-flex">
                  <input class="form-control me-3" type="search" placeholder="Дані для пошуку..." aria-label="Search">
                  <button class="btn btn-outline-warning " type="submit">Пошук</button>
                </form> -->
              </div>
          </nav>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img src="img/шкила.png" class="img-fluid" alt="school">
          </div>
        </div>
      </div>
    </header>

    <?php endif; ?>
        <section>
        <div class="container-xxl">
                    <form action="teacherpagecopy.php" class="d-flex w-75 mx-auto">
                      <input class="form-control me-3" type="search" placeholder="Введіть прізвище вчителя..." aria-label="Search" name="t-surname">
                      <button class="btn btn-outline-success" type="submit" name="btn-id">Пошук</button>
                    </form>
        </div>
        </section>
    <section>
    <div class="container-xxl">
          <!-- <div class="row"> -->
  <?php
    foreach($posts as $info){
      $myteacher = new Teacher($info['name'], $info['surname'], $info['patronymic'], $info['birthday'], $info['file_name'], $info['education'], $info['experience']);
  ?>
         <div class="card mt-3 w-75 rounded mx-auto d-block">
                <div class="row g-0">
                   <div class="col-md-4">
                     <img src="/img/teachers/<?= $myteacher->teaFileName; ?>.png" class="img-fluid rounded-start text-center mx-auto" alt="teacher photo">
                     </div>
                  <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title text-center mt-4 fs-4"><?php $myteacher->PrintAllName(); ?></h5>
                         <p class="card-text mt-5 fs-5">Навчальний заклад: <?= $myteacher->education; ?></p>
                        <p class="card-text mt-4 fs-5">Вік: <?php 
                            $myteacher->CalcBirthday();
                            ?> </p></p>
                     </div>
                    </div>
                </div>
                </div>
  <?php
    }
  ?>
          <!-- </div> -->
      </div>
    </section>
    <div class="container-xxl">
    <footer class="text-center pt-5 my-md-5 pt-md-5 border-top myfooter">
      <div class="row">
        <div class="col-12 col-md">
          <h6 class="text-center">Наші контакти:</h6>
            <ul class="list-unstyled text-small">
              <li>Адрес: <a target = "_blank" href="https://www.google.com/maps/dir//%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9F%D1%80%D0%BE%D1%81%D0%BA%D1%83%D1%80%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE+%D0%9F%D1%96%D0%B4%D0%BF%D1%96%D0%BB%D0%BB%D1%8F,+125,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B8%D0%B9,+%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+29000/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x473206f08d433bd1:0x7deedcdc4c2ecaa4?sa=X&ved=2ahUKEwjvkoXXysj3AhXq-SoKHcPBCqMQwwV6BAgMEAI" class="link-secondary">вул. Проскурівського Підпілля, 125/1</a></li>
            </ul>
            <ul class="list-unstyled text-small">
              <li>Телефон: <a href="tel:+0382716267" class="link-secondary">(0382) 71-62-67</a></li>
            </ul>
            <ul class="list-unstyled text-small">
              <li>E-mail: <a href="feedbackpage.php" class="link-secondary">school15test@gmail.com</a></li>
            </ul>
        </div>
        <div class="col-12 col-md">
          <h6 class="pl-4">Наші соціальні мережі:</h6>
          <div class="d-flex justify-content-center">
            <ul class="list-unstyled text-small">
            <li><a href="#"><i class="bi bi-instagram" style="font-size: 20px;color: #E36CCC;"></i></a></li>
            </ul>
            <ul class="list-unstyled text-small">
              <li><a href="#"><i class="bi bi-facebook" style="font-size: 20px;color: #2952EA;"></i></a></li>
            </ul>
            <ul class="list-unstyled text-small">
            <li><a href="#"><i class="bi bi-telegram" style="font-size: 20px;color: #30B9E5;"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/formMail.js"></script>
</body>
</html>


<?php
  $result->close();
?>