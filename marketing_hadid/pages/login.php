<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tmp.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    
    <form action="../system/login_inc.php" method="POST" class="login__form">
        <h2 class="title">kirish</h2>

        <p class="login__text">login</p>
        <input type="text" name="login" class="input" placeholder="login kiriting..." id="">
        <p class="login__text">parol</p>
        <input type="password" name="password" class="input" placeholder="parol kiriting..." id="">
        <br>
        <input type="submit" name="btn" class="btn" id="">
    </form>

</body>
</html>