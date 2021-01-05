<?php

session_start();
require_once 'db.php';


$full_name = $_POST['full_name'] ?? '';
$login = $_POST['login']  ?? '';
$email = $_POST['email']  ?? '';
$password = $_POST['password']  ?? '';
$confirm_password = $_POST['confirm_password']  ?? '';

if ($password === $confirm_password) {

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка загрузки изображения';
        header('Location: ../register.php');
    }
    $password = md5($password);
    
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `avatar`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$path', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.php ');
    
 } else {
    $_SESSION['message'] = 'Пароли  не совпадают';
    header('Location: ../register.php ');
    
}

?>
