<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/log-style.css">
    <link rel="shortcut icon" href="/img/login.ico" type="image/x-icon">
    <title>Вхід</title>
</head>
<body>
    <main class="main">
     <div class="logo-container"><img src="/img/шляпа бакалавра.png" alt="logo" class="logo"></div>
      <form action="php/auth.php" class="form" method="post">
            <h1 class="form-title">Авторизація</h1>
            <div class="form-group">
                <input type="Email" class="form-input" id="email" placeholder=" " name="email">
                <label class="form-label">Email</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" id="password" placeholder=" " name="pass">
                <label class="form-label">Пароль</label>
            </div>
            <div class="button-wrapper"><button class="form-button" id="btn" type="submit">Увійти</button></div>
            <div class="register-button-wrapper"><a href="register.php">реєстрація</a></div>
            <div class="register-button-wrapper"><a href="site.php">Ввійти як гість</a></div>
      </form>
    </main>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="/js/ap1.js"></script>
</body>
</html>