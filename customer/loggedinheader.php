<?php
session_start();

$data = $_SESSION['name'];


?>

<header>
    <h2 class="logo">Logo</h2>
    <nav class="navigation">
        <a class="one" href="custMain.html">Home</a>
        <a class="one" href="eventspage.html">Events</a>
        <a class="one" href="productpage.html">Buy Tickets</a>
        <a class="one" href="aboutus.html">About Us</a>
        <a class="one" href="#">Contact Us</a>


        <div class="dropdown">
            <button class="dropbtn">Hello <?php echo $data?></button>
            <div class="dropdown-content">
              <a href="profile.html">Profile</a>
              <a href="changepassword.html">Change Password</a>
              <a href="#">Purchase History</a>
              <a href="card.html">Card</a>
              <a href="index.php">Sign Out</a>
            </div>
          </div>
    </nav>
</header>
