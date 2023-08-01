<?php

    session_start();

    if($_SESSION['user']['position'] !== 'manager') {
        header("Location: ../system/logout.php");
    }

    $user_id = $_SESSION['user']['id'];

    require_once '../system/config.php';

    $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");
    $user = mysqli_fetch_assoc($user);

    $user_name = $user['firstname'];

    $clients = mysqli_query($conn, "SELECT * FROM `clients` WHERE `manager` = '$user_name'");
    $clients = mysqli_fetch_all($clients);

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/user_cabinet.css">
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
        <div class="wrapper">
            <div class="user__info__block">
                <p class="kube__title">foydalanuvchi ma'lumoti</p>
                <p class="user__info first">Ism: <span><?= $user['firstname'] ?></span></p>
                <p class="user__info">Familiya: <span><?= $user['secondname'] ?></span></p>
                <p class="user__info">Tel: <span>+998 <?= $user['telNumber'] ?></span></p>
                <p class="user__info">Adres: <span><?= $user['adress'] ?></span></p>
                <p class="user__info">Lavozim: <span><?= $user['position'] ?></span></p>
                <p class="user__info">Login: <span><?= $user['login'] ?></span></p>
                <p class="user__info">Parol: <span><?= $user['password'] ?></span></p>
            </div>
            <div class="user__statistic__block">
                <div class="mounth__kube">
                    <p class="kube__title">yillik sotilgan kuba</p>
                    <div class="mounth__kube__inner">
                        <div class="counts">
                            <div class="counts__inner">
                                <div class="kube__count">
                                    <?php
                                        $now = date('Y-m-d');
                                        $year_start = date('Y-01-01');

                                        $kuba_year_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_all FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$year_start' AND '$now'");
                                        $kuba_year_huj = mysqli_fetch_assoc($kuba_year_huj);
                                        $kuba_year_sum_huj = $kuba_year_huj['kube_all'];
                                        // print_r($kuba_year_sum);
                                        if($kuba_year_sum_huj == 0) {
                                            echo '0';
                                        }else {
                                            echo $kuba_year_sum_huj;
                                        }
                                    ?>
                                </div>
                                <p class="kuba__text">
                                    hujalik kubasi
                                </p>
                            </div>
                            <div class="counts__inner">
                                <div class="kube__count">
                                    <?php
                                        $now = date('Y-m-d');
                                        $year_start = date('Y-01-01');

                                        $kuba_year_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_all FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod'  AND `date` BETWEEN '$year_start' AND '$now'");
                                        $kuba_year_zav = mysqli_fetch_assoc($kuba_year_zav);
                                        $kuba_year_sum_zav = $kuba_year_zav['kube_all'];
                                        // print_r($kuba_year_sum);
                                        if($kuba_year_sum_zav == 0) {
                                            echo '0';
                                        }else {
                                            echo $kuba_year_sum_zav;
                                        }
                                    ?>
                                </div>
                                <p class="kuba__text">
                                    zavod kubasi
                                </p>
                            </div>
                            
                        </div>
                        <a href="year_kuba_history.php" class="mounth__story">kurish</a>
                    </div>
                </div>
                <div class="year__kube">
                    <p class="kube__title">oylik sotilgan kuba</p>
                    <div class="mounth__kube__inner">
                        <div class="counts">
                            <div class="counts__inner">
                                <div class="kube__count">
                                    <?php
                                        
                                        $new_date = date('Y-m-01');
                                        // echo $now;
                                        // echo $new_date;

                                        $kuba_mounth_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik'  AND   `date` BETWEEN '$new_date' AND '$now'");
                                        $kuba_mounth_huj = mysqli_fetch_assoc($kuba_mounth_huj);
                                        
                                        $kuba_mounth_sum_huj = $kuba_mounth_huj['kube_mounth'];
                                        if($kuba_mounth_sum_huj == 0) {
                                            echo '0';
                                        }else {
                                            echo $kuba_mounth_sum_huj;
                                        }
                                    ?>
                                </div>
                                <p class="kuba__text">
                                    hujalik kubasi
                                </p>
                            </div>
                            <div class="counts__inner">
                                <div class="kube__count">
                                    <?php
                                        
                                        $new_date = date('Y-m-01');
                                        // echo $now;
                                        // echo $new_date;

                                        $kuba_mounth_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND   `date` BETWEEN '$new_date' AND '$now'");
                                        $kuba_mounth_zav = mysqli_fetch_assoc($kuba_mounth_zav);
                                        
                                        $kuba_mounth_sum_zav = $kuba_mounth_zav['kube_mounth'];
                                        if($kuba_mounth_sum_zav == 0) {
                                            echo '0';
                                        }else {
                                            echo $kuba_mounth_sum_zav;
                                        }
                                    ?>
                                </div>
                                <p class="kuba__text">
                                    zavod kubasi
                                </p>
                            </div>
                        </div>
                        <a href="mounth_kuba_history.php" class="mounth__story">kurish</a>
                    </div>
                </div>
                <div class="day__kube">
                    <p class="kube__title">kunlik sotilgan kuba</p>
                    <div class="mounth__kube__inner">
                        <div class="kube__count day">
                            <?php
                                // echo $now;
                                // echo $new_date;

                                $kuba_day = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_day FROM `kube` WHERE `user_id` = '$user_id' AND `date` = '$now'");
                                $kuba_day = mysqli_fetch_assoc($kuba_day);
                                
                                $kuba_day_sum = $kuba_day['kube_day'];
                                if($kuba_day_sum == 0) {
                                    echo '0';
                                }else {
                                    echo $kuba_day_sum;
                                }
                                
                                


                            ?>
                        </div>
                        <a href="day_kuba_history.php" class="mounth__story">kurish</a>
                    </div>
                </div>
            </div>
            <div class="kube__enter">
                <form action="../system/kuba_enter_inc.php" method="POST">
                    <p class="kube__title">kuba kiritish</p>
                    <div class="enter__box">
                        <p class="enter__text">miqdor</p>
                        <input type="number" class="enter__inp" name="kube" id="" step="any" placeholder="miqdor...">
                        <p class="enter__text">klient</p>
                        <select name="client_id" class="enter__inp" id="">
                            <option value="">--tanlang--</option>
                            <?php
                                foreach($clients as $client) {
                                    echo "<option value='$client[0]'>$client[1]</option>";
                                }
                            ?>
                            
                        </select>
                        <p class="enter__text">manzil</p>
                        <input type="text" class="enter__inp" name="location" id="" placeholder="manzil...">
                        <p class="enter__text">manzil turi</p>
                        <select name="location_type" class="enter__inp" id="">
                            <option value="hujalik">hujalik</option>
                            <option value="zavod">zavod</option>
                        </select>
                        <p class="enter__text">sana</p>
                        <input type="date" name="date" class="enter__inp" id="">
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>" id="">
                        <input type="submit" class="enter__btn" value="kiritish" name="enter__btn" id="">

                    </div>
                </form>
            </div>
            
            <div class="bottom__first__block">
                
                <h2 class="bonus__title">foydalanuvchi bonusi</h2>
                <div class="bonus__wrapper">
                    <div class="hujalik__bonus">
                        <p class="bonus__text">hujalik bonus</p>

                        <?php
                            $house_kube_count = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$new_date' AND '$now'");
                            $house_kube_count = mysqli_fetch_assoc($house_kube_count);
                            // print_r($house_kube_count);
                            // $house_kube_count = ;

                            $house_bonus = $house_kube_count['kube_mounth'];
                            $house_bonus_sum = $house_bonus * 10000;
                            if($house_bonus == 0) {
                                echo '0';
                            }else {
                                echo "<p class='bonus'>$house_bonus_sum</p>";
                            }
                            

                        ?>
                    </div>
                    <div class="zavod__bonus">
                    
                        <p class="bonus__text">zavod bonus</p>

                        <?php
                            $zavod_kube_count = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$new_date' AND '$now'");
                            $zavod_kube_count = mysqli_fetch_assoc($zavod_kube_count);
                            // print_r($house_kube_count);
                            // $house_kube_count = ;

                            $zavod_bonus = $zavod_kube_count['kube_mounth'];
                            $zavod_bonus_sum = $zavod_bonus * 5000;
                            if($zavod_bonus == 0) {
                                echo '0';
                            }else {
                                echo "<p class='bonus'>$zavod_bonus_sum</p>";
                            }
                            

                        ?>
                    
                    </div>
                    <div class="all__bonus">
                        <p class="bonus__text">umumiy bonus</p>

                        <?php
                           
                            $all_bonus = $zavod_bonus_sum + $house_bonus_sum;
                            if($all_bonus == 0) {
                                echo '0';
                            }else {
                                echo "<p class='bonus'>$all_bonus</p>";
                            }
                            

                        ?>
                    </div>
                    <a href="bonus_history.php" class="bonus__history">tarix</a>
                </div>
                
            </div>
            <div class="bottom__second__block">
                <div class="history__age__box">
                    <p class="kube__title">Davr buyicha tarix</p>
                    <form action="history_kuba_age.php" method="post">
                        <input type="date" name="start" class="enter__inp" id="">
                        <input type="date" name="end" class="enter__inp">
                        <input type="submit" name="btn" class="enter__btn" value="kurish">

                    </form>
                    <!-- <a href="history_kuba_age.php" class="age__story">kurish</a> -->
                </div>
            </div>


        </div>
    </div>



    <script src="../js/menu.js"></script>
    
</body>
</html>