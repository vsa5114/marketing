<?php

    session_start();

    if(!$_SESSION['user']) {
        header("Location: ../system/logout.php");
    }

    $user_id = $_SESSION['user']['id'];
    require_once '../system/config.php';

    $now = date('Y-m-d');
    $year_start = date('Y-01-01');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/kuba_history.css">
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
        <div class="history__block">
            <h2 class="kuba__title">yillik sotilgan kubalar tarixi</h2>
            <h3 class="kuba__type">hujaliklar tarixi</h3>
            <div class="history__box">
                
                <div class="history__box__header">
                    <p class="history__title">ism</p>
                    <p class="history__title">familiya</p>
                    <p class="history__title">miqdor</p>
                    <p class="history__title">manzil</p>
                    <p class="history__title">mijoz turi</p>
                    <p class="history__title">sana</p>
                </div>
                
                <div class="history__inner__box">
                    
                    <?php
                        

                        $kuba_historyes = mysqli_query($conn, "SELECT * FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$year_start' AND '$now'");
                        $kuba_historyes = mysqli_fetch_all($kuba_historyes);
                        $kuba_historyes = array_reverse($kuba_historyes);
                        foreach($kuba_historyes as $kuba_history) {
                            $client_id = $kuba_history[2];
                            $client_name = mysqli_query($conn, "SELECT `firstname`, `secondname` FROM `clients` WHERE `id` = '$client_id'");
                            $client_name = mysqli_fetch_assoc($client_name);
                            $client_firstname = $client_name['firstname'];
                            $client_secondname = $client_name['secondname'];
                            

                            echo "<div class='history__inner__block'>";
                            echo "<div class='history__inner__text'>$client_firstname</div>";
                            echo "<div class='history__inner__text'>$client_secondname</div>";
                            echo "<div class='history__inner__text'>$kuba_history[5]</div>";
                            echo "<div class='history__inner__text'>$kuba_history[3]</div>";
                            echo "<div class='history__inner__text'>$kuba_history[4]</div>";
                            echo "<div class='history__inner__text'>$kuba_history[6]</div>";
                            echo "</div>";
                            
                        }

                    ?>
                </div>
        
                
                
            </div>
            <div class="kuba__summa">
                <?php

                    $kuba_summa_huj = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_day FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'hujalik' AND `date` BETWEEN '$year_start' AND '$now'");
                    $kuba_summa_huj = mysqli_fetch_assoc($kuba_summa_huj);
                    $kuba_summa_huj = $kuba_summa_huj['kube_day'];

                    if($kuba_summa_huj == 0) {
                        echo 0;
                    }else {
                        echo $kuba_summa_huj;
                    }
                    
                ?>
            </div>
            <p class="kuba__summa__text">
                hujaliklarga sotilgan kubalar miqdori
            </p>
            <h3 class="kuba__type">zavodlar tarixi</h3>
            <div class="history__box">

                <div class="history__box__header">
                    <p class="history__title">ism</p>
                    <p class="history__title">familiya</p>
                    <p class="history__title">miqdor</p>
                    <p class="history__title">manzil</p>
                    <p class="history__title">mijoz turi</p>
                    <p class="history__title">sana</p>
                </div>
                
                <div class="history__inner__box">
                    
                    <?php
                        

                        $kuba_historyes = mysqli_query($conn, "SELECT * FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$year_start' AND '$now'");
                        $kuba_historyes = mysqli_fetch_all($kuba_historyes);
                        $kuba_historyes = array_reverse($kuba_historyes);
                        foreach($kuba_historyes as $kuba_history) {
                            $client_id = $kuba_history[2];
                            $client_name = mysqli_query($conn, "SELECT `firstname`, `secondname` FROM `clients` WHERE `id` = '$client_id'");
                            $client_name = mysqli_fetch_assoc($client_name);
                            $client_firstname = $client_name['firstname'];
                            $client_secondname = $client_name['secondname'];
                            

                            echo "<div class='history__inner__block'>";
                            echo "<div class='history__inner__text'>$client_firstname</div>";
                            echo "<div class='history__inner__text'>$client_secondname</div>";
                            echo "<div class='history__inner__text'>$kuba_history[5]</div>";
                            echo "<div class='history__inner__text'>$kuba_history[3]</div>";
                            echo "<div class='history__inner__text'>$kuba_history[4]</div>";
                            echo "<div class='history__inner__text'>$kuba_history[6]</div>";
                            echo "</div>";
                            
                        }

                    ?>
                </div>
        
                
                
            </div>
            <div class="kuba__summa">
                <?php

                    $kuba_summa_zav = mysqli_query($conn, "SELECT SUM(kuba_count) AS kube_day FROM `kube` WHERE `user_id` = '$user_id' AND `type` = 'zavod' AND `date` BETWEEN '$year_start' AND '$now'");
                    $kuba_summa_zav = mysqli_fetch_assoc($kuba_summa_zav);
                    $kuba_summa_zav = $kuba_summa_zav['kube_day'];

                    if($kuba_summa_zav == 0) {
                        echo 0;
                    }else {
                        echo $kuba_summa_zav;
                    }
                    
                ?>
            </div>
            <p class="kuba__summa__text">
                zavodlarga sotilgan kubalar miqdori
            </p>
            
            

        </div>
        

    </div>


    <script src="../js/menu.js"></script>
</body>
</html>

