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
    $twitter = $mysqli->real_escape_string($_POST['twitter']);
    $facebook = $mysqli->real_escape_string($_POST['facebook']);
    $instagram = $mysqli->real_escape_string($_POST['instagram']);
    $user_check = $_SESSION['name'];

    // Update query
    $query = "UPDATE customer_acc SET twittercreds='$twitter', fbcreds='$facebook', igcreds='$instagram' WHERE name='$user_check'";

    if ($mysqli->query($query) === TRUE) {
        header("Location: profile_inc.php?update=success");
        exit();
    } else {
        header("Location: profile_inc.php?update=error");
        exit();
    }
}

$mysqli->close();
?>
