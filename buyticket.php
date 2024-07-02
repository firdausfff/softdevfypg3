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
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>buy Ticket</title>
</head>

<body>
<section class="user">
<div class="user_options-forms" id="user_options-forms">
    <div class="user_forms-login">
        <h2 class="forms_title">Pay For Ticket <?php echo $info_name?>: $<?php echo $info_cost ?></h2>
        <form action ="include/payticket.php?event_names=<?php echo $info_name?>" method="post" class="forms_form">
            <fieldset class="forms_fieldset">
                <div class="forms_field">
                    <input type="text"  name="custName" placeholder="johan kancil" class="forms_field-input" required autofocus />
                </div>
                <div class="forms_field">
                    <input type="text"  name="custEmail" placeholder="yahoo@gmail.com" class="forms_field-input" required autofocus />
                </div>
                <div class="forms_field">
                    <input type="text"  name="cardname" placeholder="mr. johan kancil" class="forms_field-input" required autofocus />
                </div>
                <div class="forms_field">
                    <input type="number" name="cardnumber"placeholder="0000-0000-0000-0000" class="forms_field-input" required />
                </div>
                <div class="forms_field">
                    <input type="text"  name="cvv" value="" placeholder="CVV" class="forms_field-input" required autofocus />
                </div>
            </fieldset>
            <div class="forms_buttons">
                <input type="submit" value="Pay Ticket" class="forms_buttons-action">
            </div>
        </form>
    </div>
</div>
</section>
</body>

</html>

