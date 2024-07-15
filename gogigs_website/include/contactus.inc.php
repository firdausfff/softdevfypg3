<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    try {

    require_once 'dbh.inc.php';
    require_once 'contactus_contr.inc.php';
    require_once 'contactus_model.inc.php';


        create_feedback( $pdo,  $name,  $email,  $subject, $message);

        header("Location: ../index.php");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
        header ("Location: ../index.php");
        die();
}