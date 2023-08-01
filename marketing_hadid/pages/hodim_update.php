<?php
    session_start();

    $user_id = $_GET['id'];

    require_once '../system/config.php';

    $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");
    $user = mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/hodimlar.css">
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
        <div class="list__intro">
            <h2 class="title">hodimlar ruyxati</h2>
            <div class="list__box">
                <div class="list__header">
                    <p class="user__info__title">ism</p>
                    <p class="user__info__title">familiya</p>
                    <p class="user__info__title">otasining ismi</p>
                    <p class="user__info__title">tel. raqam</p>
                    <p class="user__info__title">adres</p>
                    <p class="user__info__title">lavozim</p>
                    <p class="user__info__title">login</p>
                    <p class="user__info__title">parol</p>
                    <p class="user__info__title">satus</p>
                    <p class="user__info__title"></p>

                </div>
                <div class="list__inner">

                    <form action="../system/hodim_update_inc.php" method="POST">
                        <div class="info__block">
                            <input type="text" class="user__update" name="firstname" value="<?= $user['firstname'] ?>">
                            <input type="text" class="user__update" name="secondname" value="<?= $user['secondname'] ?>">
                            <input type="text" class="user__update" name="lastname" value="<?= $user['lastname'] ?>">
                            <input type="number" class="user__update" name="tel" value="<?= $user['telNumber'] ?>">
                            <input type="text" class="user__update" name="adress" value="<?= $user['adress'] ?>">
                            <select name="position" id="" class="user__update">
                                <option id="input" value="admin">admin</option>
                                <option id="input" value="manager">manager</option>
                            </select>
                            <input type="text" class="user__update" name="login" value="<?= $user['login'] ?>">
                            <input type="text" class="user__update" name="password" value="<?= $user['password'] ?>">
                            <select name="status" class="user__update" id="">
                                <option value="faol">faol</option>
                                <option value="block">block</option>
                            </select>
                            <input type="submit" class="user__update btn" name="" value="uzgartirish">
                            <input type="hidden" name="id" id="" value="<?= $user_id ?>">
                        </div>
                    </form>

                    

                </div>
            </div>
        </div>
    </div>
    


    <script src="../js/menu.js"></script>
</body>
</html>