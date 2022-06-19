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
<div class="container pt-3 mb-5 pb-5" style="margin-bottom: 11vh;">

    <?php
    if ($_SESSION['users']['id_role'] == 1) {
        ?>
        <h3>Личный кабинет пользователя: <?php echo $_SESSION['surname'];
            echo " ";
            echo $_SESSION['name']; ?> </h3>
        <hr>
        <h3>Результаты тестов:</h3>
        <?php
        $user_id = $_SESSION['id_user'];
        $results = mysqli_query($connect, "SELECT * FROM `results` where id_user = '$user_id'");
        while ($row = mysqli_fetch_array($results)) {
            $id_test = $row['id_test'];
            $result = $row['result'];
            $time = $row['time'];
            $result_test = mysqli_query($connect, "SELECT * FROM `test` where id_test = '$id_test'");
            while ($row2 = mysqli_fetch_array($result_test)) {
                $test_name = $row2['test_name'];

            }
            if ($result === 'Тест решен') {
                $class = "success";
            } else {
                $class = "danger";
            }
            ?>
            <h4 class="text-<?php echo $class;?>"><?php echo $test_name; ?>: <?php echo $time; ?>, <?php echo $result; ?></h4>
            <?php
        }
    }
    ?>




    <?php
    if ($_SESSION['users']['id_role'] == 2) {
//echo "Админ";
        ?>
        <h3>Личный кабинет учителя: <?php echo $_SESSION['surname'];
            echo " ";
            echo $_SESSION['name']; ?> </h3>
        <hr>
        <center>
            <form action="../php/test_add.php" class="" method="post">
                <div class="card w-75 mb-3 text-start">
                    <div class="card-body">
                        <h5 class="card-title">Добавление теста</h5>
                        <p class="card-text">После добавление теста, добавьте вопросы и ответы к ним кликнув на название
                            теста.</p>
                        <div class="row mb-4">

                            <div class="input-group mb-3 w-20">
                                <select name="selector" class="form-select" id="inputGroupSelect02">
                                    <option selected>Выберите дисциплину:</option>
                                    <option value="Русский язык">Русский язык</option>
                                    <option value="Математика">Математика</option>
                                    <option value="Обществознание">Обществознание</option>
                                    <option value="Английский язык">Английский язык</option>
                                    <option value="История">История</option>
                                    <option value="Информатика">Информатика</option>
                                    <option value="Биология">Биология</option>
                                    <option value="Литература">Литература</option>
                                    <option value="География">География</option>
                                    <option value="Физика">Физика</option>
                                    <option value="Химия">Химия</option>
                                </select>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="test_name" type="text" class="form-control" id="floatingInput"
                                       placeholder="Название теста" required>
                                <label for="floatingInput">Название теста</label>
                            </div>

                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Добавит тест</button>
                    </div>
                    <p class="mt-1 mb-1 h4 text-danger text-center">
                        <?php
                        if ($_SESSION['alert'] == "selector_error") {
                            echo "Вы не выбрали дисциплину!";
                            $_SESSION['alert'] = "0";
                        }
                        ?>
                    </p>
                </div>
            </form>
            <form action="../php/methodical_add.php" class="" method="post">
                <div class="card w-75 text-start">
                    <div class="card-body">
                        <h5 class="card-title ">Добавление методических материалов</h5>
                        <div class="row">

                            <div class="input-group mb-3 mt-3 w-20">
                                <select name="methodical_class" class="form-select" id="inputGroupSelect02">
                                    <option selected>Выберите дисциплину:</option>
                                    <option value="Русский язык">Русский язык</option>
                                    <option value="Математика">Математика</option>
                                    <option value="Обществознание">Обществознание</option>
                                    <option value="Английский язык">Английский язык</option>
                                    <option value="История">История</option>
                                    <option value="Информатика">Информатика</option>
                                    <option value="Биология">Биология</option>
                                    <option value="Литература">Литература</option>
                                    <option value="География">География</option>
                                    <option value="Физика">Физика</option>
                                    <option value="Химия">Химия</option>
                                </select>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="methodical_name" type="text" class="form-control" id="floatingInput"
                                       placeholder="Название материала" required>
                                <label for="floatingInput">Название материала</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="methodical_text" class="form-control mb-3 h-100"
                                          id="exampleFormControlTextarea1" rows="3" required></textarea>
                                <label for="exampleFormControlTextarea1">Текст материала</label>

                            </div>

                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Добавит материал</button>
                    </div>
                    <p class="mt-1 mb-1 h4 text-danger text-center">
                        <?php
                        if ($_SESSION['alert'] == "selector_error") {
                            echo "Вы не выбрали дисциплину!";
                            $_SESSION['alert'] = "0";
                        }
                        ?>
                    </p>
                </div>
            </form>
        </center>
        <hr>
        <h3>Ваши тесты:</h3>
        <?php
        $user_id = $_SESSION['id_user'];
        $test_select = mysqli_query($connect, "SELECT * FROM `test` where id_user = '$user_id'");
        while ($row = mysqli_fetch_array($test_select)) {
            $test_name = $row['test_name'];
            $test_id = $row['id_test'];
            ?>

            <a href="question.php?id=<?= $test_id ?>" class="h5 fs-2"><?php echo $test_name; ?></a><br><br>

            <?php
        }
    }
    ?>

    <?php
    if ($_SESSION['users']['id_role'] == 3) {

        ?>

        <h3>Личный кабинет администратора: <?php echo $_SESSION['surname'];
            echo " ";
            echo $_SESSION['name']; ?> </h3>
        <hr>
        <center>
            <form action="../php/role_changer.php" class="" method="post">
                <div class="card w-75 mb-3 text-start">
                    <div class="card-body">
                        <h5 class="card-title">Добавление теста</h5>
                        <p class="card-text">После добавление теста, добавьте вопросы и ответы к ним кликнув на название
                            теста.</p>
                        <div class="row mb-4">
                            <?php
                            $user_select = mysqli_query($connect, "SELECT * FROM `users` where id_role  = '1'");
                            ?>
                            <div class="input-group mb-3 w-20">
                                <select name="user_selector" class="form-select" id="inputGroupSelect02">
                                    <option selected>Выберите пользователя:</option>
                                    <?php
                                    while ($row = mysqli_fetch_array($user_select)) {
                                        $login = $row['login'];
                                        $name = $row['name'];
                                        $surname = $row['surname'];
                                        ?>
                                        <option value="<?php echo $login; ?>">Логин: <?php echo $login; ?>,
                                            Имя: <?php echo $name; ?> <?php echo $surname; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить учителя</button>
                    </div>
                    <p class="mt-1 mb-1 h4 text-success text-center">
                        <?php
                        if ($_SESSION['alert'] == "change_done") {
                            $user_selector = $_SESSION['$user_selector'];
                            echo "Пользователь $user_selector стал учителем";
                            $_SESSION['alert'] = "0";
                        }
                        ?>
                    </p>
                    <p class="mt-1 mb-1 h4 text-danger text-center">
                        <?php
                        if ($_SESSION['alert'] == "change_error") {
                            echo "Вы не выбрали пользователя!";
                            $_SESSION['alert'] = "0";
                        }
                        ?>
                    </p>
                </div>
            </form>
        </center>

        <?php
    }
    ?>

</div>
</body>
<?php require_once 'footer.php' ?>
</html>