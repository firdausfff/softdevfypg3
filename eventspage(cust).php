
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

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="icon" type="image/x-icon" href="assets/logo/favicon.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="/assets/webfonts/uicons-brands.css" rel="stylesheet">


</head>

<body>

    <div id="header"></div>

    <!-- Sliding Pictures -->

    <div class="container">

        <!-- Section 1: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Trending Events</h2>
             <div class="card-container">
            <?php
            $sql = "SELECT event_name,event_image, event_date_start, event_cost,event_description 
            FROM events_current
            WHERE event_expiry='current'";
$result = $mysqli-> query($sql);
            if($result-> num_rows>0){
                while ($row = $result-> fetch_assoc()){
             echo "<div class='card'>
                    <a href='productpage(cust).html'>
                        <img src='../testing/event_images/" .$row["event_image"] . "' alt='Card 1'>
                    </a>
                    <div class='content'>
                        <h2>".$row['event_name']. "</h2>
                        <div class='shortinfo'>
                            <div class='text-box'>
                                <p>Date:" .$row["event_date_start"] ."</p>
                                <p>Price: $".$row["event_cost"] ."</p>
                            </div>
                            <div class='more-info-button'>
                                <button><a href='productpage(cust).php?event_names=" . urlencode($row['event_name']) . "'>More info</a></button>
                            </div>
                        </div>
                    </div>
                </div>";
                }
        
                }
            ?>
            </div>
        </div>

        <!-- Section 2: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Upcoming Events</h2>
            <div class="card-container">
            <?php
            $sql = "SELECT event_name,event_image, event_date_start, event_cost,event_description 
            FROM events_current
            WHERE event_expiry='upcoming'";
$result = $mysqli-> query($sql);
            if($result-> num_rows>0){
                while ($row = $result-> fetch_assoc()){
             echo "<div class='card'>
                    <a href='productpage(cust).html'>
                        <img src='../testing/event_images/" .$row["event_image"] . "' alt='Card 1'>
                    </a>
                    <div class='content'>
                        <h2>".$row['event_name']. "</h2>
                        <div class='shortinfo'>
                            <div class='text-box'>
                                <p>Date:" .$row["event_date_start"] ."</p>
                                <p>Price: $".$row["event_cost"] ."</p>
                            </div>
                            <div class='more-info-button'>
                                <button><a href='productpage(cust).php?event_names=" . urlencode($row['event_name']) . "'>More info</a></button>
                            </div>
                        </div>
                    </div>
                </div>";
                }
        
                }
            ?>
            </div>
        </div>

        <!-- Section 3: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Past Events</h2>
            <div class="card-container">
            <?php
            $sql = "SELECT event_name,event_image, event_date_start, event_cost,event_description 
            FROM events_current
            WHERE event_expiry='past'";
$result = $mysqli-> query($sql);
            if($result-> num_rows>0){
                while ($row = $result-> fetch_assoc()){
             echo "<div class='card'>
                    <a href='productpage(cust).html'>
                        <img src='../testing/event_images/" .$row["event_image"] . "' alt='Card 1'>
                    </a>
                    <div class='content'>
                        <h2>".$row['event_name']. "</h2>
                        <div class='shortinfo'>
                            <div class='text-box'>
                                <p>Date:" .$row["event_date_start"] ."</p>
                                <p>Price: $".$row["event_cost"] ."</p>
                            </div>
                            <div class='more-info-button'>
                                <button><a href='productpage(cust).php?event_names=" . urlencode($row['event_name']) . "'>More info</a></button>
                            </div>
                        </div>
                    </div>
                </div>";
                }
        
                }
            ?>
            </div>
        </div>
    </div>

    <div id="footer"></div>


    <!-- JavaScripts -->
    <script>
        // JavaScript to include header and footer
        fetch('customer/loggedinheader.php')
            .then(response => response.text())
            .then(data => document.getElementById('header').innerHTML = data);

        fetch('footer.html')
            .then(response => response.text())
            .then(data => document.getElementById('footer').innerHTML = data);
    </script>

</body>

</html>
