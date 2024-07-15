<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //ERROR HANDLERS
        $errors = [];

        if (is_input_empty($name, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used";
        }
        if (is_email_registered( $pdo,  $email)) {
            $errors["email_used"] = "Email already registered";

        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: /gogigs/gogigs_website/php_files/account.php");
            die();
        }

        create_user( $pdo,  $pwd,  $name,  $email);

        header("Location: /gogigs/gogigs_website/html/account.html");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
        header ("Location: /gogigs/gogigs_website/html/account.html");
        die();
}