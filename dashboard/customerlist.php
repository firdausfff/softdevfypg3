<?php
session_start();

$name_check = $_SESSION['data'];

session_abort();
?>
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

        <!-- ========== List (Fetched) ============  -->
        <div id="sidebar-content"></div>
    </div>

  <!-- ============= Home Section =============== -->
  <section class="home">
    <div class="toggle-sidebar">
        <i class='bx bx-menu'></i>
        <div class="text">Welcome back, Admin <?php echo $name_check ?></div>
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