



<!DOCTYPE html>
<html lang="en">

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

<body>

    <div id="header"></div>

    <!-- Sliding Pictures -->

    <div class="container">
        <!-- Image Slider -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><img src="assets/banner/banner (4).png" alt="Image 1"></div>
                <div class="slide"><img src="assets/banner/banner (5).png" alt="Image 2"></div>
                <div class="slide"><img src="assets/banner/banner (1).png" alt="Image 3"></div>
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
                        <img src="assets/images/square (1).png" alt="Card 1">
                    </a>
                    <div class="content">
                        <h2>Card Title 1</h2>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/square (2).png" alt="Card 2">
                    <div class="content">
                        <h2>Card Title 2</h2>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/square (3).png" alt="Card 3">
                    <div class="content">
                        <h2>Card Title 3</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Upcoming Events</h2>
            <div class="card-container">
                <div class="card">
                    <img src="assets/images/square (4).png" alt="Card 4">
                    <div class="content">
                        <h2>Card Title 4</h2>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/square (5).png" alt="Card 5">
                    <div class="content">
                        <h2>Card Title 5</h2>
                    </div>
                </div>
                <div class="card">
                    <img src="rawspiritsquare.png" alt="Card 6">
                    <div class="content">
                        <h2>Card Title 6</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Responsive CSS Cards -->
        <div class="card-section">
            <h2>Past Events</h2>
            <div class="card-container">
                <div class="card">
                    <img src="rawspiritsquare.png" alt="Card 7">
                    <div class="content">
                        <h2>Card Title 7</h2>
                    </div>
                </div>
                <div class="card">
                    <img src="rawspiritsquare.png" alt="Card 8">
                    <div class="content">
                        <h2>Card Title 8</h2>
                    </div>
                </div>
                <div class="card">
                    <img src="rawspiritsquare.png" alt="Card 9">
                    <div class="content">
                        <h2>Card Title 9</h2>
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
        fetch('customer/loggedinheader.php')
            .then(response => response.text())
            .then(data => document.getElementById('header').innerHTML = data);

        fetch('footer.html')
            .then(response => response.text())
            .then(data => document.getElementById('footer').innerHTML = data);
    </script>

</body>

</html>