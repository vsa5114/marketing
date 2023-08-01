<?php
        session_start();

        if(!$_SESSION['user'] or $_SESSION['user']['position'] !== 'admin') {
            header("Location: ../system/logout.php");
        }
    
        $username = $_SESSION['user']['firstname'];
        
        require_once '../system/config.php'
    
        
    
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
                    <p class="user__info__title">taxlil</p>
                    <p class="user__info__title">uchirish</p>
                </div>
                <div class="list__inner">

                <?php

                    $users = mysqli_query($conn, "SELECT * FROM `users`");
                    $users = mysqli_fetch_all($users);

                    foreach($users as $user) {
                        echo "<div class='info__block'>";
                        echo "<p class='user__infos'>$user[1]</p>";
                        echo "<p class='user__infos'>$user[2]</p>";
                        echo "<p class='user__infos'>$user[3]</p>";
                        echo "<p class='user__infos'>998$user[4]</p>";
                        echo "<p class='user__infos'>$user[5]</p>";
                        echo "<p class='user__infos'>$user[6]</p>";
                        echo "<p class='user__infos'>$user[7]</p>";
                        echo "<p class='user__infos'>$user[8]</p>";
                        echo "<p class='user__infos'>$user[9]</p>";
                        echo "<p class='user__infos'><a href='hodim_update.php?id=$user[0]' class='btn'>tahlil</a></p>";
                        echo "<p class='user__infos'><a href='../system/hodim_delete_inc.php?id=$user[0]' class='btn'>uchirish</a></p>";
                        echo "</div>";    
                    }




                ?>

                    

                </div>
            </div>
        </div>
    </div>



    <script src="../js/menu.js"></script>
</body>
</html>



