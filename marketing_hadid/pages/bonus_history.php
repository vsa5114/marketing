<?php

    session_start();

    if(!$_SESSION['user']) {
        header("Location: ../system/logout.php");
    }

    require_once '../system/config.php';

    $user_id = $_SESSION['user']['id'];


    $jan_start = date('Y-01-01');
    $jan_end = date('Y-01-31');

    $january_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$jan_start' AND '$jan_end'");
    $january_huj = mysqli_fetch_assoc($january_huj);
    $january_huj = $january_huj['kube_mounth'];
    $jan_huj_bonus = $january_huj*10000;

    $january_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$jan_start' AND '$jan_end'");
    $january_zav = mysqli_fetch_assoc($january_zav);
    $january_zav = $january_zav['kube_mounth'];
    $jan_zav_bonus = $january_zav*5000;

    // февраль

    $feb_start = date('Y-02-01');
    $feb_end = date('Y-02-31');

    $february_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$feb_start' AND '$feb_end'");
    $february_huj = mysqli_fetch_assoc($february_huj);
    $february_huj = $february_huj['kube_mounth'];
    $feb_huj_bonus = $february_huj*10000;

    $february_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$feb_start' AND '$feb_end'");
    $february_zav = mysqli_fetch_assoc($february_zav);
    $february_zav = $february_zav['kube_mounth'];
    $feb_zav_bonus = $february_zav*5000;

    // март

    $mar_start = date('Y-03-01');
    $mar_end = date('Y-03-31');

    $march_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$mar_start' AND '$mar_end'");
    $march_huj = mysqli_fetch_assoc($march_huj);
    $march_huj = $march_huj['kube_mounth'];
    $mar_huj_bonus = $march_huj*10000;

    $march_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$mar_start' AND '$mar_end'");
    $march_zav = mysqli_fetch_assoc($march_zav);
    $march_zav = $march_zav['kube_mounth'];
    $mar_zav_bonus = $march_zav*5000;

    // апрель

    $apr_start = date('Y-04-01');
    $apr_end = date('Y-04-31');

    $aprel_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$apr_start' AND '$apr_end'");
    $aprel_huj = mysqli_fetch_assoc($aprel_huj);
    $aprel_huj = $aprel_huj['kube_mounth'];
    $apr_huj_bonus = $aprel_huj*10000;

    $aprel_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$apr_start' AND '$apr_end'");
    $aprel_zav = mysqli_fetch_assoc($aprel_zav);
    $aprel_zav = $aprel_zav['kube_mounth'];
    $apr_zav_bonus = $aprel_zav*5000;

    // май

    $may_start = date('Y-05-01');
    $may_end = date('Y-05-31');

    $may_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$may_start' AND '$may_end'");
    $may_huj = mysqli_fetch_assoc($may_huj);
    $may_huj = $may_huj['kube_mounth'];
    $may_huj_bonus = $may_huj*10000;

    $may_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$may_start' AND '$may_end'");
    $may_zav = mysqli_fetch_assoc($may_zav);
    $may_zav = $may_zav['kube_mounth'];
    $may_zav_bonus = $may_zav*5000;

    // июнь

    $jun_start = date('Y-06-01');
    $jun_end = date('Y-06-31');

    $june_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$jun_start' AND '$jun_end'");
    $june_huj = mysqli_fetch_assoc($june_huj);
    $june_huj = $june_huj['kube_mounth'];
    $jun_huj_bonus = $june_huj*10000;

    $june_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$jun_start' AND '$jun_end'");
    $june_zav = mysqli_fetch_assoc($june_zav);
    $june_zav = $june_zav['kube_mounth'];
    $jun_zav_bonus = $june_zav*5000;

    // июль

    $jul_start = date('Y-07-01');
    $jul_end = date('Y-07-31');

    $july_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$jul_start' AND '$jul_end'");
    $july_huj = mysqli_fetch_assoc($july_huj);
    $july_huj = $july_huj['kube_mounth'];
    $jul_huj_bonus = $july_huj*10000;

    $july_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$jul_start' AND '$jul_end'");
    $july_zav = mysqli_fetch_assoc($july_zav);
    $july_zav = $july_zav['kube_mounth'];
    $jul_zav_bonus = $july_zav*5000;

    // август

    $avg_start = date('Y-08-01');
    $avg_end = date('Y-08-31');

    $avgust_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$avg_start' AND '$avg_end'");
    $avgust_huj = mysqli_fetch_assoc($avgust_huj);
    $avgust_huj = $avgust_huj['kube_mounth'];
    $avg_huj_bonus = $avgust_huj*10000;

    $avgust_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$avg_start' AND '$avg_end'");
    $avgust_zav = mysqli_fetch_assoc($avgust_zav);
    $avgust_zav = $avgust_zav['kube_mounth'];
    $avg_zav_bonus = $avgust_zav*5000;

    // сентябрь

    $sep_start = date('Y-09-01');
    $sep_end = date('Y-09-31');

    $september_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$sep_start' AND '$sep_end'");
    $september_huj = mysqli_fetch_assoc($september_huj);
    $september_huj = $september_huj['kube_mounth'];
    $sep_huj_bonus = $september_huj*10000;

    $september_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$sep_start' AND '$sep_end'");
    $september_zav = mysqli_fetch_assoc($september_zav);
    $september_zav = $september_zav['kube_mounth'];
    $sep_zav_bonus = $september_zav*5000;

    // октябрь

    $okt_start = date('Y-10-01');
    $okt_end = date('Y-10-31');

    $oktober_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$okt_start' AND '$okt_end'");
    $oktober_huj = mysqli_fetch_assoc($oktober_huj);
    $oktober_huj = $oktober_huj['kube_mounth'];
    $okt_huj_bonus = $oktober_huj*10000;

    $oktober_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$okt_start' AND '$okt_end'");
    $oktober_zav = mysqli_fetch_assoc($oktober_zav);
    $oktober_zav = $oktober_zav['kube_mounth'];
    $okt_zav_bonus = $oktober_zav*5000;

    // ноябрь

    $nov_start = date('Y-11-01');
    $nov_end = date('Y-11-31');

    $november_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$nov_start' AND '$nov_end'");
    $november_huj = mysqli_fetch_assoc($november_huj);
    $november_huj = $november_huj['kube_mounth'];
    $nov_huj_bonus = $november_huj*10000;

    $november_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$nov_start' AND '$nov_end'");
    $november_zav = mysqli_fetch_assoc($november_zav);
    $november_zav = $november_zav['kube_mounth'];
    $nov_zav_bonus = $november_zav*5000;

    // декабрь

    $dec_start = date('Y-12-01');
    $dec_end = date('Y-12-31');

    $december_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$dec_start' AND '$dec_end'");
    $december_huj = mysqli_fetch_assoc($december_huj);
    $december_huj = $december_huj['kube_mounth'];
    $dec_huj_bonus = $december_huj*10000;

    $december_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$dec_start' AND '$dec_end'");
    $december_zav = mysqli_fetch_assoc($december_zav);
    $december_zav = $december_zav['kube_mounth'];
    $dec_zav_bonus = $december_zav*5000;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/bonus_history.css">
    <title>Document</title>
