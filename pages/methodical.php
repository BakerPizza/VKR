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
<div class="container pt-3 mb-5 pb-5 " style="margin-bottom: 15vh;">
    <h3>Материал №<?php echo $id_met; ?> </h3>
    <hr>
    <?php
    $mets = mysqli_query($connect, "SELECT * FROM `methodical` WHERE id_methodical = '$id_met'");
    while ($row = mysqli_fetch_array($mets)) {
        $methodical_name = $row['methodical_name'];
        $methodical_text = $row['methodical_text'];
        ?>
        <h3><?php echo $methodical_name; ?> </h3>
        <p><?php echo $methodical_text; ?></p>

        <?php
    }
    ?>
</div>
</body>
<?php require_once 'footer.php' ?>
</html> 