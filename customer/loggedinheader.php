<header>
    <h2 class="logo">Logo</h2>
    <nav class="navigation">
        <a class="one" href="custMain.php">Home</a>
        <a class="one" href="#">Events</a>
        <a class="one" href="#">About Us</a>
        <a class="one" href="#">FAQs</a>

        <div class="dropdown">
            <button class="dropbtn">Hello, <?php echo $_POST["fullname"]; ?></button>
            <div class="dropdown-content">
              <a href="#">Profile</a>
              <a href="#">My Orders</a>
              <a href="#">Sign Out</a>
            </div>
          </div>
    </nav>
</header>