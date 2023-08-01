<?php

session_start();
require_once ("config.php");

$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
// $lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$adress = $_POST['adress'];
$rol = $_POST['rol'];
$hobbi = $_POST['hobbi'];
$date = $_POST['date'];
$manager = $_POST['manager'];
$status = $_POST['status'];

$avatar = 'avatars/' . time() . $_FILES['avatar']['name'];

move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $avatar);

mysqli_query($conn, "INSERT INTO `clients` (`id`, `firstname`, `secondname`, `tel`, `adress`, `rol`, `hobbi`, `birthday`, `manager`, `status`, `avatar`) VALUES (NULL, '$firstname', '$secondname', '$tel', '$adress', '$rol', '$hobbi', '$date', '$manager', '$status', '$avatar')");


if($_SESSION['user']['position'] === 'admin') {
    header("Location: ../pages/admin_mijoz_reg.php");
}elseif($_SESSION['user']['position'] === 'manager') {
    header("Location: ../pages/manager_mijoz_reg.php");
}


