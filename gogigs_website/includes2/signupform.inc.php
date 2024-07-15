<?php


if (strlen($_POST["pwd"]) <8) {
    die("Password must be atleast 8 characters");
}


if ( ! preg_match("/[a-z]/i", $_POST["pwd"])){
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/i", $_POST["pwd"])){
    die("Password must contain at least one number");
}

$mysqli = require_once __DIR__. ".../database.php";

$sql = "INSERT INTO customer_acc (name, email, password)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["fullname"],
                  $_POST["email"],
                  $_POST["pwd"]);

$stmt->execute();

