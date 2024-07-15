
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
if (isset($_GET['event_names']) && !empty($_GET['event_names'])) {
        // Retrieve and sanitize the event_name
        $data = htmlspecialchars($_GET['event_names']);
        $sql = "SELECT event_name, event_image, event_date_start,event_date_finish,event_cost,event_location,event_description,events_ticketavail
                     FROM events_current 
                     WHERE event_name='$data'";

            $result = $mysqli-> query($sql);
            while ($row = $result-> fetch_assoc()){
        $before_name = $row["event_name"];
        $before_image= $row["event_image"];
        $before_venue= $row["event_location"];
        $before_desc = $row["event_description"];
        $before_price = $row["event_cost"];
        $before_datestart = $row["event_date_start"];
        $before_datefinish = $row["event_date_finish"];
        $before_tickets = $row["events_ticketavail"];
        }
    }
    

if (isset($_POST['editevent'])) {
    $filename = $_FILES["event-image"]["name"];
    $tempname = $_FILES["event-image"]["tmp_name"];
    $folder = "./event_images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $eventname = $_POST['event-name'];
    $eventvenue = $_POST['event-venue'];
    $eventdescription = $_POST['event-description'];
    $eventprice = $_POST['event-price'];
    $eventdatestart = $_POST['event-date-start'];
    $eventdatefinish = $_POST['event-date-finish'];
    $eventtickets = $_POST['event-tickets'];
    $eventexpire = $_POST['EventType'];
    $result = null;
    $query =null;
    $query = "UPDATE events_current
            SET event_name = '$eventname', event_image ='$filename', event_date_start='$eventdatestart',event_date_finish = '$eventdatefinish',
            event_cost='$eventprice',event_location='$eventvenue', event_description='$eventdescription', events_ticketavail='$eventtickets',event_expiry='$eventexpire'
            WHERE event_name ='$data'";

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
            <div class="text">Welcome back, Admins</div>
        </div>

        <!-- ADD EVENT CONTAINER -->
        <div class="big-card-container" style="margin: 0px 20px;">
            <div class="big-card-container-title">Edit Event</div>
            <div class="big-card">
                <form  method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="event-image">Event Image</label>
                        <input type="file" id="event-image" name="event-image" value="<?php echo $before_image?>" required>
                    </div>
                    <div class="form-group">
                        <label for="event-name">Event Name</label>
                        <input type="text" id="event-name" name="event-name" value="<?php echo $before_name?>" required>
                    </div>
                    <div class="form-group">
                        <label for="event-venue">Venue</label>
                        <input type="text" id="event-venue" name="event-venue" value="<?php echo $before_venue?>" required>
                    </div>
                    <div class="form-group">
                        <label for="event-description">Description</label>
                        <input type="text" id="event-description" name="event-description" value="<?php echo $before_desc?>" required>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-price">Price</label>
                        <input type="number" id="event-price" name="event-price" value="<?php echo $before_price?>" step="0.1" required>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-date-start">Date Start</label>
                        <input type="date" id="event-date-start" name="event-date-start" value="<?php echo $before_datestart?>" required>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-date-finish">Date Finish</label>
                        <input type="date" id="event-date-finish" name="event-date-finish" value="<?php echo $before_datefinish?>" required>
                    </div>
                    <div class="form-group" style="width: 20%;">
                        <label for="event-tickets">Number of Tickets</label>
                        <input type="number" id="event-tickets" name="event-tickets" value="<?php echo $before_tickets?>" required>
                    </div>

                    <div class="form-group-eventType">
                        <p>Choose Event Type</p>
                        <input type="radio" id="upcoming" name="EventType" value="Upcoming">
                        <label for="upcoming">Upcoming</label><br>
                        <input type="radio" id="current" name="EventType" value="Current">
                        <label for="current">Current</label><br>
                        <input type="radio" id="past" name="EventType" value="Past">
                        <label for="past">Past</label>
                    </div>

                    <button type="submit" name="editevent">Edit Event</button>
                </form>
            </div>
        </div>
    </section>

    <script src="script/dashboard.js"></script>
    <script>
        document.getElementById('eventForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission
    
            let isValid = true;
            const fields = ['event-image', 'event-name', 'event-venue', 'event-description', 'event-price', 'event-date', 'event-tickets'];
    
            fields.forEach(function (field) {
                const input = document.getElementById(field);
                if (!input.value) {
                    isValid = false;
                    input.style.borderColor = 'red'; // Optional: Highlight the invalid field
                } else {
                    input.style.borderColor = ''; // Optional: Reset the border color for valid fields
                }
            });
    
            // Check if an event type is selected
            const eventType = document.querySelector('input[name="EventType"]:checked');
            if (!eventType) {
                isValid = false;
                // Optional: Display a message or highlight the event type section
                document.querySelector('.form-group-eventType').style.borderColor = 'red';
                alert("Please Choose Event Type!");
            } else {
                document.querySelector('.form-group-eventType').style.borderColor = ''; // Reset border color if valid
            }
    
            if (isValid) {
                alert("Event Edited Successfully!");
            }
        });
    </script>
    
    
</body>

</html>