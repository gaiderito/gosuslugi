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
    <div class="big">
        <div class="profile">
            <img src="img/fotoprof.jpg" width="250px" height="300px" alt="">
            <p><?php print_r($_SESSION['user']['fio']); ?></p>
            <p><?php print_r($_SESSION['user']['email']); ?></p>
            <button style="margin: 0;">Редактировать профиль</button>
        </div>
     <?php   $fio = $_SESSION['user']['fio'];
                $sql = mysqli_query($conn, "SELECT * FROM `reports` WHERE `status` = 'Не рассмотрена' ");
                if (mysqli_num_rows($sql)>0){
                    echo('<div class="reports">
                    <h2>my reports</h2>');
                    while ($user = mysqli_fetch_assoc($sql)){
                    
                    echo('<div class="myreport">
                            <div style="max-width: 200px;"><p>Заявку отправил:</p><p>'.$user['fio'].'</p></div>
                            <div><p>Нарушение:</p><p>'.$user['rep'].'</p></div>
                            <div><p>Номер авто:</p><p>'.$user['auto'].'</p></div>
                            <div style="max-width: 400px;"><p>Описание:</p><details><summary>Подробнее:</summary><p>'.$user['opisanie'].'</p></details></div>
                            <div><form method="post" action="config/accept.php"><input type="hidden" name="id" value="'.$user['id'].'" ><button type="submit">Принять</button></form><form method="post" action="config/delete.php"><input type="hidden" name="id" value="'.$user['id'].'"><button type="submit">Отклонить</button></form></div>
                            </div>
                ');}
        }else{
            echo('<div class="nothing">
            <h2>Нет ни одной жалобы</h2>
            <a href="index.php">Вернуться на Главную</a>
        </div>');
        } ?>
</div>
    </div>
    <br>
    <br>
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