
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

$sql = "SELECT event_name,event_image, event_date_start, event_cost,event_description FROM events_current";
$result = $mysqli-> query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
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
            $sql = "SELECT event_name,event_image, event_date_start, event_cost,event_description FROM events_current";
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
                                <p>Description:" .$row["event_description"] ."</p>
                                <p>Date:" .$row["event_date_start"] ."</p>
                                <p>Price: $".$row["event_cost"] ."</p>
                            </div>
                            <div class='more-info-button'>
                                <button name ='buttoninfo'>More info</button>
                            </div>
                        </div>
                    </div>
                </div>";
                }
        
                }
            ?>
                <!--<div class="card">
                    <a href="productpage.html">
                        <img src="assets/images/indiepologies2.png" alt="Card 1">
                    </a>
                    <div class="content">
                        <h2>Indiepologies Vol. 2</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/risingfest.png" alt="Card 2">
                    <div class="content">
                        <h2>Rising Fest 8</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/pleasentrees.png" alt="Card 3">
                    <div class="content">
                        <h2>Pleasantrees : Thought I'd let you know</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/indienasional.png" alt="Card 3">
                    <div class="content">
                        <h2>Indienasional Vol. 6</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/pitstop.png" alt="Card 3">
                    <div class="content">
                        <h2>Pitstop DJ Night</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>

        <!-- Section 2: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Upcoming Events</h2>
            <div class="card-container">
                <div class="card">
                    <img src="assets/images/indiepologies3.png" alt="Card 4">
                    <div class="content">
                        <h2>Indiepologies Vol. 3</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/unity.png" alt="Card 5">
                    <div class="content">
                        <h2>Unity</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Past Events</h2>
            <div class="card-container">
                <div class="card">
                    <img src="assets/images/monsoon.png" alt="Card 7">
                    <div class="content">
                        <h2>Monsoon Madness</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/rotanlot.png" alt="Card 8">
                    <div class="content">
                        <h2>Rotan Lot Holiday Home Market</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/magnificent.png" alt="Card 9">
                    <div class="content">
                        <h2>Magnificent 8 , Volume 22</h2>
                        <div class="shortinfo">
                            <div class="text-box">
                                <p>Description: Lorem ipsum dolor sit amet.</p>
                                <p>Date: 2024-06-20</p>
                                <p>Price: $50</p>
                            </div>
                            <div class="more-info-button">
                                <button>More info</button>
                            </div>
                        </div>
                    </div>
                </div>
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
