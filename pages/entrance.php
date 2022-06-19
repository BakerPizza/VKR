<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'header.php';

    ?>
</head>
<center>
    <body class="text-center ">
    <main>
        <div class="mx-auto mt-5" style="width: 400;">
            <div class="card bg-light bg-opacity-25" style="width: 25rem;">
                <main class="form-signin">
                    <form action="../php/ent_controller.php" class="mt-5 ms-5 me-5" method="post">
                        <h1 class="h3 mb-3 fw-normal">Авторизация</h1>

                        <div class="form-floating mb-3">
                            <input name="login" type="login" class="form-control" id="floatingInput"
                                   placeholder="name@example.com" required>
                            <label for="floatingInput">Логин</label>
                        </div>

                        <div class="form-floating">
                            <input name="password" type="password" class="form-control" id="Password"
                                   placeholder="Password" required>
                            <label for="Password">Пароль</label>
                        </div>

                        <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Войти</button>
                        <p class="h5 mt-3 mb-3 fw-normal">Еще нету аккаунта?</p>
                        <a href="registration.php" class="h5 mt-3 mb-3 fw-normal">Регистрация</a>
                        <p class="mt-1 mb-1 h4 text-success">
                            <?php
                            if ($_SESSION['alert'] == "done") {
                                echo "Вы зарегистрировались!";
                                $_SESSION['alert'] = "0";
                            }

                            ?>
                        </p>
                        <p class="mt-1 mb-1 h4 text-danger">
                            <?php
                            if ($_SESSION['alert'] == "ent_error") {
                                echo "Пароль или логин не совпадают!";
                                $_SESSION['alert'] = "0";
                            }
                            ?>
                        </p>
                        <p class="mt-1 mb-1 h4 text-danger">
                            <?php
                            if ($_SESSION['alert'] == "error_test") {
                                echo "Чтобы пройти тест войдите";
                                $_SESSION['alert'] = "0";
                            }
                            ?>
                        </p>
                        <p class="mt-5 mb-3 text-muted">&copy; Сарновский</p>
                    </form>
                </main>
            </div>
        </div>
    </body>
</center>
<?php require_once 'footer.php' ?>
</html>