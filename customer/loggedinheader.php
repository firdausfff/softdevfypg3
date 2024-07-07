<?php
session_start();

$data = $_SESSION['name'];

?>

<header>
<h2 class="logo">Logo</h2>
  <nav class="navigation">
      <a class="one" href="custMain.php">Home</a>
      <a class="one" href="eventspage(cust).php">Events</a>
      <a class="one" href="productpage(cust).html">Buy Tickets</a>
      <a class="one" href="aboutus(cust).html">About Us</a>
      <a class="one" href="contactus(cust).html">Contact Us</a>


      <div class="dropdown">
          <button class="dropbtn">Hello <?php echo $data?></button>
          <div class="dropdown-content">
            <a href="profile_inc.php">Profile</a>
            <a href="purchasehistory.php">Purchase History</a>
            <a href="card.html">Card</a>
            <a href="index.php">Sign Out</a>
          </div>
        </div>
</header>
