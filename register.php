<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reg-style.css">
    <link rel="shortcut icon" href="/img/register.ico" type="image/x-icon">
    <title>Реєстрація</title>
</head>
<body>
    <main class="main">
        <div class="logo-container"><img src="/img/шляпа бакалавра.png" alt="logo" class="logo"></div>
      <form action="php/check.php" class="form" method="post">
            <h1 class="form-title">реєстрація</h1>
            <div class="form-group">
                <input type="Email" class="form-input" placeholder=" " name="email">
                <label class="form-label">Email</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" placeholder=" " name="pass">
                <label class="form-label">Пароль</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" placeholder=" " name="passconfirm">
                <label class="form-label">Повторіть пароль</label>
            </div>
            <div class="button-wrapper"><button class="form-button" type="submit" id="reg-btn">зареєструватись</button></div>
            <div class="register-button-wrapper"><a href="index.php">назад</a></div>
            <div class="register-button-wrapper"><a href="site.php">Ввійти як гість</a></div>
      </form>
    </main>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/js/ap.js"></script>
</body>
</html>