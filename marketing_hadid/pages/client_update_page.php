<?php

    session_start();

    if(!$_SESSION) {
        header("Location: ../system/logout.php");
    }

    require_once '../system/config.php';



    $client_id = $_GET['id'];
    
    $client = mysqli_query($conn, "SELECT * FROM `clients` WHERE `id` = '$client_id'");
    $client = mysqli_fetch_assoc($client);

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/client_update_page.css">
    <title>Document</title>
</head>
<body>

    <header class="menu__bar">
        <div class="menu__bar__inner">
            <?php

                if($_SESSION['user']['position'] === 'manager') {
                    include("../system/manager_menu.php");
                }elseif($_SESSION['user']['position'] === 'admin') {
                    include("../system/admin_menu.php");
                }

                
            ?>
            
        </div>
        <div class="burger__menu">menu</div>
    </header>


    <div class="container">
        <h2 class="update__title">
            mijoz haqida malumotni uzgartirish
        </h2>
        <form class="update__form" action="../system/client_update_inc.php" method="post">
            <div class="update__box">
                <p class="update__text">ism</p>
                <input type="text" name="firstname" class="update__inp" value="<?= $client['firstname'] ?>">
                <p class="update__text">familiya</p>
                <input type="text" name="secondname" class="update__inp" value="<?= $client['secondname'] ?>">
                <p class="update__text">adres</p>
                <input type="text" name="adress" class="update__inp" value="<?= $client['adress'] ?>">
                <p class="update__text">tel</p>
                <input type="text" name="tel" class="update__inp" value="<?= $client['tel'] ?>">
                <p class="update__text">faoliyati</p>
                
                <select name="rol" class="update__inp">
                    <option value="client">client</option>
                    <option value="prorab">prorab</option>
                    <option value="usta">usta</option>
                    <option value="firma">firma</option>
                </select>
            </div>
            <div class="update__box">
                <p class="update__text">hobbi</p>
                <input type="text" name="hobbi" class="update__inp" value="<?= $client['hobbi'] ?>">
                <p class="update__text">usta</p>
                <input type="text" name="usta" class="update__inp" value="<?= $client['usta'] ?>">
                <p class="update__text">tug'ilgan kuni</p>
                <input type="date" name="birthday" class="update__inp" value="<?= $client['birthday'] ?>">
                <p class="update__text">ma'sul shaxs</p>
                <select name="manager" class="update__inp">
                    <?php
                        $managers = mysqli_query($conn, "SELECT `firstname` FROM `users` WHERE `position` = 'manager'");
                        $managers = mysqli_fetch_all($managers);

                        foreach($managers as $manager) {
                            echo "<option value='$manager[0]'>$manager[0]</option>";
                        }
                        // echo '<pre>';
                        
                    ?>
                    
                </select>
                <br>
                <input type="hidden" name="id" id="" value="<?= $client_id ?>">
                <input type="submit" name="btn" class="update__btn">
            </div>
        </form>
    </div>




    

    <script src="../js/menu.js"></script>
</body>
</html>