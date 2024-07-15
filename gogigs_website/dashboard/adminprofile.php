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
                <img src="pfp/<?php echo $pfp_show?>" alt="Profile Picture" class="profile-picture">
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