<?php

declare(strict_types=1);



function get_name(object $pdo, string $name) {

    $query = "SELECT name FROM customer_acc WHERE name = :fullname;";
    $stmt=$pdo->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->execute();


    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) {

    $query = "SELECT name FROM customer_acc WHERE email= :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();


    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo,string $pwd,string $name,string $email)
{

    $query = "INSERT INTO customer_acc (name, email, password) VALUES (:name, :email, :pwd) ;";
    $stmt=$pdo->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}