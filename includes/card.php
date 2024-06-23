<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $fullname =$_POST["fullname"];
   $email = $_POST["email"];
   $address = $_POST["address"];
   $city =$_POST["city"];
   $zipcode = $_POST["zipcode"];
   $cardname = $_POST["cardname"];
   $cardnumber =$_POST["cardnumber"];
   $expmonth = $_POST["expmonth"];
   $expyear = $_POST["expyear"];
   $cvv = $_POST["cvv"];

   try {
    require_once "dbh.inc.php";

    $query = "INSERT INTO card_information (fullname, email, address,city,zipcode,
                            cardname,cardnumber,expmonth,expyear,cvv) VALUES
    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = $pdo->prepare($query);

    $stmt->execute([$fullname, $email, $address, $city, $zipcode, $cardname, $cardnumber, $expmonth, $expyear, $cvv]);

    $pdo = null;
    $stmt = null;

    header("Location: ../custMain.php");

    die();
   } catch (PDOException $e) {
    die("Query Failed: "  . $e->getMessage());
   }


}else {
    header("Location: ../index.html");
}