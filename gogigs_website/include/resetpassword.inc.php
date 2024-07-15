<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd = $_POST['newpassword'];
   
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

    $query = "SELECT name,email 
              FROM customer_acc WHERE name='$name' 
              AND email='$email'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //verify success
        $result = null;
        $query = null;
        $query = "UPDATE  customer_acc 
                 SET password ='$pwd'
                 WHERE name='$name' AND email ='$email'";
    
        $result = $mysqli->query($query);
    
        $result = null;
        $query = null;
        header("Location: ../custMain.php");

    die();
   }else{
    //verify failed
    header("Location: ../account.html");
   
    die();
   }

   $mysqli->close();
}
?>