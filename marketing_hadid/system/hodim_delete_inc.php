<?php

session_start();

$user_id = $_GET['id'];

require_once 'config.php';


mysqli_query($conn, "DELETE FROM `users` WHERE `users`.`id` = '$user_id'");

header("Location: ../pages/hodimlar.php");

// "DELETE FROM `users` WHERE `users`.`id` = 5"


