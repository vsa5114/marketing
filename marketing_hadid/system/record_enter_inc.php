<?php

session_start();

$file = $_FILES['record'];
// $client_id = $_POST['clientID'];


echo '<pre>';
print_r($file);
echo '</pre>';



// $record = 'records/' . time() . $_FILES['record']['name'];

// move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $record);


// header("Location: ../pages/client_page.php?id=$client_id")

