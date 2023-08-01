<?php

session_start();

require_once 'config.php';


$login = $_POST["login"];
$password = $_POST["password"];


$user_check = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user_count = mysqli_num_rows($user_check);
$user_check = mysqli_fetch_all($user_check);
$user_arr = $user_check[0];
// echo $user_count;

if($user_count === 0) {
    header("location: logout.php");
    
}else {
    // print_r($user_arr);
    $_SESSION['user'] = [
        'id' => $user_arr[0],
        'firstname' => $user_arr[1],
        'secondname' => $user_arr[2],
        'position' => $user_arr[6],
    ];


    if($user_arr[9] === 'faol') {
        if($user_arr[6] === 'admin') {
            header("location: ../pages/admin_cabinet.php");
        }elseif ($user_arr[6] === 'manager') {
            header("location: ../pages/manager_cabinet.php");
        }
    }else {
        header("location: logout.php");
    }
}


