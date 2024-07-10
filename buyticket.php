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
    <link rel="icon" type="image/x-icon" href="assets/logo/favicon.png">
    <style>
        body {
            font-family: 'Rubik';
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px;
        }

        .forms_title {
            margin-bottom: 20px;
            font-size: 50px;
            text-align: center;
            color: #333;
        }

        .forms_fieldset {
            border: none;
            padding: 0;
        }

        .forms_field {
            margin-bottom: 20px;
        }

        .forms_field-input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 18px;
            box-sizing: border-box;
        }

        .forms_field-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .forms_field label {
            display: block;
            margin-bottom: 5px;
            font-size: 30px;
            color: #333;
        }

        .forms_buttons {
            text-align: center;
        }

        .forms_buttons-action {
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .forms_buttons-action:hover {
            background-color: #0056b3;
        }
    </style>
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

