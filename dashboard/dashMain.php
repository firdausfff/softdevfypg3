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

$query="SELECT MAX(id)  FROM  customer_ticket;"; 
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()) {
    $ticketcounter = $row["MAX(id)"];    
    }
$query = null;
$result = null;

$query="SELECT MAX(id)  FROM  events_current;"; 
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()) {
    $eventcounter = $row["MAX(id)"];    
    }
    $query = null;
    $result = null;


session_start();

$name_check = $_SESSION['data'];

session_abort();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="logo-name">goGig</div>
        </a>

        <!-- ========== List (Fetched) ============  -->
        <div id="sidebar-content"></div>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Welcome back, Admin <?php echo $name_check ?></div>
        </div>

        <div class="card-container">
            <div class="card">
                <h2>Number of Tickets Sold</h2>
                <p><?php echo $ticketcounter ?></p>
            </div>
            <div class="card">
                <h2>Total <br> Revenue</h2>
                <p>###</p>
            </div>
            <div class="card">
                <h2>Number of Events Held</h2>
                <p><?php echo $eventcounter ?></p>
            </div>
        </div>

        <!-- CURRENT EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Current Events</div>
            <?php
            $sql = "SELECT event_name, event_image, event_date_start,event_cost,event_location,event_description,events_ticketavail
                     FROM events_current 
                     WHERE event_expiry='upcoming'";

            $result = $mysqli-> query($sql);
            
                if($result-> num_rows>0){
                    while ($row = $result-> fetch_assoc()){
                     echo "<div class='big-card'>
                <img src='event_images/". $row["event_image"]."' alt='Event Image'>
                <div class='big-card-content'>
                    <h2>". $row["event_name"]."</h2>
                    <p><strong>Venue:</strong>". $row["event_location"]."</p>
                    <p><strong>Description:</strong> ". $row["event_description"]."</p>
                </div>
                <div class='big-card-info'>
                    <p><i class='fas fa-dollar-sign'></i> Price: $". $row["event_cost"]."</p>
                    <p><i class='fas fa-calendar-alt'></i> Date: ". $row["event_date_start"]."</p>
                    <p><i class='fas fa-ticket-alt'></i> Tickets Left: ". $row["events_ticketavail"]."</p>
                </div>
            </div>";
                    }
                    
                }
            echo "</div>";
            ?>

        <!-- UPCOMING EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Upcoming Events</div>
            <?php
            $sql = "SELECT event_name, event_image, event_date_start,event_cost,event_location,event_description,events_ticketavail
                     FROM events_current 
                     WHERE event_expiry='upcoming'";

            $result = $mysqli-> query($sql);
            
                if($result-> num_rows>0){
                    while ($row = $result-> fetch_assoc()){
                     echo "<div class='big-card'>
                <img src='event_images/". $row["event_image"]."' alt='Event Image'>
                <div class='big-card-content'>
                    <h2>". $row["event_name"]."</h2>
                    <p><strong>Venue:</strong>". $row["event_location"]."</p>
                    <p><strong>Description:</strong> ". $row["event_description"]."</p>
                </div>
                <div class='big-card-info'>
                    <p><i class='fas fa-dollar-sign'></i> Price: $". $row["event_cost"]."</p>
                    <p><i class='fas fa-calendar-alt'></i> Date: ". $row["event_date_start"]."</p>
                    <p><i class='fas fa-ticket-alt'></i> Tickets Left: ". $row["events_ticketavail"]."</p>
                </div>
            </div>";
                    }
                    
                }
            echo "</div>";
            ?>

        <!-- PAST EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Past Events</div>
            <?php
            $sql = "SELECT event_name, event_image, event_date_start,event_cost,event_location,event_description,events_ticketavail
                     FROM events_current 
                     WHERE event_expiry='upcoming'";

            $result = $mysqli-> query($sql);
            
                if($result-> num_rows>0){
                    while ($row = $result-> fetch_assoc()){
                     echo "<div class='big-card'>
                <img src='event_images/". $row["event_image"]."' alt='Event Image'>
                <div class='big-card-content'>
                    <h2>". $row["event_name"]."</h2>
                    <p><strong>Venue:</strong>". $row["event_location"]."</p>
                    <p><strong>Description:</strong> ". $row["event_description"]."</p>
                </div>
                <div class='big-card-info'>
                    <p><i class='fas fa-dollar-sign'></i> Price: $". $row["event_cost"]."</p>
                    <p><i class='fas fa-calendar-alt'></i> Date: ". $row["event_date_start"]."</p>
                    <p><i class='fas fa-ticket-alt'></i> Tickets Left: ". $row["events_ticketavail"]."</p>
                </div>
            </div>";
                    }
                    
                }
            echo "</div>";
            ?>

    </section>

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>