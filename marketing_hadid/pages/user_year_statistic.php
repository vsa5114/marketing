<?php

    session_start();

    if($_SESSION['user']['position'] !== 'admin') {
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
    <link rel="stylesheet" href="../css/user_stat.css">
    <title>Hodimlar statistikasi</title>
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




    <script src="../js/menu.js"></script>    
</body>
</html>