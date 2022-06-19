<?php
require_once('connection.php');
session_start();
$answer = $_GET['answer'];
$id_test = $_SESSION['id_test_check'];
$id_user = $_SESSION['id_user'];
$answer_check = mysqli_query($connect, "SELECT * FROM `answer` where answer_correct = '$answer'");
while ($row = mysqli_fetch_array($answer_check)) {
    $answer_correct = $row['answer_correct'];
}
if ($answer_correct === $answer) {
    $_SESSION['alert'] = "answer_correct";
    $result_add = mysqli_query($connect, "INSERT INTO `results` (`id_results`, `id_user`, `id_test`, `result`, `time`) VALUES (NULL, '$id_user', '$id_test', 'Тест решен', NULL)");
    header("Location: ../pages/testing.php?id=$id_test");
} else {
    $_SESSION['alert'] = "answer_error";
    $result_add = mysqli_query($connect, "INSERT INTO `results` (`id_results`, `id_user`, `id_test`, `result`, `time`) VALUES (NULL, '$id_user', '$id_test', 'Тест не решен', NULL)");
    header("Location: ../pages/testing.php?id=$id_test");
}

/*if($answer_check){
   echo "верно";
}
else{
    echo "не верно";
}*/



