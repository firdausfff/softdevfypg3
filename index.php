<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="icon" type="image/x-icon" href="assets/logo/favicon.png">
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

<body>

    <div id="header"></div>

    <!-- Sliding Pictures -->

    <div class="container">
        <!-- Image Slider -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><img src="assets/banner/pleasantrees.png" alt="Image 1"></div>
                <div class="slide"><img src="assets/banner/risingfest.png" alt="Image 2"></div>
                <div class="slide"><img src="assets/banner/indienasional.png" alt="Image 3"></div>
                <div class="slide"><img src="assets/banner/indiepologies3.png" alt="Image 4"></div>
                <div class="slide"><img src="assets/banner/unity.png" alt="Image 5"></div>
            </div>
            <div class="slidernavigation">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </div>

        <!-- Section 1: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Trending Events</h2>
            <div class="card-container">
                <div class="card">
                    <a href="productpage.html">
                        <img src="assets/images/indiepologies2.png" alt="Card 1">
                    </a>
                    <div class="content">
                        <h2>Indiepologies Vol. 2 </h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/risingfest.png" alt="Card 2">
                    </a>
                    <div class="content">
                        <h2>Rising Fest 8</h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/pleasentrees.png" alt="Card 3">
                    </a>
                    <div class="content">
                        <h2>Pleasantrees : Thought I'd let you know</h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/indienasional.png" alt="Card 3">
                    </a>
                    <div class="content">
                        <h2>Indienasional Vol. 6</h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/pitstop.png" alt="Card 3">
                    </a>
                    <div class="content">
                        <h2>Pitstop DJ Night</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Upcoming Events</h2>
            <div class="card-container">
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/indiepologies3.png" alt="Card 4">
                    </a>
                    <div class="content">
                        <h2>Indiepologies Vol. 3</h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/unity.png" alt="Card 5">
                    </a>
                    <div class="content">
                        <h2>Unity</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Past Events</h2>
            <div class="card-container">
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/monsoon.png" alt="Card 7">
                    </a>
                    <div class="content">
                        <h2>Monsoon Madness</h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/rotanlot.png" alt="Card 8">
                    </a>
                    <div class="content">
                        <h2>Rotan Lot Holiday Home Market</h2>
                    </div>
                </div>
                <div class="card">
                    <a href="productpage.html">
                    <img src="assets/images/magnificent.png" alt="Card 9">
                    </a>
                    <div class="content">
                        <h2>Magnificent 8 , Volume 22</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer"></div>
 

    <!-- JavaScripts -->
    <script src="scripts/slider.js"></script>
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