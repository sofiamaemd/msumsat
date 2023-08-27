<?php

$dbHost = 'localhost';
$dbName = "login_register";
$dbUsername = 'root';
$dbPassword = "";
$db= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
if (!$db) {
    die("Something went wrong;");
}

?>