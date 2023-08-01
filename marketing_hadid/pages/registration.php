<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/registration.css">
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
        <div class="wrapper">
            <div class="reg__type" id="type1">
                <h2 class="reg__text">Hodim ro'yxatdan o'tkazish</h2>
                <p href="" class="reg__btn"><a href="user_reg.php">o'tkazish</a></p>
            </div>
            <div class="reg__type" id="type2">
                <h2 class="reg__text">Mijoz ro'xatdan o'tkazish</h2>
                <p href="" class="reg__btn"><a href="admin_mijoz_reg.php">o'tkazish</a></p>
            </div>
        </div>
    </div>
    




    <script src="../js/menu.js"></script>
</body>
</html>