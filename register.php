<?php
session_start();

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="inc/signup.php" enctype="multipart/form-data" method="post">

        <label>ФИО</label>
        <input name="full_name" type="text" placeholder="Введите ФИО"></input>
        <label>Логин</label>
        <input name="login" type="text" placeholder="Введите логин"></input>
        <label>Email</label>
        <input name="email" type="email" placeholder="Введите email"></input>
        <label>Изображенние</label>
        <input name="avatar" type="file"></input>
        <label>Пароль</label>
        <input name="password" type="password" placeholder="Придумайте пароль"></input>
        <input name="confirm_password" type="password" placeholder="Подтвердите пароль"></input>
        <button type="submit">Зарегистрироваться</button>
        <p>
                    У вас уже есть аккаунт? - <a href="index.php">войдите</a>
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
