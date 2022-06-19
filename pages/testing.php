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
    $_SESSION['id_test_check'] = $id_test;
    $id_user = $_SESSION['id_user'];
    ?>
</head>
<body>
<div class="container pt-3 mb-5 pb-5 " style="margin-bottom: 15vh;">
    <h3>№ теста: <?php echo $id_test; ?> </h3>
    <hr>
    <form name="" action="../php/que_check.php" method="get">

    <?php
    /*$a = "1";
    $b = "2";
    $c = $a + $b;
    echo $c;*/
    $tests = mysqli_query($connect, "SELECT * FROM `question` WHERE id_test = '$id_test'");
    while ($row = mysqli_fetch_array($tests)) {
        $question_text = $row['question_text'];
        $id_question = $row['id_question'];
        ?>
        <center>
            <p class="mt-1 mb-1 h4 text-success text-center">
                <?php
                if ($_SESSION['alert'] == "answer_correct") {
                    echo "Тест решен!";
                    $_SESSION['alert'] = "0";
                }
                ?>
            </p>
            <p class="mt-1 mb-1 h4 text-danger text-center">
                <?php
                if ($_SESSION['alert'] == "answer_error") {
                    echo "Тест не решен!";
                    $_SESSION['alert'] = "0";
                }
                ?>
            </p>
            <div class="card mb-3 w-50 text-start">
                    <div class="mb-3 mt-3 ms-4 h5 fs-2">
                        <label for="exampleFormControlInput1" class="form-label"><?php echo $question_text; ?></label>
                    </div>
                    <div class="mb-3 ms-4 me-4">
                        <label for="exampleFormControlTextarea1" class="form-label">Введите ответ:</label>
                        <textarea name="answer<?php // echo $id_question; ?>" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>



            </div>

        <?php
    }
    ?>
        <button type="submit" class="btn btn-primary mb-5 w-50">Ответить</button>
    </form>
    </center>

</div>
</body>
<?php require_once 'footer.php' ?>
</html> 