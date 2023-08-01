<?php
    session_start();

    if($_SESSION['user']['position'] !== 'manager') {
        header("location: ../system/logout.php");
    }

    $username = $_SESSION['user']['firstname'];
    $userid = $_SESSION['user']['id'];

    // $usercount = mysqli_num_rows($_SESSION);

    require_once '../system/config.php';

    // $url = "client_page.php?id=$userid";
    // $url = strtok($url, '?');

    // echo $url;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/manager_cabinet.css">
    <title>Document</title>
</head>
<body>
    
    <header class="menu__bar">
        <div class="menu__bar__inner">
            <?php
                include("../system/manager_menu.php");
            ?>
        </div>
        <div class="burger__menu">menu</div>
    </header>

    <div class="container">
        <div class="manager__grid">
            <div class="clients" id="box1">
                <h2 class="clients__title">aloqaga chiqilmagan</h2>
                <div class="clients__box">
                    <div class="clients__header">
                        <p class="header__text">ism</p>
                        <p class="header__text">familiya</p>
                        <p class="header__text">faoliyati</p>
                        <p class="header__text"><a href="not_connect_client.php">kurish</a></p>
                    </div>
                    <div class="info__intro">
                        <?php

                            $clients = mysqli_query($conn, "SELECT * FROM `clients` WHERE `status` = 'aloqaga chiqilmagan' AND `manager` = '$username'");
                            $clients = mysqli_fetch_all($clients);

                            foreach($clients as $client) {
                                echo "<div class='clients__info'>";
                                echo "<p class='info'>$client[1]</p>";
                                echo "<p class='info'>$client[2]</p>";
                                echo "<p class='info'>$client[5]</p>";
                                echo "<p class='info'><a href='client_page.php?id=$client[0]'>taxlil</a></p>";
                                echo "</div>";
                            }


                        ?>
                    </div>
                    
                    
                </div>
            </div>
            <div class="clients" id="box2">
                <h2 class="clients__title">kutilmoqda</h2>
                <div class="clients__box">
                    <div class="clients__header">
                        <p class="header__text">ism</p>
                        <p class="header__text">familiya</p>
                        <p class="header__text">faoliyati</p>
                        <p class="header__text"><a href="">kurish</a></p>
                    </div>
                    <div class="info__intro">
                        <?php

                        $clients = mysqli_query($conn, "SELECT * FROM `clients` WHERE `status` = 'kutilmoqda' AND `manager` = '$username'");
                        $clients = mysqli_fetch_all($clients);

                        foreach($clients as $client) {
                            echo "<div class='clients__info'>";
                            echo "<p class='info'>$client[1]</p>";
                            echo "<p class='info'>$client[2]</p>";
                            echo "<p class='info'>$client[5]</p>";
                            echo "<p class='info'><a href='client_page.php?id=$client[0]'>taxlil</a></p>";
                            echo "</div>";
                        }

                        ?>
                    </div>
                </div>                
            </div>
            <div class="clients" id="box3">
                <h2 class="clients__title">aloqada</h2>
                <div class="clients__box">
                    <div class="clients__header">
                        <p class="header__text">ism</p>
                        <p class="header__text">familiya</p>
                        <p class="header__text">faoliyati</p>
                        <p class="header__text"><a href="">kurish</a></p>
                    </div>

                    <div class="info__intro">
                        <?php

                            $clients = mysqli_query($conn, "SELECT * FROM `clients` WHERE `status` = 'aloqada' AND `manager` = '$username'");
                            $clients = mysqli_fetch_all($clients);

                            foreach($clients as $client) {
                                echo "<div class='clients__info'>";
                                echo "<p class='info'>$client[1]</p>";
                                echo "<p class='info'>$client[2]</p>";
                                echo "<p class='info'>$client[5]</p>";
                                echo "<p class='info'><a href='client_page.php?id=$client[0]'>taxlil</a></p>";
                                echo "</div>";
                            }

                        ?>
                    </div>
            </div>
            </div>
            <div class="clients" id="box4">
                <h2 class="clients__title mini">biriktirilgam mijozlar</h2>
                <div class="clients__box mini">
                    <div class="clients__header mini">
                        <p class="header__text">ism</p>
                        <p class="header__text">familiya</p>
                        <p class="header__text">faoliyati</p>
                        <p class="header__text"><a href="">kurish</a></p>
                    </div>
                    <div class="info__intro mini">
                        <?php

                            $clients = mysqli_query($conn, "SELECT * FROM `clients` WHERE `manager` = '$username'");
                            $clients = mysqli_fetch_all($clients);

                            foreach($clients as $client) {
                                echo "<div class='clients__info'>";
                                echo "<p class='info'>$client[1]</p>";
                                echo "<p class='info'>$client[2]</p>";
                                echo "<p class='info'>$client[5]</p>";
                                echo "<p class='info'><a href='client_page.php?id=$client[0]'>taxlil</a></p>";
                                echo "</div>";
                            }

                        ?>
                    </div>
                </div>
            </div>
            <div class="clients" id="box5">
                <h2 class="clients__title mini">barcha mijozlar</h2>
                <div class="clients__box mini">
                    <div class="clients__header mini">
                        <p class="header__text">ism</p>
                        <p class="header__text">familiya</p>
                        <p class="header__text">faoliyati</p>
                        <p class="header__text"><a href="">kurish</a></p>
                    </div>
                    <div class="info__intro mini">
                        <?php

                            $clients = mysqli_query($conn, "SELECT * FROM `clients`");
                            $clients = mysqli_fetch_all($clients);

                            foreach($clients as $client) {
                                echo "<div class='clients__info'>";
                                echo "<p class='info'>$client[1]</p>";
                                echo "<p class='info'>$client[2]</p>";
                                echo "<p class='info'>$client[5]</p>";
                                echo "<p class='info'><a href='client_page.php?id=$client[0]'>taxlil</a></p>";
                                echo "</div>";
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../js/menu.js"></script>
    
</body>
</html>