<?php

    session_start();

    if(!$_SESSION['user'] and $_SESSION['user']['position'] !== 'admin') {
        header("Location: ../system/logout.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/statistika.css">
    <title>Document</title>
</head>
<body>
    
    <header class="menu__bar">
        <div class="menu__bar__inner">
            <?php
                include("../system/admin_menu.php");
            ?>
        </div>
        <div class="burger__menu">menu</div>
    </header>
    <div class="container">
        <div class="grid__box">
            <div class="stat__type" id="type1">
                <p class="title">umumiy yillik statistika</p>
                <a href="year_statistic.php" class="stat__btn">kurish</a>
            </div>    
            <div class="stat__type" id="type2">
                <p class="title">hodimlar yillik statistika</p>
                <a href="user_year_statistic.php" class="stat__btn">kurish</a>
            </div>    
        </div>
    </div>





    <script src="../js/menu.js"></script>
</body>
</html>