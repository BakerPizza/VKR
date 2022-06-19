<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'header.php';
    require_once('../php/connection.php');
    $id_met = $_GET['id']; //сворованный айди с ссылки
    $id_user = $_SESSION['id_user'];
    ?>
</head>
<body>
<div class="container pt-3 mb-5 " style="margin-bottom: 11vh;">
    <h3>Методические материалы на дисциплину: <?php echo $id_test; ?> </h3>
    <hr>
    <?php
    $mets = mysqli_query($connect, "SELECT * FROM `methodical` WHERE methodical_class = '$id_met'");
    while ($row = mysqli_fetch_array($mets)) {
        $methodical_name = $row['methodical_name'];
        $_SESSION['id_methodical'] = $row['id_methodical'];
        ?>
        <a href="methodical.php?id=<?= $row['id_methodical'] ?>" class="h5 fs-2"><?php echo $methodical_name; ?></a><br>
        <br>

        <?php
    }
    ?>
</div>
</body>
<?php require_once 'footer.php' ?>
</html> 