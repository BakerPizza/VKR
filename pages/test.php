<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'header.php';
    require_once('../php/connection.php');
    $id_test = $_GET['id']; //сворованный айди с ссылки
    $id_user = $_SESSION['id_user'];
    if ($_SESSION['id_user'] != 0) {


    } else {
        header('Location: ../pages/entrance.php');
        $_SESSION['alert'] = "error_test";
    }
    ?>
</head>
<body>
<div class="container pt-3 mb-5 " style="margin-bottom: 11vh;">
    <h3>Тесты на дисциплину: <?php echo $id_test; ?> </h3>
    <hr>
    <?php
    $tests = mysqli_query($connect, "SELECT * FROM `test` WHERE test_class = '$id_test'");
    while ($row = mysqli_fetch_array($tests)) {
        $test_name = $row['test_name'];
        $_SESSION['test_id'] = $row['id_test'];
        ?>
        <a href="testing.php?id=<?= $row['id_test'] ?>" class="h5 fs-2"><?php echo $test_name; ?></a><br><br>

        <?php
    }
    ?>
</div>
</body>
<?php require_once 'footer.php' ?>
</html> 