<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'header.php';
    require_once('../php/connection.php');
    $id_user = $_SESSION['id_user'];
    ?>
</head>
<body>
<div class="container pt-3 mb-5 " style="margin-bottom: 11vh;">
    <h3>Выберите дисциплину методического материала</h3>
    <hr>
    <div class="row">
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Русский язык</h5>
                    <a href="../pages/met_names.php?id=Русский язык" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Математика</h5>
                    <a href="../pages/met_names.php?id=Математика" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Обществознание</h5>
                    <a href="../pages/met_names.php?id=Обществознание" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Английский язык</h5>
                    <a href="../pages/met_names.php?id=Английский язык" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">История</h5>
                    <a href="../pages/met_names.php?id=История" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Информатика</h5>
                    <a href="../pages/met_names.php?id=Информатика" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Биология</h5>
                    <a href="../pages/met_names.php?id=Биология" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Литература</h5>
                    <a href="../pages/met_names.php?id=Литература" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">География</h5>
                    <a href="../pages/met_names.php?id=География" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Физика</h5>
                    <a href="../pages/met_names.php?id=Физика" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Химия</h5>
                    <a href="../pages/met_names.php?id=Химия" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">...</h5>
                    <a href="#" class="btn btn-primary">Выбрать дисциплину</a>
                </div>
            </div>
        </div>

    </div>
    <?php
    //if($_SESSION['users']['id_role']===1){
    //}
    ?>

</div>
</body>
<?php require_once 'footer.php' ?>
</html>