<?php
require_once('connection.php');
session_start();
$methodical_class = $_POST['methodical_class'];
$methodical_name = $_POST['methodical_name'];
$methodical_text = $_POST['methodical_text'];
$user_id = $_SESSION['id_user'];

if ($methodical_class !== "Выберите дисциплину:") {
    $add_test = mysqli_query($connect, "INSERT INTO `methodical` (`id_methodical`, `id_user`, `methodical_name`, `methodical_text`, `methodical_class`) VALUES (NULL, '$user_id', '$methodical_name', '$methodical_text', '$methodical_class')");
    header('Location: ../pages/personal.php');
} else {
    $_SESSION['alert'] = "selector_error";
    header('Location: ../pages/personal.php');
}

?>