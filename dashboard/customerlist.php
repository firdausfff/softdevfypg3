<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="css/customerlist.css">
 
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
    <table>
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Email</th>
        </tr>
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

$sql = "SELECT id, name, email FROM customer_acc";
$result = $mysqli-> query($sql);

    if($result-> num_rows>0){
        while ($row = $result-> fetch_assoc()){
         echo "<tr><td>". $row["id"] . "</td><td>". $row["name"] . 
         "</td><td>". $row["email"] . "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    $mysqli->close();
        ?>
        
    </table>
</section>
      

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>