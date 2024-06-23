<?php
session_start();
$name_check = $_SESSION['data'];
$admin_check = $_SESSION['admin_id_check'];

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

$query="SELECT *  FROM admin_profile WHERE admin_ID = '$admin_check';"; 
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()) {
    $profile_address = $row["admin_address"];
    $profile_email = $row["admin_email"];  
    $profile_contact= $row["admin_contact"];  
    $profile_github = $row["admin_github"];  
    $profile_linkedin = $row["admin_linkedin"];      
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
    <link rel="stylesheet" href="css/adminprofile.css">
</head>

<body>
    <div class="sidebar close">
        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="dashMain.php" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="dashMain.php" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">Events</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title"><strong>Events</strong></a>
                    <a href="current.php" class="link">Current Events</a>
                    <a href="upcoming.php" class="link">Upcoming Events</a>
                    <a href="past.php" class="link">Past Events</a>
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="aboutus.html" class="link">
                        <i class='bx bx-info-circle'></i>
                        <span class="name">About Us</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="aboutus.html" class="link submenu-title">About Us</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="contactus.html" class="link">
                        <i class='bx bxs-contact'></i>
                        <span class="name">Contact Us</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="contactus.html" class="link submenu-title">Contact Us</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="view_feedbackform.php" class="link">
                        <i class='bx bx-note'></i>
                        <span class="name">Feedback Form</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="view_feedbackform.php" class="link submenu-title">View Feedback Form</a>
                    <a href="customerlist.php" class="link">Customer List</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Settings</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Settings</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bxs-user-account'></i>
                        <span class="name">Profile</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Profile</a>
                    <a href="adminprofile.php" class="link">View Profile</a>
                    <a href="adminedit.php" class="link">Edit Profile</a>
                    <a href="changepassword.html" class="link">Change Password</a>
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="index.php" class="link">
                        <i class='bx bx-user-x'></i>
                        <span class="name">Log Out</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="index.php" class="link submenu-title">Log Out</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Welcome back, Admin</div>
        </div>

        <!-- PROFILE -->


        <div class="profile-card">
            <div class="title">
                <h2>Profile Overview</h2>
            </div>
            <div class="header">
                <?php
                    $query= "SELECT img FROM admin_pfp WHERE name='$admin_check'";
                    $result = $mysqli->query($query);
                    while($row = $result->fetch_assoc()){
                    $pfp_show = $row["img"];
                    }
               ?>
                <img src="image/2abd0e42d24d45fc61be5bc6d88125c907cedc89.png" alt="Profile Picture" class="profile-picture">
                <button class="edit-button">Edit Profile</button>
            </div>
            <div class="profile-info">
                <h1><?php echo $name_check?></h1>
                <p><span class="flag">Malaysia</span><?php echo $profile_address ?></p>
                <p>Age: 24 | Gender: Male | Status: <span class="status active">Active</span></p>
                <hr style=" margin: 2%;">
                <div class="details">
                    <p><strong>Role:</strong> Administrator</p>
                    <p><strong>Email:</strong> <?php echo $profile_email ?></p>
                    <p><strong>Contact:</strong> <?php echo $profile_contact ?></p>
                    <p><strong>GitHub:</strong> <?php echo $profile_github ?></p>
                    <p><strong>LinkedIn:</strong> <?php echo $profile_linkedin ?></p>
                </div>
            </div>
        </div>

        <!-- PROFILE ACTIVITY -->

        <div class="profile-activity">

        </div>
    </section>

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>