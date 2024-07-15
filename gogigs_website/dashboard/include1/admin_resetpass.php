<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $admin_ID=$_POST['adminid'];
    $name=$_POST['name'];
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

    $query = "SELECT admin_ID,name
              FROM admin_acc WHERE admin_ID='$admin_ID' 
              AND name='$name'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //verify success
        $result = null;
        $query = null;
        $query = "UPDATE  admin_acc 
                 SET password ='$pwd'
                 WHERE admin_ID='$admin_ID' AND name='$name'";
    
        $result = $mysqli->query($query);
    
        $result = null;
        $query = null;
        header("Location: ../dashMain.php");

    die();
   }else{
    //verify failed
    header("Location: ../resetpassword.html");
   
    die();
   }

   $mysqli->close();
}
?>