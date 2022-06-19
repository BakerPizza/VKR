<?php
require_once('connection.php');
session_start();
$id_test = $_SESSION['id_test'];
$question_text = $_POST['question_text'];
$que_select = mysqli_query($connect, "SELECT * FROM `question` where question_text = '$question_text'");
while ($row = mysqli_fetch_array($que_select)) {
    $que = $row['question_text'];
}


if (!empty($_POST['question_text'])) {
    if ($question_text !== $que) {
        $add_test = mysqli_query($connect, "INSERT INTO `question` (id_question, `id_test`, `question_text`) VALUES (NULL, '$id_test', '$question_text')");
        header("Location: ../pages/question.php?id=$id_test");
    } else {
        $_SESSION['alert'] = "selector_error";
        header("Location: ../pages/question.php?id=$id_test");

    }
} else {
    $_SESSION['alert'] = "selector_error2";
    header('Location: ../pages/personal.php');
}

?>