<?php

declare(strict_types=1);

function set_feedback(object $pdo, string $name, string $email, string $subject, string $message)
{

    $query = "INSERT INTO feedback_form (name, email, subject, message) VALUES (:name, :email, :subject, :message) ;";
    $stmt=$pdo->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":subject", $subject);
    $stmt->bindParam(":message", $message);
    $stmt->execute();
}