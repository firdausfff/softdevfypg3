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
            <div class="text">Welcome back, Admin</div>
        </div>

        <!-- REMOVE EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Remove Events</div>

            <div class="big-card-container">
            <div class="big-card-container-title">Remove Current Events</div>
            <?php
            $sql = "SELECT event_name, event_image, event_date_start,event_cost,event_location,event_description,events_ticketavail
                     FROM events_current 
                     WHERE event_expiry='current'";

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
                <button class='remove-btn'><a href='deleteevent.inc.php?event_names=" . urlencode($row['event_name']) . "'>Remove</a></button>
            </div>";
                    }
                    
                }
            echo "</div>";
            ?>

        <!-- REMOVE UPCOMING EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Remove Upcoming Events</div>
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
                <button class='remove-btn'><a href='deleteevent.inc.php?event_names=" . urlencode($row['event_name']) . "'>Remove</a></button>
            </div>";
                    }
                    
                }
            echo "</div>";
            ?>

        <!-- REMOVE PAST EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Remove Past Events</div>
            <?php
            $sql = "SELECT event_name, event_image, event_date_start,event_cost,event_location,event_description,events_ticketavail
                     FROM events_current 
                     WHERE event_expiry='past'";

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
                <button class='remove-btn'><a href='deleteevent.inc.php?event_names=" . urlencode($row['event_name']) . "'>Remove</a></button>
            </div>";
                    }
                    
                }
            echo "</div>";
            ?>
            
            <!--<div class="big-card">
                <img src="event-image1.jpg" alt="Event Image">
                <div class="big-card-content">
                    <h2>Event Title 1</h2>
                    <p><strong>Venue:</strong> Event Venue 1</p>
                    <p><strong>Description:</strong> This is a brief description of the event 1.</p>
                </div>
                <div class="big-card-info">
                    <p><i class="fas fa-dollar-sign"></i> Price: $XX</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: MM/DD/YYYY</p>
                    <p><i class="fas fa-ticket-alt"></i> Tickets Left: XXX</p>
                </div>
                <button class="remove-btn">Remove</button>
            </div>

            <div class="big-card">
                <img src="event-image2.jpg" alt="Event Image">
                <div class="big-card-content">
                    <h2>Event Title 2</h2>
                    <p><strong>Venue:</strong> Event Venue 2</p>
                    <p><strong>Description:</strong> This is a brief description of the event 2.</p>
                </div>
                <div class="big-card-info">
                    <p><i class="fas fa-dollar-sign"></i> Price: $XX</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: MM/DD/YYYY</p>
                    <p><i class="fas fa-ticket-alt"></i> Tickets Left: XXX</p>
                </div>
                <button class="remove-btn">Remove</button>
            </div>

            <div class="big-card">
                <img src="event-image3.jpg" alt="Event Image">
                <div class="big-card-content">
                    <h2>Event Title 3</h2>
                    <p><strong>Venue:</strong> Event Venue 3</p>
                    <p><strong>Description:</strong> This is a brief description of the event 3.</p>
                </div>
                <div class="big-card-info">
                    <p><i class="fas fa-dollar-sign"></i> Price: $XX</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: MM/DD/YYYY</p>
                    <p><i class="fas fa-ticket-alt"></i> Tickets Left: XXX</p>
                </div>
                <button class="remove-btn">Remove</button>
            </div>

            <div class="big-card">
                <img src="event-image3.jpg" alt="Event Image">
                <div class="big-card-content">
                    <h2>Event Title 4</h2>
                    <p><strong>Venue:</strong> Event Venue 4</p>
                    <p><strong>Description:</strong> This is a brief description of the event 4.</p>
                </div>
                <div class="big-card-info">
                    <p><i class="fas fa-dollar-sign"></i> Price: $XX</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: MM/DD/YYYY</p>
                    <p><i class="fas fa-ticket-alt"></i> Tickets Left: XXX</p>
                </div>
                <button class="remove-btn">Remove</button>
            </div>

            <div class="big-card">
                <img src="event-image3.jpg" alt="Event Image">
                <div class="big-card-content">
                    <h2>Event Title 5</h2>
                    <p><strong>Venue:</strong> Event Venue 5</p>
                    <p><strong>Description:</strong> This is a brief description of the event 5.</p>
                </div>
                <div class="big-card-info">
                    <p><i class="fas fa-dollar-sign"></i> Price: $XX</p>
                    <p><i class="fas fa-calendar-alt"></i> Date: MM/DD/YYYY</p>
                    <p><i class="fas fa-ticket-alt"></i> Tickets Left: XXX</p>
                </div>
                <button class="remove-btn">Remove</button>
            </div>-->
        </div>

    </section>
    <script src="script/dashboard.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const removeButtons = document.querySelectorAll('.remove-btn');

            removeButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const confirmation = confirm("Remove Selected Event?");
                    if (confirmation) {
                        this.closest('.big-card').remove(); // Removes Selected Event, *REFRESH TO UNDO
                    }
                });
            });
        });

    </script>
</body>

</html>