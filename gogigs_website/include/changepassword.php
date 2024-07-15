<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email=$_POST['email'];
    $oldpwd = $_POST['oldpassword'];
    $newpwd = $_POST['newpassword'];
    $confnewpwd = $_POST['confnewpassword'];

   
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

    $query = "SELECT email,password
              FROM customer_acc WHERE email='$email' 
              AND password='$oldpwd'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //verify success

    if($confnewpwd=$newpwd){
        header("Location: ../changepassword.html");
        die();
    }
        $result = null;
        $query = null;
        $query = "UPDATE  customer_acc 
                 SET password ='$newpwd'
                 WHERE email='$email' AND password='$oldpwd'";
    
        $result = $mysqli->query($query);
    
        $result = null;
        $query = null;
        header("Location: ../custMain.html");

    die();
   }else{
    //verify failed
    header("Location: ../account.html");
   
    die();
   }

   $mysqli->close();
}
?>