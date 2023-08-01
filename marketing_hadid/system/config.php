<?php


$conn = mysqli_connect("localhost", "root", "", "marketing");


if(!$conn) {
    die("Connecting ERROR!!!" . mysqli_connect_error());
}