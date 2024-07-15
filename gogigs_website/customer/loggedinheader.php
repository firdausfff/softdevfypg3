<?php
session_start();

$data = $_SESSION['name'];

?>

<header>
  <a href="custMain.php.">
      <img src="/gogigs/gogigs_website/assets/logo/Untitled design.png" alt="Logo" style="height: 100px;">
  </a>  
  <h2 class="logo"></h2>
      <nav class="navigation">
      <a class="one" href="/gogigs/gogigs_website/php_files/custMain.php">Home</a>
      <a class="one" href="/gogigs/gogigs_website/php_files/eventspage(cust).php">Events</a>
      <a class="one" href="/gogigs/gogigs_website/html/productpage(cust).html">Buy Tickets</a>
      <a class="one" href="/gogigs/gogigs_website/html/aboutus(cust).html">About Us</a>
      <a class="one" href="/gogigs/gogigs_website/html/contactus(cust).html">Contact Us</a>


      <div class="dropdown">
          <button class="dropbtn">Hello <?php echo $data?></button>
          <div class="dropdown-content">
            <a href="/gogigs/gogigs_website/php_files/profile_inc.php">Profile</a>
            <a href="/gogigs/gogigs_website/php_files/purchasehistory.php">Purchase History</a>
            <a href="/gogigs/gogigs_website/html/card.html">Card</a>
            <a href="/gogigs/gogigs_website/index.php">Sign Out</a>
          </div>
        </div>
</header>
