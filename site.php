<?php
    //підключили файл для конфігурації підключення до БД
    require_once '/php/configuration.php';

    // // sql запит
    $query = "SELECT * FROM `news` ORDER BY `news_id` DESC";

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
    <link rel="shortcut icon" href="/img/education.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>School 15</title>
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
      <div class="container-xxl slider">
        <div class="row">
          <div class="col">
          <div id="slider" class="carousel carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="/img/carousel/first.png" class="myimg d-block w-100" alt="first photo">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="/img/carousel/second.png" class="myimg d-block w-100" alt="second photo">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="/img/carousel/third.png" class="myimg d-block w-100" alt="third photo">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="/img/carousel/fourth.png" class="myimg d-block w-100" alt="fourth photo">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="container-xxl">
          <div class="row">
  <?php
    foreach($posts as $info){
  ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center mx-auto" style="width: 18rem;">
                <img src="<?= $info['photo_link'] ?>" class="card-img-top" alt="Photo">
                <div class="card-body">
                  <p class="card-title" id="mytitle"><?= $info['title'] ?></p>
                  <p class="card-text"><?= $info['description'] ?></p>
                </div>
              </div>
            </div> 
  <?php
    }
  ?>
          </div>
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
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  $result->close();
?>