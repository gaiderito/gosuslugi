<?php 
require_once('db.php');
session_start();

$rep = $_POST['kratko'];
$opis = $_POST['opis'];
$fio = $_SESSION['user']['fio'];
$number = $_POST['number'];

mysqli_query($conn, "INSERT INTO `reports` (`rep`, `auto`, `opisanie`, `fio`) VALUES ('$rep', '$number', '$opis', '$fio')");
header('Location: ../profile.php');
?>