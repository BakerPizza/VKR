<?php
require_once('connection.php');
session_start();
$selector = $_POST['selector'];
$test_name = $_POST['test_name'];
$user_id = $_SESSION['id_user'];

if ($selector !== "Выберите дисциплину:") {
    $add_test = mysqli_query($connect, "INSERT INTO `test` (`id_test`, `id_user`, `test_name`, `test_class`) VALUES (NULL, '$user_id', '$test_name', '$selector')");
    header('Location: ../pages/personal.php');
} else {
    $_SESSION['alert'] = "selector_error";
    header('Location: ../pages/personal.php');
}

?>