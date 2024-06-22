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

        <!-- FIRST EVENT -->

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

    </section>

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>