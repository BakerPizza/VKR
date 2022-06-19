<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'header.php' ?>
</head>
<center>
    <body class="text-center ">
    <main>
        <div class="mx-auto mt-5" style="width: 400;">
            <div class="card bg-light bg-opacity-25" style="width: 25rem;">
                <main class="form-signin">
                    <form action="../php/reg_controller.php" class="mt-5 ms-5 me-5" method="post">
                        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" name="name" id="form3Example1" class="form-control"
                                           placeholder="Имя" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" name="surname" id="form3Example2" class="form-control"
                                           placeholder="Фамилия" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="patronymic" type="text" class="form-control" id="floatingInput"
                                   placeholder="Отчество" required>
                            <label for="floatingInput">Отчество</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="login" type="login" class="form-control" id="floatingInput"
                                   placeholder="name@example.com" required>
                            <label for="floatingInput">Логин</label>
                        </div>

                        <div class="form-floating mb-3"
                        ">
                        <input name="password" type="password" class="form-control" id="Password" placeholder="Password"
                               required>
                        <label for="Password">Пароль</label>
            </div>

            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="e-mail" required>
                <label for="floatingInput">e-mail</label>
            </div>


            <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
            <p class="mt-1 mb-1 h4 text-danger">
                <?php
                if ($_SESSION['alert'] == "error") {
                    echo "Логин занят!";
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