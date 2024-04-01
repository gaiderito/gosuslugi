<?php

require_once('db.php');
$id = $_POST['id'];

mysqli_query($conn, "UPDATE `reports` SET `status` = 'Отклонена' WHERE `id` = '$id'");
header('Location: ../admin.php');

?>