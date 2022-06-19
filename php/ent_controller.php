<?php
session_start();
require_once('connection.php');
$login = $_POST['login'];
$password = $_POST['password'];


$entrance = mysqli_query($connect, "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");

if (mysqli_num_rows($entrance) > 0) {
    $user = mysqli_fetch_assoc($entrance);
    $_SESSION['login'] = $user['login'];
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['surname'] = $user['surname'];
    $_SESSION['patronymic'] = $user['patronymic'];
    $_SESSION['users'] = [
        "id_role" => $user['id_role']
    ];
    if ($_SESSION['users']['id_role'] == 3) {
        header('Location: ../index.php');
    }
    if ($_SESSION['users']['id_role'] == 2) {
        header('Location: ../index.php');
    }
    if ($_SESSION['users']['id_role'] == 1) {
        header('Location: ../index.php');
    }
} else {
    $_SESSION['alert'] = "ent_error";
    header('location: ../pages/entrance.php');
}
?>