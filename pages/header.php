<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <?php
    session_start();

    ?>
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="../index.php"><img class="ms-5" src="../content/logo.png" alt="" width="42px" height="42px"></a>
        <a class="navbar-brand ms-3 fs-3" href="../index.php">Сдам ЕГЭ</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../pages/tests.php">Тесты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/met_classes.php">Методические материалы</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <?php
                if ($_SESSION['id_user'] != 0) {
                    ?>
                    <a class="btn btn-light me-3 fs-5" href="/pages/personal.php">Личный кабинет</a>
                    <a class="btn btn-light me-5 fs-5" href="/php/logout.php">Выход</a>
                    <?php
                } else {
                    ?>
                    <a class="btn btn-light me-5 fs-5" href="/pages/entrance.php">&emsp;&emsp;&emsp;Вход&emsp;&emsp;&emsp;</a>
                    <?php
                }
                ?>
            </form>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>
</html>