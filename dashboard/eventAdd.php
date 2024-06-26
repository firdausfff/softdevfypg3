<?php
session_start();
$name_check = $_SESSION['data'];
$admin_check = $_SESSION['admin_id_check'];
session_abort();

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

    

if (isset($_POST['addevent'])) {
    $filename = $_FILES["event-image"]["name"];
    $tempname = $_FILES["event-image"]["tmp_name"];
    $folder = "./event_images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $eventname = $_POST['event-name'];
    $eventvenue = $_POST['event-venue'];
    $eventdescription = $_POST['event-description'];
    $eventprice = $_POST['event-price'];
    $eventdate = $_POST['event-date'];
    $eventtickets = $_POST['event-tickets'];
    $query = "INSERT INTO events_current(event_name, event_image, event_date_start, event_cost, event_location, event_description, events_ticketavail)
              VALUES ('$eventname', '$filename', '$eventdate','$eventprice','$eventvenue','$eventdescription','$eventtickets')";

    $result = $mysqli->query($query);
    
    $query=null;
    $result=null;

    move_uploaded_file($tempname, $folder);

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
    <link rel="stylesheet" href="css/eventAddForm.css">
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

        <!-- ADD EVENT CONTAINER -->
        <div class="big-card-container" style="margin: 0px 20px;">
            <div class="big-card-container-title">Add Events</div>
            <div class="big-card">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="event-image">Event Images</label>
                        <input type="file"  name="event-image" values="" required/>
                    </div>
                    <div class="form-group">
                        <label for="event-name">Event Name</label>
                        <input type="text" id="event-name" name="event-name" required>
                    </div>
                    <div class="form-group">
                        <label for="event-venue">Venue</label>
                        <input type="text" id="event-venue" name="event-venue" required>
                    </div>
                    <div class="form-group">
                        <label for="event-description">Description</label>
                        <textarea id="event-description" name="event-description" required></textarea>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-price">Price</label>
                        <input type="number" id="event-price" name="event-price" step="0.1" required>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-date">Date</label>
                        <input type="date" id="event-date" name="event-date" required>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-tickets">Number of Tickets</label>
                        <input type="number" id="event-tickets" name="event-tickets" required>
                    </div>
                    <button type="submit" name="addevent">Add Event</button>
                </form>
            </div>
        </div>
    </section>
    
    <script src="script/dashboard.js"></script>
    <script>
        document.getElementById('eventForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            
            let isValid = true;
            const fields = ['event-image', 'event-name', 'event-venue', 'event-description', 'event-price', 'event-date', 'event-tickets'];

            fields.forEach(function(field) {
                const input = document.getElementById(field);
                if (!input.value) {
                    isValid = false;
                    input.style.borderColor = 'red'; // Optional: Highlight the invalid field
                } else {
                    input.style.borderColor = ''; // Optional: Reset the border color for valid fields
                }
            });

            if (isValid) {
                alert("Event Added Successfully!");
            }
        });
    </script>
</body>

</html>
