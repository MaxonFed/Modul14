<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход в личный кабинет</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body background="/pictures/Stones_Orchid_Candles_472882.jpg">
<div class="title">
  <h1>спа салон</h1>
  <h1>"СЕДЬМОЕ НЕБО"</h1>
</div>   
<a class="log_out" href="/logout.php">На главную страницу</a> 
<section>
        <form action="entrance.php" method="post">
        &nbsp;&nbsp; <label>Логин</label>
            <input  type="text" name="login" placeholder="Введите логин"><br>
            <label>Пароль</label>
            <input type="password" name="password"  placeholder="Введите пароль"><br>
            <label>Дата рождения</label>
            <input type="date" name="datebirthday"  placeholder="Введите дату рождения"><br>
            <button type="submit">Войти</button>
            <?php
            
                if (isset($_SESSION['message'])){
                    echo '<p class="message">'.$_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </section>
</body>
</html>
