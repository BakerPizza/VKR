<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'header.php';
    require_once('../php/connection.php'); ?>
</head>
<body>
<div class="container pt-3 pb-3" style="margin-bottom: 11vh;">
    <h3>Добавления вопросов и ответов к тесту: <?php echo $_SESSION['surname'];
        echo " ";
        echo $_SESSION['name']; ?> </h3>
    <hr>

    <center>
        <form action="../php/que_add.php" class="" method="post">
            <div class="card w-75 text-start mb-3">
                <div class="card-body">
                    <h5 class="card-title">Добавление вопроса</h5>
                    <p class="card-text">После добавление теста, добавьте вопросы и ответы к ним.</p>
                    <div class="row mb-4">

                        <div class="form-floating mb-3">
                            <input name="question_text" type="text" class="form-control" id="floatingInput"
                                   placeholder="Название теста" required>
                            <label for="floatingInput">Текст вопроса</label>
                        </div>

                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Добавит вопрос</button>
                </div>
                <p class="mt-1 mb-1 h4 text-danger text-center">
                    <?php
                    if ($_SESSION['alert'] == "selector_error") {
                        echo "Такой вопрос уже существует!";
                        $_SESSION['alert'] = "0";
                    }
                    ?>
                </p>
            </div>
        </form>
        <form action="../php/answer_add.php" class="" method="post">
            <div class="card w-75 text-start ">
                <div class="card-body">
                    <h5 class="card-title">Добавление ответа</h5>
                    <p class="card-text">После добавление теста, добавьте вопросы и ответы к ним.</p>
                    <div class="row mb-4">
                        <?php
                        $id_test = $_GET['id']; //сворованный айди с ссылки
                        $_SESSION['id_test'] = $id_test;
                        $user_id = $_SESSION['id_user'];
                        $que_select = mysqli_query($connect, "SELECT * FROM `question` where id_test  = '$id_test'");
                        ?>
                        <div class="input-group mb-3 w-20">
                            <select name="que_selector" class="form-select" id="inputGroupSelect02">
                                <option selected>Выберите вопрос:</option>
                                <?php
                                while ($row = mysqli_fetch_array($que_select)) {
                                    $que = $row['question_text'];
                                    ?>
                                    <option value="<?php echo $que; ?>"><?php echo $que; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-floating">
                        <input name="answer_text" type="text" class="form-control" id="floatingInput"
                               placeholder="Название теста" required>
                        <label for="floatingInput">Текст ответа</label>
                    </div>

                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Добавит ответ к вопросу</button>
            </div>
            <p class="mt-1 mb-1 h4 text-danger text-center">
                <?php
                if ($_SESSION['alert'] == "selector_error2") {
                    echo "Вы не выбрали вопрос";
                    $_SESSION['alert'] = "0";
                }
                ?>
            </p>

        </form>
    </center>
    <hr>
    <h3>Вопросы и ответы к этому тесут:</h3>
    <?php
    $user_id = $_SESSION['id_user'];
    $test_select = mysqli_query($connect, "SELECT * FROM `answer` where id_question = '$user_id'");
    while ($row = mysqli_fetch_array($test_select)) {
        $test_name = $row['test_name'];
        $test_id = $row['id_test'];
        ?>

        <a href="question.php?id=<?= $test_id ?>" class="h5 fs-2"><?php echo $test_name; ?></a><br><br>

        <?php
    }
    ?>
</div>
</div>
</body>
<?php require_once 'footer.php' ?>
</html>