<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $adminID=$_POST['adminID'];
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

    $query = "SELECT admin_ID,password
              FROM admin_acc WHERE admin_ID='$adminID' 
              AND password='$oldpwd'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //verify success

    if($confnewpwd=$newpwd){
        header("Location: ../adminedit.html");
        die();
    }
        $result = null;
        $query = null;
        $query = "UPDATE  admin_acc 
                 SET password ='$newpwd'
                 WHERE admin_ID='$adminID' AND password='$oldpwd'";
    
        $result = $mysqli->query($query);
    
        $result = null;
        $query = null;
        header("Location: ../dashMain.html");

    die();
   }else{
    //verify failed
    header("Location: ../adminedit.html");
   
    die();
   }

   $mysqli->close();
}
?>