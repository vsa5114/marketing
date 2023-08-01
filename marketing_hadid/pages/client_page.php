<?php
    session_start();

    if(!$_SESSION) {
        header("Location: ../system/logout.php");
    }

    $clients_id = $_GET['id'];

    require_once '../system/config.php';


    $client = mysqli_query($conn, "SELECT * FROM `clients` WHERE `id` = '$clients_id'");
    $client = mysqli_fetch_assoc($client);

    $client_id = $client['id'];

    $client_avatar = '../' . $client['avatar'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/client_page.css">
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
        <div class="top__block">
            <div class="avatar__box">
                <img class="client__avatar" src="<?= $client_avatar ?>" alt="">
            </div>
            <div class="information__box">
                <p class="client__title">mijoz haqida ma'lumot</p>
                <div class="client__info">
                    <div class="client__info__inner">
                        <p class="client__info__text">Ism: <span><?= $client['firstname'] ?></span></p>
                        <p class="client__info__text">familiya: <span><?= $client['secondname'] ?></span></p>
                        
                        <p class="client__info__text">adres: <span><?= $client['adress'] ?></span></p>
                        <p class="client__info__text">tel: <span>+998<?= $client['tel'] ?></span></p>
                        <p class="client__info__text">faoliyati: <span><?= $client['rol'] ?></span></p>
                        <p class="client__info__text">hobbi: <span><?= $client['hobbi'] ?></span></p>
                        <p class="client__info__text">ustasi: <span><?= $client['usta'] ?></span></p>
                        <p class="client__info__text">tug'ilgan kun: <span><?= $client['birthday'] ?></span></p>
                        <p class="client__info__text">biriktirilgan shaxs: <span><?= $client['manager'] ?></span></p>
                    </div>
                    <div class="client__info__inner">
                        <div class="status__inner">
                            <p class="client__info__text">holat: <span><?= $client['status'] ?></span></p>
                            <div class="status <?= $client['status'] ?>"></div>
                        </div>
                        <p class="client__info__text">olingan kuba: <span class="kuba_count">
                            <?php
                                

                                $kubas = mysqli_query($conn, "SELECT SUM(kuba_count) AS kubas FROM `kube` WHERE `client_id` = '$client_id'");
                                $kubas = mysqli_fetch_assoc($kubas);

                                // if()
                                
                                echo $kubas['kubas'];
                                

                            ?>
                        </span></p>
                    </div>
                
                
                </div>


            </div>
            <div class="coments__box">

                <p class="client__title">
                    komentariylar
                </p>
                <div class="coment__box__view">
                    
                        <?php
                            $coments = mysqli_query($conn, "SELECT * FROM `coments` WHERE `client_id`='$clients_id'");
                            $coments = mysqli_fetch_all($coments);
                            $coments = array_reverse($coments);
                            // echo "<pre>";
                            // print_r($coments);
                            // echo "</pre>";
                            
                            

                            foreach($coments as $coment) {
                                echo "<div class='view__inner'>";
                                echo "<p class='coment'>$coment[2]</p>";
                                echo "<p class=''>$coment[3]</p>";
                                echo "</div>";
                            }
                            
                        ?>
                    
                   

                </div>
                

                
            </div>
        </div>

        <div class="bottom__block">
            <div class="client__music">
                <p class="client__title">
                    aloqa yozuvi
                </p>
            </div>
            
            <div class="coment__enter">
                
                <p class="client__title">komentariy qoldirish</p>
                <form action="../system/coment_enter_inc.php" method="POST" class="coment__form">
                    <?php

                        if($_SESSION['user']['firstname'] === $client['manager'] or $_SESSION['user']['position'] === 'admin') {
                            echo '<div class="coment__enter__inner">';
                            echo ' <textarea name="coment" id="" class="coment__text" cols="30" rows="10"></textarea>';
                            echo '<input type="submit" class="coment__btn" name="btn" id="" value="Izoh qoldirish">';
                            echo "<input type='hidden' name='clientID' value='$clients_id'>";
                            echo '</div>';
                        }else {
                            echo 'sizning mijozingiz emas';
                        }

                    ?>
                </form>
                <p class="client__title">
                    aloqa yozuvini kiritish
                </p>
                <form action="../system/record_enter_inc.php" method="POST" class="record__form" enctype="multipart/form-data">
                    <?php
                        if($_SESSION['user']['firstname'] === $client['manager'] or $_SESSION['user']['position'] === 'admin') {
                            echo '<div class="records__enter__box">';
                            echo "<input type='hidden' name='MAX_FILE_SIZE' value='9000000'>";
                            echo "<input type='hidden' name='clientID' value='$clients_id'>";
                            echo '<input type="file" class="" name="record" id="">';
                            echo '<input type="submit" class="record__btn" name="btn" id="" value="kiritish">';
                            echo '</div>';
                        }else {
                            echo 'sizning mijozingiz emas';
                        }
                    ?>
                </form>
                
                
            </div>
            <div class="client__update">
                <form action="../system/client_status_update_inc.php" method="POST" class="update__form">
                    <p class="client__title">
                        holatni o'zgartirish
                    </p>

                    <?php

                        if($_SESSION['user']['firstname'] === $client['manager'] or $_SESSION['user']['position'] === 'admin') {
                            
                            echo "<select name='status' class='update__status'>";
                            echo "<option class='status' value='aloqaga chiqilmagan'>aloqaga chiqilmagan</option>";
                            echo "<option class='status' value='kutilmoqda'>kutilmoqda</option>";
                            echo "<option class='status' value='aloqada'>aloqada</option>";
                            echo "</select>";

                            echo "<input type='submit' name='btn' class='update__btn' value='uzgartirish'>";
                            echo "<input type='hidden' name='clientID' value='$clients_id'>";
                        }else {
                            echo 'sizning mijozingiz emas';
                        }

                    ?>
                    <!-- <input type="number" class="date__count" name="" id=""> --> 

                    <p class="client__title">
                        ma'lumotni o'zgartirish
                    </p>    
                    <?php
                        if($_SESSION['user']['firstname'] === $client['manager'] or $_SESSION['user']['position'] === 'admin') {
                            echo "<a href='client_update_page.php?id=$client_id' class='update__btn2'>uzgartirish</a>";
                        } else {
                            echo "sizning mijozingiz emas";
                        }

                    ?>
                    
                </form>
                

                
            </div>
        </div>

    </div>






    <script src="../js/click.js"></script>
    <script src="../js/menu.js"></script>
</body>
</html>