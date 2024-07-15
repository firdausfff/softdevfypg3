<?php
session_start();

$data = $_SESSION['name'];

?>

<header>
  <a href="custMain.php.">
      <img src="/gogigs/assets/logo/Untitled design.png" alt="Logo" style="height: 100px;">
  </a>  
  <h2 class="logo"></h2>
      <nav class="navigation">
      <a class="one" href="/gogigs/php_files/custMain.php">Home</a>
      <a class="one" href="/gogigs/php_files/eventspage(cust).php">Events</a>
      <a class="one" href="/gogigs/html/productpage(cust).html">Buy Tickets</a>
      <a class="one" href="/gogigs/html/aboutus(cust).html">About Us</a>
      <a class="one" href="/gogigs/html/contactus(cust).html">Contact Us</a>


      <div class="dropdown">
          <button class="dropbtn">Hello <?php echo $data?></button>
          <div class="dropdown-content">
            <a href="/gogigs/php_files/profile_inc.php">Profile</a>
            <a href="/gogigs/php_files/purchasehistory.php">Purchase History</a>
            <a href="/gogigs/html/card.html">Card</a>
            <a href="/gogigs/index.php">Sign Out</a>
          </div>
        </div>
</header>
