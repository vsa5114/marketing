<?php

session_start();

require_once("config.php");




$firtname = $_POST["firstname"];
$secondname = $_POST["secondname"];
$lastname = $_POST["lastname"];
$telNumber = $_POST["teNumber"];
$adress = $_POST["adress"];
$position = $_POST["position"];
$login = $_POST["login"];
$password = $_POST["password"];
$status = $_POST["status"];


mysqli_query($conn, "INSERT INTO `users` (`id`, `firstname`, `secondname`, `lastname`, `telNumber`, `adress`, `position`, `login`, `password`, `status`) VALUES (NULL, '$firtname', '$secondname', '$lastname', '$telNumber', '$adress', '$position', '$login', '$password', '$status')");


header("location: ../pages/registration.php");


