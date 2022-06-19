<?php
require_once('connection.php');
session_start();
$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$resul = mysqli_query($connect, "SELECT password FROM users where login='$login'");
if ($resul) {
    $sum_row_users = mysqli_num_rows($resul);
    if ($sum_row_users == 0) {
        $add_user = mysqli_query($connect, "INSERT INTO `users` (`id_user`, `name`, `surname`, `patronymic`, `login`, `password`, `email`, `id_role`) VALUES (NULL, '$name', '$surname', '$patronymic', '$login', '$password', '$email', '1')");
        $prov = mysqli_query($connect, "SELECT `login` FROM `users`");
        $_SESSION['alert'] = "done";
        header('Location: ../pages/entrance.php');

    } else {
        $_SESSION['alert'] = "error";
        header('Location: ../pages/registration.php');
    }
}

?>