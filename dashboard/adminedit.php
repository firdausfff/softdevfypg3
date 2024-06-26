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

    

if (isset($_POST['savebutton'])) {
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./pfp/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "gogigs");
 
    // Get all the submitted data from the form
    $sql = "UPDATE admin_pfp  
            SET img ='$filename'
            WHERE name ='$admin_check'";
 
    // Execute query
    mysqli_query($db, $sql);

    move_uploaded_file($tempname, $folder);
   
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contactNumber'];
    $github = $_POST['githubName'];
    $linkedin = $_POST['linkedinProfile'];
   
   
    

$result = null;
$query = null;

$query = "UPDATE admin_profile  
          SET admin_address ='$address',admin_email='$email',
          admin_contact='$contact', admin_github='$github', admin_linkedin = '$linkedin'
          WHERE admin_ID ='$admin_check'";

$result = $mysqli->query($query);
    
$result = null;
$query = null;

header("Location: dashMain.php");
die();
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
    <link rel="stylesheet" href="css/adminedit.css">
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

        <!-- EDIT CONTAINER -->

        <div class="edit-container">
            <h2 style="font-size: xxx-large; margin-bottom: 1%;">Edit User Profile</h2>
            <form  method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="profilePicture">Profile Picture</label>
                    <input type="file" name="image" value="" />
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
                    <button type="submit" name="savebutton">Save Changes</button>
                </div>
                <div id="display-image">
                
            </form>
        </div>

    </section>

    <!-- Link JS -->
    <script src="script/dashboard.js"></script>
</body>

</html>