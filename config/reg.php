<?php 
require_once 'db.php';
$login = $_POST['login'];
$email = $_POST['email'];
$fio = $_POST['fio'];
$pass = $_POST['pass'];
$repeat = $_POST['repeat'];

    if ($pass == $repeat) {
        mysqli_query($conn, "INSERT INTO `users` (`login`, `email`, `fio`, `password`)  VALUES ('$login', '$email', '$fio', '$pass')");
        header('Location: ../index.php');
    }
     else{
        header('Location: ../register.php');
    }

?>