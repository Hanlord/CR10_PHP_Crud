<?php
$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "be16_cr10_wehan_biglibrary";


$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$conn) {
    echo "error";
    exit;
}
