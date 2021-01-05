<?php

session_start();
require_once 'inc/db.php';


?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Профиль</title>
</head>
<body>
    <form action="">

        <img style="width:100px"src="<?= $_SESSION['user']['avatar'] ?>" alt="">
        <h2><?= $_SESSION['user']['full_name']  ?></h2>
        <a href="inc/logout.php">Выйти</a>

    </form>
</body>
</html>