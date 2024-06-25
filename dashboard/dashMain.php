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


session_start();

$name_check = $_SESSION['data'];

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
                <p>###</p>
            </div>
        </div>

        <!-- CURRENT EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Current Events</div>
            <div class="big-card">
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
            </div>
            <div class="big-card">
                <img src="event-image4.jpg" alt="Event Image">
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
            </div>
            <div class="big-card">
                <img src="event-image5.jpg" alt="Event Image">
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
            </div>
        </div>

        <!-- UPCOMING EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Upcoming Events</div>
            <div class="big-card">
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
            </div>
            <div class="big-card">
                <img src="event-image4.jpg" alt="Event Image">
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
            </div>
            <div class="big-card">
                <img src="event-image5.jpg" alt="Event Image">
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
            </div>
        </div>

        <!-- PAST EVENT -->

        <div class="big-card-container">
            <div class="big-card-container-title">Past Events</div>
            <div class="big-card">
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
            </div>
            <div class="big-card">
                <img src="event-image4.jpg" alt="Event Image">
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
            </div>
            <div class="big-card">
                <img src="event-image5.jpg" alt="Event Image">
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
            </div>
        </div>

    </section>

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>