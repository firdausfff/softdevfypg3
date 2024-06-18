<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.0/uicons-brands/css/uicons-brands.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="/assets/webfonts/uicons-brands.css" rel="stylesheet">

</head>
    <style>

h4{
position:absolute;
top: 450px;
right:600px;
}
body{
background-color: black;
}
.about-us{
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}

.about-col{
    flex-basis: 48%;
    padding: 30px 2px;
}
.about-col img{
    width: 50%;
}

.about-col h1{
    padding-top: 0;
}
.about-col p{
    padding: 15px 0 25px;
}


/* Style the list inside the menu */




/* Clear floats after the columns */

</style>
<body>
 


    <div id="header"></div>

    
<section class="about-us">
    
    <div class="row">
        <div class="about-col">
            <h1 style = "color:brown;font-family:Georgia, 'Times New Roman', Times, serif;font-size:50px;font-style:italic;"><ul>About Us</ul></h1>
            <p style = "color:white;font-family:georgia,garamond,serif;font-size:20px;font-style:italic;">GoGig is a ticket  booking/selling website looking to support independant concert/gig organizers who have issues with having a safe and secure website to handle their transactions..</p>
            <p style = "color:white;font-family:georgia,garamond,serif;font-size:20px;font-style:italic;"> All payments will be done on the website where we enable local gig organizers to advertise their events here. </p>
            <p style = "color:white;font-family:georgia,garamond,serif;font-size:20px;font-style:italic;"> We provide an easy and reliable way for concert-goers to ensure that their booking won't be lost in the sea of payments and name-logging that the organizers have to do.</p>
        </div>
        <div class="about-col">
            <img src="image1.png"> 
        </div>
        <h4 style = "color:brown;font-family:Georgia, 'Times New Roman', Times, serif;font-size:50px;right:450px;font-style:italic">Contact Us</h4>
        <p style = "color:white;position:absolute;top:550px;right:450px;">PHONE NUMBER:+60184066925</p>
        <p style = "color:white;position:absolute;top:600px;right:500px;">EMAIL:Gogig@gmail.com</p>
    </div>

</section>

<div id="footer"></div>
 

    <!-- JavaScripts -->
    <script src="slide.js"></script>
    <script>
        // JavaScript to include header and footer
        fetch('header.html')
            .then(response => response.text())
            .then(data => document.getElementById('header').innerHTML = data);

        fetch('footer.html')
            .then(response => response.text())
            .then(data => document.getElementById('footer').innerHTML = data);
    </script>

</body>

</html>
