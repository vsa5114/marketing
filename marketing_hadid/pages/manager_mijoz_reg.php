<?php
    session_start();

    if($_SESSION['user']['position'] !== 'manager') {
        header("location: ../system/logout.php");
    }

    $user_name = $_SESSION['user']['firstname'];

    echo $user_name;

    require_once '../system/config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/mijoz_reg.css">
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
        <form action="../system/mijoz_reg_inc.php" method="post" enctype="multipart/form-data">
            <div class="reg__flex">
                <div class="reg__box">
                    <p class="reg__text">ism</p>
                    <input type="text" class="input" name="firstname" id="">
                    <p class="reg__text">familiya</p>
                    <input type="text" class="input" name="secondname" id="">
                    <!-- <p class="reg__text">otasini ismi</p>
                    <input type="text" class="input" name="lastname" id=""> -->
                    <p class="reg__text">tel raqam</p>
                    <input type="number" class="input" name="tel" id="">
                    <p class="reg__text">adres</p>
                    <input type="text" class="input" name="adress" id="">
                    <p class="reg__text">faoliyati</p>
                    <select name="rol" id="" class="input">
                        <option id="input" value="client">client</option>
                        <option id="input" value="prorab">prorab</option>
                        <option id="input" value="usta">usta</option>
                        <option id="input" value="firma">firma</option>
                    </select>
                    <p class="reg__text">ustasi</p>
                    <input type="text" class="input" name="adress" id="">
                </div>

                <div class="reg__box">
                    <p class="reg__text">hobbi</p>
                    <input type="text" class="input" name="hobbi" id="">
                    <p class="reg__text">rasm</p>
                    <input type="file" class="input" name="avatar" id="">
                    <p class="reg__text">tug'ilgan sana</p>
                    <input type="date" class="input" name="date" id="">
                    <p class="reg__text">ma'sul shaxs</p>
                    <select name="manager" id="" class="input">
                        
                        <?php
                            
                            // $managers = mysqli_query($conn, "SELECT * FROM `users` WHERE `position` = 'manager'");
                            // $manager_count = mysqli_num_rows($managers);
                            // $managers = mysqli_fetch_all($managers);

                            // foreach($managers as $manager) {
                            //     echo "<option id='input' value='$manager[1]'>$manager[1]</option>";
                            // }

                            echo "<option id='input' value='$user_name'>$user_name</option>"

                        ?>
                        
                        
                    </select>
                    <p class="reg__text">status</p>
                    <select name="status" id="" class="input">
                        <option id="input" value="aloqada">aloqada</option>
                        <option id="input" value="kutilmoqda">kutilmoqda</option>
                        <option id="input" value="aloqaga chiqilmagan">aloqaga chiqilmagan</option>
                    </select>
                    <input type="submit" name="" class="btn" id="">
                   
                </div>
            </div>
        </form>
    </div>



    <script src="../js/menu.js"></script>
</body>
</html>

