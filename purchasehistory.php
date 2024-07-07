<?php
session_start();
$data = $_SESSION['name'];

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase History</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="purchasehistory.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="/assets/webfonts/uicons-brands.css" rel="stylesheet">

</head>

<body>
    <div id="header"></div>

    <div class="history-page">
        <div class="history-page-title">
            <h2 style="font-size: 70px;">PURCHASE HISTORY</h2>
        </div>

        <!-- TICKET PURCHASE HISTORY STARTS -->
        <?php
            $sql = "SELECT ticket_id, event_name, cost, created_at, ticket_venue, event_image 
                     FROM customer_ticket 
                     WHERE Cust_Name='$data'";

            $result = $mysqli-> query($sql);
            
            
                if($result-> num_rows>0){
                    while ($row = $result->fetch_assoc()){
                echo "<div class='history-container'>
            <h1>Order</h1>
            <div class='history-content'>
                <img src='assets/images/". $row["event_image"]."' alt='order-image'
                    style='width: 300px; height: 300px; margin: 12px;'>
                <div class='order-details'>
                    <div class='order-details-title'>
                        <h1 style='margin-top: 1%; margin-bottom: 1%;'>ORDER NAME:(". $row["event_name"].")</h1>
                        <hr>
                    </div>
                    <div class='order-details-content'>
                        <p>Ticket ID : ". $row["ticket_id"]."</p>
                        <p>Date ticket purchased : ". $row["created_at"]."</p>
                        <p>Venue : ". $row["ticket_venue"]."</p>
                    </div>
                </div>
                <div class='order-summary'>
                    <div class='order-summary-title'>
                        <h1 style='margin-top: 1%; margin-bottom: 1%;'>SUMMARY</h1>
                        <hr>
                    </div>
                    <div class='order-summary-content'>
                        <p>Qty: <span class='align-right'>1</span></p>
                        <p>Item(s) Subtotal: <span class='align-right'>RM ". $row["cost"]."</span></p>
                        <br><br><br><br><br><hr>
                        <p><strong>Total Amount: <span class='align-right'>RM ". $row["cost"]."</span></strong></p>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
    }
?>
</div>
    <div id="footer"></div>
    <script>
        // JavaScript to include header and footer
        fetch('customer/loggedinheader.php')
            .then(response => response.text())
            .then(data => document.getElementById('header').innerHTML = data);

        fetch('footer.html')
            .then(response => response.text())
            .then(data => document.getElementById('footer').innerHTML = data);
    </script>
</body>

</html>