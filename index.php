<?php
session_start();
include 'functions.php';
include 'time.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Главная</title>
</head>
<body background="/pictures/Stones_Orchid_Candles_472882.jpg" >

<div class="title">
    <h1>спа салон</h1>
    <h1>"СЕДЬМОЕ НЕБО"</h1>
</div>

<div class="procedures">
  <h2>Наши процедуры</h2>
  <a class="point_of_procedures" href=#>массаж расслабляющий </a><br><br>
  <a class="point_of_procedures" href=#>массаж антицеллюлитный</a><br><br>
  <a class="point_of_procedures" href=#>антистрессовый арома-массаж</a><br><br>
  <a class="point_of_procedures" href=#>массаж лица</a><br><br>
  <a class="point_of_procedures" href=#>стоун-массаж</a><br><br>
  <a class="point_of_procedures" href=#>кедровая фитобочка</a><br><br>
  <a class="point_of_procedures" href=#>шоколадное обертывание</a><br><br>
  <a class="point_of_procedures" href=#>грязевое обертывание</a><br><br>
  <a class="point_of_procedures" href=#>крем-маска</a><br><br>
  <a class="point_of_procedures" href=#>альгинатная маска</a><br><br>
</div>


<?php
if (isset($_SESSION['authorized'])) {
    echo '<div class="login">
    <p class="name_text">Приветствуем вас:' . ' ' . getCurrentUser() . '</p>
    <a class="log_out" href="/logout.php">Выйти из профиля</a>
    </div>';
} else {
    echo '<a class="log_out" href="/login.php">Войти на сайт</a>' ;
}
?>


<?php
if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
if ($_SESSION['checkDayBirth'] > 0) {
    echo '<div class="discountBirth">
    <p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
    </div>';
} else if ($_SESSION['checkDayBirth'] === 0) {
    echo '<div class="discountBirth">
    <p> Поздравляем вас с Днем Рождения! В честь этого мы подготовили вам подарок!</p>
    <p>Скидка 5% на все услуги нашего спа-салона!</p>
    </div>';
  }
};


if($salet && isset($_SESSION['authorized'])) {  
    echo "<div class='discountPersonal'>
     <p>Ваша персональная скидка 10% на все закончится через: $hours ч $minutes мин $seconds сек</p>
     </div>";
    }
?>












<h2 class='ourPhoto'>ФОТО НАШЕГО САЛОНА</h2>
<section class='photoBlocks'>
<div class='photoBlock'>
    <div class='photo' style='background: url(/pictures/1672704525_pro-dachnikov-com-p-interer-spa-foto-36.jpg);'></div>
    <div class='photo' style='background: url(/pictures/1672704542_pro-dachnikov-com-p-interer-spa-foto-45.jpg);'></div>
    <div class='photo' style='background: url(/pictures/1673424247_pro-dachnikov-com-p-massazhnii-salon-interer-foto-63.jpg);'></div>
</div>
<div class='photoBlock'>
    <div class='photo' style='background: url(/pictures/1aee342e3d5b7105cae7d8b57e4b3af0.jpg);'></div>
    <div class='photo' style='background: url(/pictures/DSC01450copymin.jpg);'></div>
    <div class='photo' style='background: url(/pictures/original_52c0260240c0886b7c8c1232_52f06c88c7634.jpg);'></div>
</div>
</section>
<footer>
    <p class="adress">Наш адрес: Новосибирск, ул. Гоголя 38, ст.м. Маршала Покрышкина</p>
    <p class="adress">Тел: 8 (383) 238-54-30</p>
</footer>
</body>
</html>
