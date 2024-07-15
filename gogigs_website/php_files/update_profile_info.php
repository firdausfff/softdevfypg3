<?php
session_start();
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "gogigs";

$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['savebtn'])) {
    $bio = $mysqli->real_escape_string($_POST['bio']);
    $birthday = $mysqli->real_escape_string($_POST['birthday']);
    $state = $mysqli->real_escape_string($_POST['state']);
    $phone_number = $mysqli->real_escape_string($_POST['phone_number']);
    $user_check = $_SESSION['name'];

    // Update query
    $query = "UPDATE customer_acc SET bio='$bio', birthday='$birthday', state='$state', phone_number='$phone_number' WHERE name='$user_check'";

    if ($mysqli->query($query) === TRUE) {
        header("Location: /gogigs/gogigs_website/php_files/profile_inc.php?update=success");
        exit();
    } else {
        header("Location: /gogigs/gogigs_website/php_files/profile_inc.php?update=error");
        exit();
    }
}

$mysqli->close();
?>
