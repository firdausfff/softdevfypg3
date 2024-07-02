<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $custname=$_POST['custName'];
    $custemail=$_POST['custEmail'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $cvv = $_POST['cvv'];

    $ticketid = rand(10000000,90000000 );
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

if (isset($_GET['event_names']) && !empty($_GET['event_names'])) {
    // Retrieve and sanitize the event_name
    $data = htmlspecialchars($_GET['event_names']);
}
$query = "SELECT event_name,event_image, event_date_start, event_cost,event_description 
            FROM events_current
            WHERE event_name='$data'";
    $result = $mysqli->query($query);
while($row = $result->fetch_assoc()) {
    $info_name = $row["event_name"];
    $info_image = $row["event_image"];  
    $info_date= $row["event_date_start"];  
    $info_cost = $row["event_cost"];  
    $info_desc = $row["event_description"];    
}  

$query=null;
$result=null;
    
    $query = "SELECT fullname,email,cardname,cardnumber,cvv 
              FROM card_information WHERE fullname='$custname' 
              AND email='$custemail' AND cardname='$cardname' 
              AND cardnumber='$cardnumber' AND cvv='$cvv'";

    $result = $mysqli->query($query);

   if($result->num_rows ==1){
    //verify success
    $data_check = "SELECT ticket_id FROM customer_ticket Where ticket_id='$ticketid'";

    if ($data_check=$ticketid){
        $ticketid = rand(10000000,90000000 );
        $data_check=null;
        $data_check = "SELECT ticket_id FROM customer_ticket Where ticket_id='$ticketid'";
    }
        $result = null;
        $query = null;
        $query = "INSERT INTO customer_ticket (ticket_id, Cust_Name, Cust_Email, event_name, cost) VALUES  (?, ?, ?, ?, ?);";
    
        $result = $mysqli->prepare($query);
        $result->execute([$ticketid,$custname, $custemail, $data, $info_cost ]);
    
        $result = null;
        $query = null;
        header("Location: ../custMain.php");

    die();
   }else{
    //verify failed
    header("Location: ../buyticket.php");
   
    die();
   }

   $mysqli->close();
}
?>