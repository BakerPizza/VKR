<?php
require_once('connection.php');
session_start();
$id_test = $_SESSION['id_test'];
$question_text = $_POST['que_selector'];
$answer_text = $_POST['answer_text'];
$que_select = mysqli_query($connect, "SELECT * FROM `question` where question_text = '$question_text'");
while ($row = mysqli_fetch_array($que_select)) {
    $id_question = $row['id_question'];
}
if ($question_text !== "Выберите вопрос:") {
    $add_answer = mysqli_query($connect, "INSERT INTO `answer` (id_answer, `id_question`, `answer_correct`) VALUES (NULL, '$id_question', '$answer_text')");
    header("Location: ../pages/question.php?id=$id_test");
} else {
    $_SESSION['alert'] = "selector_error2";
    header("Location: ../pages/question.php?id=$id_test");
}
?>