<?php

session_start();

if(!$_SESSION) {
    header("Location: logout.php");
}

require_once 'config.php';


$id = $_POST['id'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$adress = $_POST['adress'];
$tel = $_POST['tel'];
$rol = $_POST['rol'];
$hobbi = $_POST['hobbi'];
$usta = $_POST['usta'];
$birthday = $_POST['birthday'];
$manager = $_POST['manager'];


mysqli_query($conn, "UPDATE `clients` SET `firstname` = '$firstname', `secondname` = '$secondname', `tel` = '$tel', `adress` = '$adress', `rol` = '$rol', `usta` = '$usta', `hobbi` = '$hobbi', `birthday` = '$birthday', `manager` = '$manager' WHERE `clients`.`id` = '$id'");

header("Location: ../pages/client_page.php?id=$id");
