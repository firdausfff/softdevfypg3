<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $fullname =$_POST["fullname"];
   $pwd = $_POST["pwd"];
   $email = $_POST["email"];


   try {
    require_once "dbh.inc.php";

    $query = "INSERT INTO customer_account (fullname, pwd, email) VALUES
    (?, ?, ?);";

    $stmt = $pdo->prepare($query);

    $stmt->execute([$fullname, $pwd, $email]);

    $pdo = null;
    $stmt = null;

    header("Location: ../account.html");

    die();
   } catch (PDOException $e) {
    die("Query Failed: "  . $e->getMessage());
   }


}else {
    header("Location: ../account.html");
}