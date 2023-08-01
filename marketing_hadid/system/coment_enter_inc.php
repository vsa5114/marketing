<?php

session_start();

require_once 'config.php';

$client_id = $_POST['clientID'];
$coment = $_POST['coment'];
$date = date("d.m.y");


echo $coment;

if(mb_strlen($coment) > 0) {
    mysqli_query($conn, "INSERT INTO `coments` (`id`, `client_id`, `coment`, `date`) VALUES (NULL, '$client_id', '$coment', '$date')");
}


header("Location: ../pages/client_page.php?id=$client_id");


