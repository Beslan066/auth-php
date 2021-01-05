<?php

session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
        <form action="inc/signin.php" method="post">
            <label>Логин</label>
            <input type="text" placeholder="Введите логин" name="login"></input>
            <label>Пароль</label>
            <input type="password" placeholder="Введите пароль" name="password"></input>
            <button type="submit">Войти</button>
            <p>
                У вас еще нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>
            </p>
            <?php
            if($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>'; 
            }
            unset($_SESSION['message']);

            ?>
        </form>
    
</body>
</html>