<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

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
    $query = "SELECT email, password FROM customer_acc WHERE email='$email' AND password='$pwd'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    $result = null;
    $nameget = "SELECT name FROM customer_acc WHERE email ='$email' AND password='$pwd'";
    $result = $mysqli->query($nameget);
    while($row = $result->fetch_assoc()) {
    $namereceive = $row["name"];    
    }

    //login success
    session_start();
    $_SESSION['name'] = $namereceive;
    $_SESSION['login_yes'] = 1;

    header("Location: ../custMain.php"); 
    die();
   }else{
    //login failed
    header("Location: ../account.html");
   
    die();
   }

   $mysqli->close();
}
?>