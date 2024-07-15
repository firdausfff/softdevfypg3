<?php
$host = "localhost";
$dbname = "gogigs";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
if ($mysqli->connect_error) {
die ("Connection error" . $mysqli->connect_error);
}

if (isset($_GET['event_names']) && !empty($_GET['event_names'])) {
    // Retrieve and sanitize the event_name
    $data = htmlspecialchars($_GET['event_names']);
}

    $query = "DELETE 
            FROM events_current
            WHERE event_name='$data'";
    $result = $mysqli->query($query);

    header("Location: dashMain.php");
die();
?>