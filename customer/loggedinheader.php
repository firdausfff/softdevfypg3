<?php
session_start();

$data = $_SESSION['data'];


?>

<header>
    <h2 class="logo">Logo</h2>
    <nav class="navigation">
        <a class="one" href="custMain.html">Home</a>
        <a class="one" href="#">Events</a>
        <a class="one" href="productpage.html">Buy Tickets</a>
        <a class="one" href="productbuy.html">Card</a>
        <a class="one" href="#">About Us</a>
        <a class="one" href="#">FAQs</a>


        <div class="dropdown">
            <button class="dropbtn">Hello <?php echo $data?></button>
            <div class="dropdown-content">
              <a href="profile.html">Profile</a>
              <a href="#">My Orders</a>
              <a href="index.php">Sign Out</a>
            </div>
          </div>
    </nav>
</header>
