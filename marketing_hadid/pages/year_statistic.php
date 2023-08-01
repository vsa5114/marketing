<?php

    session_start();

    if(!$_SESSION['user'] and $_SESSION['user']['position'] !== 'admin') {
        header("Location: ../system/logout.php");
    }

    require_once '../system/config.php';
    
    // январь

    $jan_start = date('Y-01-01');
    $jan_end = date('Y-01-31');

    $january = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$jan_start' AND '$jan_end'");
    $january = mysqli_fetch_assoc($january);
    $january = $january['kube_mounth'];
    $jan_style = $january/100;

    // февраль

    $feb_start = date('Y-02-01');
    $feb_end = date('Y-02-31');

    $february = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$feb_start' AND '$feb_end'");
    $february = mysqli_fetch_assoc($february);
    $february = $february['kube_mounth'];
    $feb_style = $february/100;

    // март

    $mar_start = date('Y-03-01');
    $mar_end = date('Y-03-31');

    $march = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$mar_start' AND '$mar_end'");
    $march = mysqli_fetch_assoc($march);
    $march = $march['kube_mounth'];
    $mar_style = $march/100;

    // апрель

    $apr_start = date('Y-04-01');
    $apr_end = date('Y-04-31');

    $aprel = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$apr_start' AND '$apr_end'");
    $aprel = mysqli_fetch_assoc($aprel);
    $aprel = $aprel['kube_mounth'];
    $apr_style = $aprel/100;

    // май

    $may_start = date('Y-05-01');
    $may_end = date('Y-05-31');

    $may = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$may_start' AND '$may_end'");
    $may = mysqli_fetch_assoc($may);
    $may = $may['kube_mounth'];
    $may_style = $may/100;

    // июнь

    $jun_start = date('Y-06-01');
    $jun_end = date('Y-06-31');

    $june = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$jun_start' AND '$jun_end'");
    $june = mysqli_fetch_assoc($june);
    $june = $june['kube_mounth'];
    $jun_style = $june/100;

    // июль

    $jul_start = date('Y-07-01');
    $jul_end = date('Y-07-31');

    $july = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$jul_start' AND '$jul_end'");
    $july = mysqli_fetch_assoc($july);
    $july = $july['kube_mounth'];
    $jul_style = $july/100;

    // август

    $avg_start = date('Y-08-01');
    $avg_end = date('Y-08-31');

    $avgust = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$avg_start' AND '$avg_end'");
    $avgust = mysqli_fetch_assoc($avgust);
    $avgust = $avgust['kube_mounth'];
    $avg_style = $avgust/100;

    // сентябрь

    $sep_start = date('Y-09-01');
    $sep_end = date('Y-09-31');

    $september = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$sep_start' AND '$sep_end'");
    $september = mysqli_fetch_assoc($september);
    $september = $september['kube_mounth'];
    $sep_style = $september/100;

    // октябрь

    $okt_start = date('Y-10-01');
    $okt_end = date('Y-10-31');

    $oktober = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$okt_start' AND '$okt_end'");
    $oktober = mysqli_fetch_assoc($oktober);
    $oktober = $oktober['kube_mounth'];
    $okt_style = $oktober/100;

    // ноябрь

    $nov_start = date('Y-11-01');
    $nov_end = date('Y-11-31');

    $november = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$nov_start' AND '$nov_end'");
    $november = mysqli_fetch_assoc($november);
    $november = $november['kube_mounth'];
    $nov_style = $november/100;

    // декабрь

    $dec_start = date('Y-12-01');
    $dec_end = date('Y-12-31');

    $december = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_mounth FROM `kube` WHERE `date` BETWEEN '$dec_start' AND '$dec_end'");
    $december = mysqli_fetch_assoc($december);
    $december = $december['kube_mounth'];
    $dec_style = $december/100;

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/statistic_page.css">
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
        <div class="stat__block">
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($january == 0) {
                                echo 0;
                            }else {
                                echo $january;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box jan"></div>
                </div>
                <h2 class="mounth__text">yanvar</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($february == 0) {
                                echo 0;
                            }else {
                                echo $february;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box feb"></div>
                </div>
                <h2 class="mounth__text">fevral</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($march == 0) {
                                echo 0;
                            }else {
                                echo $march;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box mar"></div>
                </div>
                <h2 class="mounth__text">mart</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($aprel == 0) {
                                echo 0;
                            }else {
                                echo $aprel;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box apr"></div>
                </div>
                <h2 class="mounth__text">aprel</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($may == 0) {
                                echo 0;
                            }else {
                                echo $may;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box may"></div>
                </div>
                <h2 class="mounth__text">may</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($june == 0) {
                                echo 0;
                            }else {
                                echo $june;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box jun"></div>
                </div>
                <h2 class="mounth__text">iyun</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($july == 0) {
                                echo 0;
                            }else {
                                echo $july;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box jul"></div>
                </div>
                <h2 class="mounth__text">iyul</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($avgust == 0) {
                                echo 0 ;
                            }else {
                                echo $avgust;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box avg"></div>
                </div>
                <h2 class="mounth__text">avgust</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($september == 0) {
                                echo 0;
                            }else {
                                echo $september;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box sep"></div>
                </div>
                <h2 class="mounth__text">sentabr</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($oktober == 0) {
                                echo 0;
                            }else {
                                echo $oktober;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box okt"></div>
                </div>
                <h2 class="mounth__text">oktabr</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($november == 0) {
                                echo 0;
                            }else {
                                echo $november;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box nov"></div>
                </div>
                <h2 class="mounth__text">noyabr</h2>
            </div>
            <div class="mounth__stat__box">
                <div class="mounth__inner__box">
                    <p class="stat__count">
                        <?php
                            if($december == 0) {
                                echo 0;
                            }else {
                                echo $december;
                            }
                            
                        ?>
                    </p>
                    <div class="stat__box dec"></div>
                </div>
                <h2 class="mounth__text">dekabr</h2>
            </div>
        </div>
        <div class="all__kuba">
            <h2>umumiy yillik sotilgan kuba</h2>
            <div class="kuba__count__box">
                <p class="count__text">
                    <?php

                        $year_start = date('Y-01-01');
                        $year_end = date('Y-12-31');

                        $all_kubas = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_year FROM `kube` WHERE `date` BETWEEN '$year_start' AND '$year_end'");
                        $all_kubas = mysqli_fetch_assoc($all_kubas);
                        $all_kubas = $all_kubas['kube_year'];

                        echo $all_kubas;

                    ?>
                </p>
            </div>
        </div>
    </div>


    <style>
        .stat__box.jan {
            height: <?= $jan_style . 'px' ?>;
        }
        .stat__box.feb{
            height: <?= $feb_style . 'px' ?>;
        }
        .stat__box.mar{
            height: <?= $mar_style . 'px' ?>;
        }
        .stat__box.apr{
            height: <?= $apr_style . 'px' ?>;
        }
        .stat__box.may{
            height: <?= $may_style . 'px' ?>;
        }
        .stat__box.jun{
            height: <?= $jun_style . 'px' ?>;
        }
        .stat__box.jul {
            height: <?= $jul_style . 'px' ?>;
        }
        .stat__box.avg {
            height: <?= $avg_style . 'px' ?>;
        }
        .stat__box.sep {
            height: <?= $sep_style . 'px' ?>;
        }
        .stat__box.okt {
            height: <?= $okt_style . 'px' ?>;
        }
        .stat__box.nov {
            height: <?= $nov_style . 'px' ?>;
        }
        .stat__box.dec {
            height: <?= $dec_style . 'px' ?>;
            
        }
    </style>





    <script src="../js/menu.js"></script>
</body>
</html>