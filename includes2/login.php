<?php

$is_invalid= false;

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__. ".../database.php";

    $sql = sprintf("SELECT * FROM customer_acc
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = ($result->fetch_assoc());

   if ($user) {
      
    if (password_verify($_POST["pwd"], $user["password"])){

        
       die("Login successful");
       header("Location: .../custMain.php");
    }
   }
   $is_invalid =true;
}

?>

