<?php
    session_start();

    if(!$_SESSION['user']) {
        header("Location: ../system/logaout.php");
    }

    $user_name = $_SESSION['user']['firstname'];

    require_once '../system/config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/clients_data.css">
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
        <div class="data__intro">
            <h2 class="data__title">clientlar ro'yhati</h2>
            <div class="data__box">
                <div class="data__header">
                    <p class="data__info__title">ism</p>
                    <p class="data__info__title">familiya</p>
                    <p class="data__info__title">telefon</p>
                    <p class="data__info__title">adres</p>
                    <p class="data__info__title">hobbi</p>
                    <p class="data__info__title">tugilgan kun</p>
                    <p class="data__info__title">holati</p>
                    <p class="data__info__title"></p>
                </div>
                <div class="data__inner">

                    <?php
                        $clients = mysqli_query($conn, "SELECT * FROM `clients` WHERE `rol` = 'client' AND `manager` = '$user_name'");
                        $clients = mysqli_fetch_all($clients);

                        foreach($clients as $client) {
                            echo "<div class='data__info__box'>";
                            echo "<p class='info'>$client[1]</p>";
                            echo "<p class='info'>$client[2]</p>";
                            echo "<p class='info'>+998$client[3]</p>";
                            echo "<p class='info'>$client[4]</p>";
                            echo "<p class='info'>$client[7]</p>";
                            echo "<p class='info'>$client[8]</p>";
                            echo "<p class='info'>$client[10]</p>";
                            echo "<p class='info'><a href='client_page.php?id=$client[0]' class='link'>taxlillash</a></p>";
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