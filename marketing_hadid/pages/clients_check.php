<?php

    session_start();

    if(!$_SESSION['user']) {
        heaedr("Location: ../system/logout.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/clients_check.css">
    <title>Document</title>
</head>
<body>

    <header class="menu__bar">
        <div class="menu__bar__inner">
            <?php
                if($_SESSION['user']['position'] === 'admin') {
                    include("../system/admin_menu.php");
                }elseif($_SESSION['user']['position'] === 'manager') {
                    include("../system/manager_menu.php");
                }

                
            ?>
        </div>
        <div class="burger__menu">menu</div>
    </header>

    <div class="container">
        <div class="check__grid">
            <div class="client__check" id="box1">
                <p class="check__title">client</p>
                <a href="client_data.php" class="check__link">taxlillash</a>
            </div>
            <div class="client__check" id="box2">
                <p class="check__title">prorab</p>
                <a href="prorab_data.php" class="check__link">taxlillash</a>
            </div>
            <div class="client__check" id="box3">
                <p class="check__title">usta</p>
                <a href="usta_data.php" class="check__link">taxlillash</a>
            </div>
            <div class="client__check" id="box4">
                <p class="check__title">firma</p>
                <a href="firma_data.php" class="check__link">taxlillash</a>
            </div>
            
        </div>
    </div>



    <script src="../js/menu.js"></script>
</body>
</html>