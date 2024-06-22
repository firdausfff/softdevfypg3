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
    <link rel="stylesheet" href="css/adminedit.css">
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

        <!-- EDIT CONTAINER -->

        <div class="edit-container">
            <h2 style="font-size: xxx-large; margin-bottom: 1%;">Edit User Profile</h2>
            <form>
                <div class="form-group">
                    <label for="profilePicture">Profile Picture</label>
                    <input type="file" id="profilePicture" name="profilePicture">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="contactNumber">Contact Number</label>
                    <input type="tel" id="contactNumber" name="contactNumber">
                </div>
                <div class="form-group">
                    <label for="githubName">GitHub Name</label>
                    <input type="text" id="githubName" name="githubName">
                </div>
                <div class="form-group">
                    <label for="linkedinProfile">LinkedIn Profile</label>
                    <input type="url" id="linkedinProfile" name="linkedinProfile">
                </div>
                <div class="form-group">
                    <button type="submit">Save Changes</button>
                </div>
            </form>
        </div>

    </section>

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>