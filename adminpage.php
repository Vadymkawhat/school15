<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="shortcut icon" href="/img/admin.ico" type="image/x-icon">
    <title>Панель адміністрування</title>
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
                  <a class="navbar-brand fs-3 pl-3" href="#">Ліцей №15</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Зворотній зв'язок</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Вчителі</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Учні</a>
                      </li>
                    </ul>
                    <a class="btn btn-info btn-sm" href="index.php" role="button">Ввійти/реєстрація</a>
                    <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle btn-sm dropbtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Адміністрування
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/administration/addnews.php">Додати новини</a></li>
                          <li><a class="dropdown-item" href="/administration/removenews.php">Видалити новини</a></li>
                          <li><a class="dropdown-item" href="/administration/addteacher.php">Додати вчителя</a></li>
                          <li><a class="dropdown-item" href="/administration/removeteacher.php">Видалити вчителя</a></li>
                          <li><a class="dropdown-item" href="/administration/addstudent.php">Додати учня</a></li>
                          <li><a class="dropdown-item" href="/administration/removestudent.php">Видалити учня</a></li>
                        </ul>
                      </div>
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
                  <a class="navbar-brand fs-3 pl-3" href="#">Ліцей №15</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Зворотній зв'язок</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Вчителі</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Учні</a>
                      </li>
                    </ul>
                    <a class="btn btn-secondary btn-sm" href="php/clearcookie.php" role="button">Вийти</a>
                    <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle btn-sm dropbtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Адміністрування
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/administration/addnews.php">Додати новини</a></li>
                          <li><a class="dropdown-item" href="/administration/removenews.php">Видалити новини</a></li>
                          <li><a class="dropdown-item" href="/administration/addteacher.php">Додати вчителя</a></li>
                          <li><a class="dropdown-item" href="/administration/removeteacher.php">Видалити вчителя</a></li>
                          <li><a class="dropdown-item" href="/administration/addstudent.php">Додати учня</a></li>
                          <li><a class="dropdown-item" href="/administration/removestudent.php">Видалити учня</a></li>
                        </ul>
                      </div>
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

    </section>
    
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>