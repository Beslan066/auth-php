<?php


$connect = mysqli_connect("localhost", "root", "root", "auth");

if(!$connect) {
    die("Ошибка подключения к базе данных");
}