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
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $user_check = $_SESSION['name'];

    // Update query
    $query = "UPDATE customer_acc SET name='$name', email='$email' WHERE name='$user_check'";

    if ($mysqli->query($query) === TRUE) {
        // Update session variable if name is changed
        $_SESSION['name'] = $name;
        header("Location: profile_inc.php?update=success");
        exit();
    } else {
        header("Location: profile_inc.php?update=error");
        exit();
    }
}

$mysqli->close();
?>
