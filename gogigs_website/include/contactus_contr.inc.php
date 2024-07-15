<?php

declare(strict_types=1);

function create_feedback(object $pdo, string $name, string $email, string $subject, string $message) {

    set_feedback( $pdo,  $name,  $email,  $subject, $message);
 }