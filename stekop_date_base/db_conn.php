<?php

$serwer= "localhost";
$user= "root";
$password = "";
$db_name = "stekop_logins";

$conn = mysqli_connect($serwer, $user, $password, $db_name);

if (mysqli_connect_error()) {
	echo "Connection failed!" .mysqli_connect_error();
    exit();
}