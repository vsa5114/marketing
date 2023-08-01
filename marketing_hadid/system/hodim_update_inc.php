<?php

session_start();

print_r($_POST);

require_once 'config.php';

// UPDATE `users` SET `id` = '1.', `firstname` = '.Saidakbarxon', `secondname` = '.Valixonov', `lastname` = '.Alixon o\'g\'li', `telNumber` = '.1', `adress` = '.Adolat 8', `position` = '.admin', `login` = '.adminhadid', `password` = '.hadid300', `status` = '.faol' WHERE `users`.`id` = 1
$id = $_POST['id'];
$firsname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$adress = $_POST['adress'];
$position = $_POST['position'];
$login = $_POST['login'];
$password = $_POST['password'];
$status = $_POST['status'];


mysqli_query($conn, "UPDATE `users` SET `firstname` = '$firsname', `secondname` = '$secondname', `lastname` = '$lastname', `telNumber` = '$tel', `adress` = '$adress', `position` = '$position', `login` = '$login', `password` = '$password', `status` = '$status' WHERE `users`.`id` = '$id'");

header("Location: ../pages/hodimlar.php");
