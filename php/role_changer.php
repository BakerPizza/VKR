<?php
session_start();
require_once('connection.php');
$user_selector = $_POST['user_selector'];
$_SESSION['$user_selector'] = $user_selector;
if ($user_selector !== "Выберите пользователя:") {
    $change = mysqli_query($connect, "UPDATE `users` SET `id_role` = '2' WHERE `login` = '$user_selector'");
    $_SESSION['alert'] = "change_done";
    header('Location: ../pages/personal.php');
} else {
    $_SESSION['alert'] = "change_error";
    header('Location: ../pages/personal.php');
}

?>