<?php 
    require_once('db.php');
    $id = $_POST['id'];
    mysqli_query($conn, "DELETE FROM `reports` WHERE `id` = '$id'");
    header('Location: ../profile.php');
?>