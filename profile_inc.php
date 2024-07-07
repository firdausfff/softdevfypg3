<?php
session_start();
$data = $_SESSION['name'];

$user_name = '';
$user_email = '';
$user_bio = '';
$user_birthday = '';
$user_state = '';
$user_number = '';

if (isset($_SESSION['name'])) {
    $user_check = $_SESSION['name'];

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "gogigs";

    // Create connection
    $mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare SQL query
    $query = "SELECT * FROM customer_acc WHERE name = '$user_check'";

    // Execute query
    $result = $mysqli->query($query);

    // Check if query executed successfully
    if ($result && $result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();

        // Assign fetched data to variables
        $user_name = $row["name"];
        $user_email = $row["email"];
        $user_password = $row["password"];
        $user_bio = $row["bio"];
        $user_birthday = $row["birthday"];
        $user_state = $row["state"];
        $user_number = $row["phone_number"];
    } else {
        echo "Error: No user found with ID $user_check";
        // Optionally, redirect or handle the situation appropriately
    }

    // Close connection
    $mysqli->close();
} else {
    echo "Session variable user_id_check is not set.";
    // Optionally, redirect or handle the situation appropriately
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGig | Profile Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    <link href="/assets/webfonts/uicons-brands.css" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <div id="header"></div>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4"></br></br></br>Account settings</h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG or PNG. Max size of 800KB</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo ($user_name) ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="<?php echo ($user_email) ?>">
                                    <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <form action="include/changepassword.inc.php" method="post" class="forms_form">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="oldpassword" class="form-control" alue="<?php echo ($user_password)?>" ?>>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" name="newpassword" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" name="confirmpassword" class="form-control">
                                    </div>
                                    <div class="forms_buttons">
                                        <input type="submit" value="Change Password" class="forms_buttons-action">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="5"><?php echo htmlspecialchars($user_bio); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($user_birthday); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <select class="custom-select">
                                        <option <?php if ($user_state == "Johor") echo 'selected'; ?>>Johor</option>
                                        <option <?php if ($user_state == "Kedah") echo 'selected'; ?>>Kedah</option>
                                        <option <?php if ($user_state == "Kelantan") echo 'selected'; ?>>Kelantan</option>
                                        <option <?php if ($user_state == "Melaka") echo 'selected'; ?>>Melaka</option>
                                        <option <?php if ($user_state == "Negeri Sembilan") echo 'selected'; ?>>Negeri Sembilan</option>
                                        <option <?php if ($user_state == "Pahang") echo 'selected'; ?>>Pahang</option>
                                        <option <?php if ($user_state == "Pulau Pinang") echo 'selected'; ?>>Pulau Pinang</option>
                                        <option <?php if ($user_state == "Perak") echo 'selected'; ?>>Perak</option>
                                        <option <?php if ($user_state == "Perlis") echo 'selected'; ?>>Perlis</option>
                                        <option <?php if ($user_state == "Sabah") echo 'selected'; ?>>Sabah</option>
                                        <option <?php if ($user_state == "Sarawak") echo 'selected'; ?>>Sarawak</option>
                                        <option <?php if ($user_state == "Terengganu") echo 'selected'; ?>>Terengganu</option>
                                        <option <?php if ($user_state == "W.P. Labuan") echo 'selected'; ?>>W.P. Labuan</option>
                                        <option <?php if ($user_state == "W.P. Kuala Lumpur") echo 'selected'; ?>>W.P. Kuala Lumpur</option>
                                        <option <?php if ($user_state == "W.P. Putrajaya") echo 'selected'; ?>>W.P. Putrajaya</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($user_number); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body">
                                <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                                    <i class="ion ion-logo-google text-google"></i>
                                    You are connected to Google:
                                </h5>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f9979498818e9c9595b994989095d79a9694">[email&#160;protected]</a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when an event is near my area</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when I purchased a ticket</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">General</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Event updates</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary" name="savebtn">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default" name="cancelbtn">Cancel</button>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
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