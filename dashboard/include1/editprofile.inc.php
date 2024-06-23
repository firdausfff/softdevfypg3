<?php

session_start();
$name_check  = $_SESSION['data'];
$admin_check =  $_SESSION['admin_id_check'];

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


    

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contactNumber'];
    $github = $_POST['githubName'];
    $linkedin = $_POST['linkedinProfile'];

   
    

$result = null;
$query = null;

$query = "UPDATE admin_profile  
          SET admin_address ='$address',admin_email='$email',
          admin_contact='$contact', admin_github='$github', admin_linkedin = '$linkedin'
          WHERE admin_ID ='$admin_check' ";

$result = $mysqli->query($query);
    
$result = null;
$query = null;
header("Location: ../dashMain.php");
die();
}
header("Location: ../adminedit.php");
die();
