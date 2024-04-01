<?php
require_once 'db.php';
session_start();
$log = $_POST['log'];
$pass = $_POST['pass'];

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$log' AND `password` = '$pass' ");

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);   

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email'],
            "fio" => $user['fio']
        ];
    header('Location: ../index.php');
} else{
    header('Location: ../login.php');
}

?>