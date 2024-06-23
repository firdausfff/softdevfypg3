<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $admin_ID = $_POST['admin_ID'];
    $pwd = $_POST['password'];

$host = "localhost";
$dbname = "gogigs";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

if ($mysqli->connect_error) {
    die ("Connection error" . $mysqli->connect_error);
}
    $query = "SELECT admin_ID, password FROM admin_acc WHERE admin_ID ='$admin_ID' AND password='$pwd'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //login success
    $result = null;
    $infoget = "SELECT admin_ID,name FROM admin_acc WHERE admin_ID ='$admin_ID' AND password='$pwd'";
    $result = $mysqli->query($infoget);
    while($row = $result->fetch_assoc()) {
    $adminreceive = $row["admin_ID"];
    $namereceive = $row["name"];    
    }
    session_start();
    $_SESSION['admin_id_check'] = $adminreceive;
    $_SESSION['data'] = $namereceive;

    header("Location: ../dashMain.php");
    die();
   }else{
    //login failed
    header("Location: ../adminlogin.html");
   
    die();
   }

   $mysqli->close();
}
?>