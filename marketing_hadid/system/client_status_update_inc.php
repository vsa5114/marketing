<?php

session_start();

require_once "config.php";

// UPDATE `clients` SET `status` = 'aloqada 5' WHERE `clients`.`id` = 3

print_r($_POST);
$status = $_POST['status'];
$client_id = $_POST['clientID'];


mysqli_query($conn, "UPDATE `clients` SET `status` = '$status' WHERE `clients`.`id` = '$client_id'");

header("Location: ../pages/client_page.php?id=$client_id");

