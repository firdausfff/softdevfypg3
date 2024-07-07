<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $oldpass=$_POST['oldpassword'];
    $newpass=$_POST['newpassword'];
    $confpass = $_POST['confirmpassword'];
   
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

    $query = "SELECT password
              FROM customer_acc WHERE password='$oldpass'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //verify success
    if(!$newpass=$confpass){
        header("Location: ../main.html");
    }

        $result = null;
        $query = null;
        $query = "UPDATE  customer_acc 
                 SET password ='$newpass'
                 WHERE password='$oldpass'";
    
        $result = $mysqli->query($query);
    
        $result = null;
        $query = null;
        header("Location: ../custMain.html");

    die();
   }else{
    //verify failed
    header("Location: ../changepassword.html");
   
    die();
   }

   $mysqli->close();
}
?>