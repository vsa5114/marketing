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
    <link rel="stylesheet" href="../css/user_reg.css">
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
        <form action="../system/user_reg_inc.php" method="POST">
            <div class="reg__box">
                <p class="reg__text">ism</p>
                <input type="text" class="input" name="firstname" id="">
                <p class="reg__text">familiya</p>
                <input type="text" class="input" name="secondname" id="">
                <p class="reg__text">otasini ismi</p>
                <input type="text" class="input" name="lastname" id="">
                <p class="reg__text">tel raqam</p>
                <input type="number" class="input" name="teNumber" id="">
                <p class="reg__text">adres</p>
                <input type="text" class="input" name="adress" id="">
                <p class="reg__text">lavozim</p>
                <select name="position" id="" class="input">
                    <option id="input" value="admin">admin</option>
                    <option id="input" value="manager">manager</option>
                </select>
                
                <p class="reg__text">login</p>
                <input type="text" class="input" name="login" id="">
                <p class="reg__text">parol</p>
                <input type="text" class="input" name="password" id="">

                <p class="reg__text">status</p>
                <select name="status" id="" class="input">
                    <option id="input" value="faol">faol</option>
                    <option id="input" value="block">block</option>
                </select>
                <input type="submit" name="btn" class="btn" id="">
            </div>
        </form>
    </div>






    <script src="../js/menu.js"></script>
</body>
</html>