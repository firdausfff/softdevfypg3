<?php

declare(strict_types=1);


function is_input_empty(string $name, string $email, string $pwd) {

        if(empty($name) || empty($pwd) || empty($email)) {

            return true;

        } else {
            return false;
        }
}

function is_email_invalid(string $email) {

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_name_taken(object $pdo, string $name) {

    if(get_name($pdo, $name))  {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {

    if(get_email($pdo, $email))  {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $pwd, string $name, string $email) {

   set_user( $pdo,$pwd,$name, $email);
}