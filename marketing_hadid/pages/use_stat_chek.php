<?php

    session_start();

    if(!$_SESSION['user'] and $_SESSION['user']['position'] !== 'admin') {
        header("Location: ../system/logout.php");
    }

?>