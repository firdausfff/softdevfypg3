<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "gogigs";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);


if ($conn->connect_error) {
    die ("Connection error" . $conn->connect_error);
}