</head>
<body>

    <header class="menu__bar">
        <div class="menu__bar__inner">
            <?php
                if($_SESSION['user']['position'] == 'manager') {
                    include("../system/manager_menu.php");
                } elseif($_SESSION['user']['position'] == 'admin') {
                    include("../system/admin_menu.php");
                }
                
            ?>
        </div>
        <div class="burger__menu">menu</div>
    </header>

    <div class="container">
        <h2 class="title">bonuslar tarixi</h2>
        <div class="history__box">
            <div class="history__box__header">
                <p class="header__text">oy</p>
                <p class="header__text">hujalik kuba</p>
                <p class="header__text">hujalik bonus</p>
                <p class="header__text">zavod kuba</p>
                <p class="header__text">zavod bonus</p>
                <p class="header__text">umumiy kuba</p>
                <p class="header__text">umumiy bonus</p>
            </div>
            <div class="history__box__inner">
                <!-- yanvar -->
                <div class="inner__block">
                    <p class="inner__text">Yanvar</p>
                    <p class="inner__text">
                        <?php 
                        if($january_huj == 0) {
                            echo 0;
                        }else {
                            echo $january_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $jan_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($january_zav == 0) {
                            echo 0;
                        }else {
                            echo $january_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $jan_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $jan_all = $january_huj + $january_zav;
                            echo $jan_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $jan_all_bon = $jan_huj_bonus + $jan_zav_bonus;
                            echo $jan_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- fevral -->
                <div class="inner__block">
                    <p class="inner__text">Fevral</p>
                    <p class="inner__text">
                        <?php 
                        if($february_huj == 0) {
                            echo 0;
                        }else {
                            echo $february_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $feb_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($february_zav == 0) {
                            echo 0;
                        }else {
                            echo $february_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $feb_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $feb_all = $february_huj + $february_zav;
                            echo $feb_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $feb_all_bon = $feb_huj_bonus + $feb_zav_bonus;
                            echo $feb_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- mart -->
                <div class="inner__block">
                    <p class="inner__text">Mart</p>
                    <p class="inner__text">
                        <?php 
                        if($march_huj == 0) {
                            echo 0;
                        }else {
                            echo $march_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $mar_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($march_zav == 0) {
                            echo 0;
                        }else {
                            echo $march_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $mar_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $mar_all = $march_huj + $march_zav;
                            echo $mar_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $mar_all_bon = $mar_huj_bonus + $mar_zav_bonus;
                            echo $mar_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- aprel -->
                <div class="inner__block">
                    <p class="inner__text">Aprel</p>
                    <p class="inner__text">
                        <?php 
                        if($aprel_huj == 0) {
                            echo 0;
                        }else {
                            echo $aprel_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $apr_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($aprel_zav == 0) {
                            echo 0;
                        }else {
                            echo $aprel_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $apr_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $apr_all = $aprel_huj + $aprel_zav;
                            echo $apr_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $apr_all_bon = $apr_huj_bonus + $apr_zav_bonus;
                            echo $apr_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- may -->
                <div class="inner__block">
                    <p class="inner__text">May</p>
                    <p class="inner__text">
                        <?php 
                        if($may_huj == 0) {
                            echo 0;
                        }else {
                            echo $may_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $may_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($may_zav == 0) {
                            echo 0;
                        }else {
                            echo $may_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $may_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $may_all = $may_huj + $may_zav;
                            echo $may_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $may_all_bon = $may_huj_bonus + $may_zav_bonus;
                            echo $may_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- iyun -->
                <div class="inner__block">
                    <p class="inner__text">Iyun</p>
                    <p class="inner__text">
                        <?php 
                        if($june_huj == 0) {
                            echo 0;
                        }else {
                            echo $june_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $jun_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($june_zav == 0) {
                            echo 0;
                        }else {
                            echo $june_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $jun_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $june_all = $june_huj + $june_zav;
                            echo $june_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $june_all_bon = $jun_huj_bonus + $jun_zav_bonus;
                            echo $june_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- iyul -->
                <div class="inner__block">
                    <p class="inner__text">Iyul</p>
                    <p class="inner__text">
                        <?php 
                        if($july_huj == 0) {
                            echo 0;
                        }else {
                            echo $july_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $jul_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($july_zav == 0) {
                            echo 0;
                        }else {
                            echo $july_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $jul_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $july_all = $july_huj + $july_zav;
                            echo $july_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $july_all_bon = $jul_huj_bonus + $jul_zav_bonus;
                            echo $july_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- avgust -->
                <div class="inner__block">
                    <p class="inner__text">Avgust</p>
                    <p class="inner__text">
                        <?php 
                        if($avgust_huj == 0) {
                            echo 0;
                        }else {
                            echo $avgust_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $avg_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($avgust_zav == 0) {
                            echo 0;
                        }else {
                            echo $avgust_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $avg_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $avg_all = $avgust_huj + $avgust_zav;
                            echo $avg_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $avg_all_bon = $avg_huj_bonus + $avg_zav_bonus;
                            echo $avg_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- setyabr -->
                <div class="inner__block">
                    <p class="inner__text">Sentyabr</p>
                    <p class="inner__text">
                        <?php 
                        if($september_huj == 0) {
                            echo 0;
                        }else {
                            echo $september_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $sep_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($september_zav == 0) {
                            echo 0;
                        }else {
                            echo $september_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $sep_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $sep_all = $september_huj + $september_zav;
                            echo $sep_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $sep_all_bon = $sep_huj_bonus + $sep_zav_bonus;
                            echo $sep_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- oktyabr -->
                <div class="inner__block">
                    <p class="inner__text">Oktyabr</p>
                    <p class="inner__text">
                        <?php 
                        if($oktober_huj == 0) {
                            echo 0;
                        }else {
                            echo $oktober_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $okt_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($oktober_zav == 0) {
                            echo 0;
                        }else {
                            echo $oktober_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $okt_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $okt_all = $oktober_huj + $oktober_zav;
                            echo $okt_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $okt_all_bon = $okt_huj_bonus + $okt_zav_bonus;
                            echo $okt_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- noyabr -->
                <div class="inner__block">
                    <p class="inner__text">Noyabr</p>
                    <p class="inner__text">
                        <?php 
                        if($november_huj == 0) {
                            echo 0;
                        }else {
                            echo $november_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $nov_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($november_zav == 0) {
                            echo 0;
                        }else {
                            echo $november_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $nov_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $nov_all = $november_huj + $november_zav;
                            echo $nov_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $nov_all_bon = $nov_huj_bonus + $nov_zav_bonus;
                            echo $nov_all_bon . ' sum';
                        ?>
                    </p>
                </div>
                <!-- dekabr -->
                <div class="inner__block">
                    <p class="inner__text">Dekabr</p>
                    <p class="inner__text">
                        <?php 
                        if($december_huj == 0) {
                            echo 0;
                        }else {
                            echo $december_huj;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $dec_huj_bonus ?></p>
                    <p class="inner__text">
                        <?php 
                        if($december_zav == 0) {
                            echo 0;
                        }else {
                            echo $december_zav;
                        }
                        ?>
                    </p>
                    <p class="inner__text"><?= $dec_zav_bonus ?></p>
                    <p class="inner__text">
                        <?php
                            $dec_all = $december_huj + $december_zav;
                            echo $dec_all;
                        ?>
                    </p>
                    <p class="inner__text">
                        <?php
                            $dec_all_bon = $dec_huj_bonus + $dec_zav_bonus;
                            echo $dec_all_bon . ' sum';
                        ?>
                    </p>
                </div>
            </div>
        </div>




    </div>



    
</body>
</html>