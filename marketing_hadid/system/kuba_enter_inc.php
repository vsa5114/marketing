<?php

session_start();

$kube = $_POST['kube'];
$client_id = $_POST['client_id'];
$user_id = $_POST['user_id'];
$date = $_POST['date'];
$location = $_POST['location'];
$location_type = $_POST['location_type'];

require_once 'config.php';


mysqli_query($conn, "INSERT INTO `kube` (`id`, `user_id`, `client_id`, `manzil`, `type`, `kuba_count`, `date`) VALUES (NULL, '$user_id', '$client_id', '$location', '$location_type', '$kube', '$date')");

header("Location: ../pages/user_cabinet.php");