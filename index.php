<?php
require_once('config/db.php');
session_start();

?>
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
<header>

        <a href="index.php"><div class="zakladka"><img src="img/logo.png" alt=""><h3>Рассмотрение нарушений<br>правил дорожного движения</h3></div></a>
            <div class="tel">
                <h2>8-(800)-228-14-88</h2>
                <h3>Работаем круглосуточно</h3></div>
                <div class="prof">
            <a href="<?php if ($_SESSION['user']){echo('profile.php');}else{echo('register.php');} ?>"><img width="40px" src="img/document.png" alt="">Мои заявления</a>
            <div class="normis"><a href="<?php if($_SESSION['user']){echo("profile.php");}else{echo("register.php");} ?>"><img width="40px" src="img/profile.png" alt="">
        <?php if($_SESSION['user']){print_r($_SESSION['user']['login']);}else{echo('Регистрация');} ?></a>
            <div class="invis"><a style="<?php if($_SESSION['user']){echo("display:none;");} ?>"  href="login.php">Вход</a>
            <a href="config/logout.php">Выйти</a></div>
            </div>
    </div>
    </header>

    <div class="osnova">
        <form action="<?php if($_SESSION['user']){echo('config/report.php');}else{echo('register.php');}  ?>" class="report" method="post">
            <h2>Заполните форму</h2>
            <h3>Выберите нарушение:</h3>
            <select name="kratko">
                <option value="Танк не едет">Танк не едет</option>
                <option value="Проезд на красный">Проезд на красный</option>
                <option value="ДТП">ДТП</option>
                <option value="Выезд на сторону дороги предназначенную для встречного движения">Выезд на сторону дороги, предназначенную для встречного движения</option>
                <option value="Управление автомобилем в состоянии алкогольного опьянения">Управление автомобилем в состоянии алкогольного опьянения</option>
                <option value="Превышение установленной скорости движения">Превышение установленной скорости движения</option>
                <option value="Управление ТС без регистрационных знаков">Управление ТС без регистрационных знаков</option>
                <option value="Другое (Опишу подробнее)">Другое (Опишу подробнее)</option>
            </select>
            <h3>Введите государственный номер автомобиля нарушителя</h3>
            <input class="put" type="text" name="number" placeholder="Номер автомобиля">
            <h3>Опишите происшествие</h3>
            <textarea name="opis" id="" cols="30" rows="10"></textarea>
            <h3>Прикрепите фото/видео доказательство</h3>
            <input type="file" alt="">
            <button type="submit">Отправить на рассмотрение</button>
        </form>
    </div>

    <footer>
       <div class="bot-menu">
            <a href="">Политика конфиденциальности</a>
            <a href="">Контакты</a>
            <a href="">Официальный сайт ПДД</a>
            <a href="">Задайте вопрос</a>
       </div>
       <hr width="70%">
       <br>
       <div class="foot">
       <div class="spisok">
            <a href="">Часто задаваемые вопросы</a>
            <a href="">Часто задаваемые вопросы</a>
            <a href="">Часто задаваемые вопросы</a>
       </div>
       <div class="spisok">
        <a href="">Часто задаваемые вопросы</a>
        <a href="">Часто задаваемые вопросы</a>
        <a href="">Часто задаваемые вопросы</a>
       </div>
       <div class="imag">
        <img src="img/герб.png" alt="">
        <img src="img/logo.png" alt="">
       </div>
       </div>
    </footer>
</body>
</html>