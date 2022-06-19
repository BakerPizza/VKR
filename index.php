<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сдам ЕГЭ</title>
    <?php require_once 'pages/header.php' ?>
</head>
<body style="margin-bottom: 15vh;">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="/content/slider3.jpg" class="d-block w-100" alt="..." height="500">
      <div class="carousel-caption d-none d-md-block fs-3">
        <h5 class="fs-2">Подготовка к ЕГЭ</h5>
        <p>Простая и легкая подготовка к экзамену</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/content/slider2.jpg" class="d-block w-100" alt="..." height="500">
    </div>
    <div class="carousel-item">
      <img src="/content/slider1.jpg" class="d-block w-100" alt="..." height="500">
      <div class="carousel-caption d-none d-md-block fs-3">
        <h5 class="fs-2">Методические материалы</h5>
        <p>Помимо тестированя вы можете пдготовится <br> по методическим материалам</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <div class="container pt-3 mb-5 text-center fs-3" style="margin-bottom: 15vh;">
 <div class="mb-5 mt-5">
 <a href="../pages/tests.php" class="text-decoration-none"><h1>Тестирование</h1></a>
 <p>Пройдите тестирование и проверьте свои знания</p>
 </div>
 <center>
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col ">
    <div class="card w-75 mb-5">
     <a href="../pages/test.php?id=Русский язык" class="text-decoration-none"> <img src="/content/1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Русский язык</h5></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75">
    <a href="../pages/test.php?id=Математика" class="text-decoration-none"> <img src="/content/2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Математика</h5> </a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75">
    <a href="../pages/test.php?id=Обществознание" class="text-decoration-none"> <img src="/content/3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Обществознание</h5> </a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75">
    <a href="../pages/test.php?id=Английский язык" class="text-decoration-none"> <img src="/content/4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Английский язык</h5> </a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75">
    <a href="../pages/test.php?id=История" class="text-decoration-none"> <img src="/content/5.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">История</h5> </a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card w-75">
    <a href="../pages/test.php?id=Информатика" class="text-decoration-none"> <img src="/content/6.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Информатика</h5> </a>
      </div>
    </div>
</center>
  </div>
</div>
 </div>   
</body>
<?php require_once 'pages/footer.php' ?>
</html>