<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Titillium+Web:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="script.js"></script>
        <title>Доносы.РФ</title>
        <link rel="shortcut icon" href="img/russia.png" type="image/x-icon">
    </head>
<body>

        <div class="exit">
        <a class="exit" href="index.php">Вернуться на главную</a></div>
    
    
    <div class="osnova">
        <form style="width: 400px;" method="post" action="config/log.php" class="report">
            <h2>Авторизация</h2>
            <h3>Логин:</h3>
            <input class="put" type="text" name="log" placeholder="">
            <h3>Пароль:</h3>
            <input class="put" type="text" name="pass" placeholder="">
            <button type="submit">Войти</button>
            <p>Вы не зарегистрированы? <a href="register.php">Регистрация</a></p>
        </form>
    </div>

</body>
</html>