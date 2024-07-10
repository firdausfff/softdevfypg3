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

    $query = "SELECT event_name,event_image, event_date_start, event_cost,event_description,events_ticketavail 
            FROM events_current
            WHERE event_name='$data'";
    $result = $mysqli->query($query);
while($row = $result->fetch_assoc()) {
    $info_name = $row["event_name"];
    $info_image = $row["event_image"];  
    $info_date= $row["event_date_start"];  
    $info_cost = $row["event_cost"];  
    $info_desc = $row["event_description"];
    $info_ticketsavail = $row["events_ticketavail"];    
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="icon" type="image/x-icon" href="assets/logo/favicon.png">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="/assets/webfonts/uicons-brands.css" rel="stylesheet">
    <link rel="stylesheet" href="css/productpage.css">

</head>
<body>

    <div id="header"></div>

    <main class="layouts_mainBody__ymXrR">
        <section class="section_section__gouit section_thinSection__4SpfK">
            <div
                class="MuiTypography-root MuiTypography-body1 section_label__WVYlc section_xlarge__hvIfP mui-style-1tam0el">
                <span><?php echo $info_name?> </span>
            </div>
        </section>
        <section class="section_section__gouit section_tightSection__Z3siX">
            <div class="section_content__7ryiz">
                <div class="event_bannerBackground__Fepo5"><img alt="event banner"
                        src="../testing/event_images/<?php echo  $info_image?>"
                        class="event_banner__zbca2"></div>
                <div class="event_field__lYkgZ event_border__cJ_l7">
                    <div class="event_basicInfoTable__Ufzj9">
                        <div class="eventMetadata_metadata__1VVUd">
                            <div class="label_labelContainer__hqwXx">
                                <div class="label_label__fAMrq">Event Period</div>
                            </div>
                            <div class="eventMetadata_content__2Y4Zt">2024-04-25 10:00 (+08:00) ~ 2024-07-21 21:00
                                (+08:00)
                            </div>
                        </div>
                        <div class="eventMetadata_metadata__1VVUd">
                            <div class="label_labelContainer__hqwXx">
                                <div class="label_label__fAMrq">Sales Date</div>
                            </div>
                            <div class="eventMetadata_content__2Y4Zt">2024-03-27 00:00 (+08:00) ~ 2024-07-21 21:00
                                (+08:00)
                            </div>
                        </div>
                        <div class="label_labelContainer__hqwXx">
                            <div class="label_label__fAMrq">Rate Card</div>
                        </div>
                        <div
                            class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiTableContainer-root mui-style-13xy2my">
                            <table class="MuiTable-root mui-style-golb6i" aria-label="Rate Card">
                                <thead class="MuiTableHead-root mui-style-1wbz3t9">
                                    <tr class="MuiTableRow-root MuiTableRow-head mui-style-146ytku">
                                        <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium mui-style-5ekb2p"
                                            scope="col">Package Options</th>
                                        <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium mui-style-5ekb2p" 
                                            scope="col">Price</th>
                                            <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium mui-style-5ekb2p"
                                            scope="col">Tickets Left</th>    
                                    </tr>
                                </thead>
                                <tbody class="MuiTableBody-root mui-style-1xnox0e">
                                    <tr class="MuiTableRow-root mui-style-146ytku">
                                        <td
                                            class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium mui-style-zt56lu">
                                            Standard</td>
                                        <td
                                            class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium rateCard_price__fzFth mui-style-zt56lu">
                                            <span>RM&nbsp;<?php echo $info_cost?></span>
                                        </td>
                                        <td
                                            class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium mui-style-zt56lu">
                                            <?php echo $info_ticketsavail?></td>
                                            
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                if($info_ticketsavail==0 || $info_ticketsavail<=0){
                    echo "<div class='event_toBuy__90XZ8'><button 
                    class='MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium button_container__Hb1DM button_extra__v4rXV button_contained__m3HKX button_color-primary__nfxA6 mui-style-1ui1p20'
                    tabindex='0' type='button' style='text-transform:none'><span
                        class='button_letterSpacing__MWFlg'><span
                            class='fa notranslate MuiIcon-root MuiIcon-fontSizeMedium fa-ticket-simple mui-style-u2bwxw'
                            aria-hidden='true'></span>&nbsp; NO TICKETS AVAILABLE</span><span
                        class='MuiTouchRipple-root mui-style-w0pj6f'></span></button></div>";

                }   else{
                echo "<div class='event_toBuy__90XZ8'><a href='buyticket.php?event_names=" . urlencode($info_name) . "'><button 
                        class='MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium button_container__Hb1DM button_extra__v4rXV button_contained__m3HKX button_color-primary__nfxA6 mui-style-1ui1p20'
                        tabindex='0' type='button' style='text-transform:none'><span
                            class='button_letterSpacing__MWFlg'><span
                                class='fa notranslate MuiIcon-root MuiIcon-fontSizeMedium fa-ticket-simple mui-style-u2bwxw'
                                aria-hidden='true'></span>&nbsp; Purchase Tickets</span><span
                            class='MuiTouchRipple-root mui-style-w0pj6f'></span></button></a></div>";

                }

                ?>
                <section class='section_section__gouit section_thinSection__4SpfK'>
                    <div class="section_content__7ryiz">
                        <div class="section_markdown__QYCDv">
                            <div
                                class="MuiTypography-root MuiTypography-body1 section_label__WVYlc section_large__1LkWY mui-style-1tam0el">
                                <span>Event information</span>
                            </div>
                            <div>Date: <?php echo $info_date?><br>Opening Hours: 10:00 am – 10:00 pm (Last
                                Entry:
                                9pm)<br>Location: CERO’ PJ, G-3-6, Parklane Commercial Park, Jalan SS 7/26, Ss 7, 47301 Petaling Jaya, Selangor
                            <div
                                class="MuiTypography-root MuiTypography-body1 section_label__WVYlc section_large__1LkWY mui-style-1tam0el">
                                <span>Description</span>
                            </div>
                            <div><?php echo $info_desc?>
                            </div>
                        </div>
                    </div>
                </section>
                <button class="event_back__j_1Cu"><span
                        class="fa notranslate MuiIcon-root MuiIcon-fontSizeMedium fa-chevron-left mui-style-u2bwxw"
                        aria-hidden="true"></span> <!-- -->Back</button>
            </div>
        </section>
    </main>

    <div id="footer"></div>


    <!-- JavaScripts -->
    <script src="scripts/slider.js"></script>
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