<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <!-- Header -->
    <div class="header-index">
        <h1 id="travlog">Travlog</h1>
        <div class="navigation">
            <a href="index.php" class="nav-btn">Home</a>
            <a href="about_us.php" class="nav-btn">About Us</a>
            <a href="user_page.php" class="nav-btn">My Bookings</a>
            <a href="profile.php" class="nav-btn">Profile</a>
            <a href="login.php" id="profile-btn" onclick="return confirm('Are you sure you want to log out?')">Logout</a>
        </div>
    </div>
    <!-- Body -->
    <div class="body-1">
        <h1 class="tagline">Explore Your Next Adventure</h1>
        <p>Book local and international packages <br> with hotel, airfare and itenary included.</p>
        <br>
        <a href="packages.php" class="package">View All Packages</a>
    </div>
    <div class="body-2">
        <p id="popular-destination">Popular Destinations</p>
        <!-- Cards -->
        <div class="cards">
            <!-- Card 1 -->
            <a href="boracay.php">
                <div class="card-1">
                    <img src="https://images.lifestyleasia.com/wp-content/uploads/sites/6/2022/12/22224603/boracay-travel-guide-philippines-beach-1350x900.jpg?tr=w-1600" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5>Boracay</h5>
                    <p>5 days, 4 nights package</p>
                    <h5 id="price">₱12,999</h5>
                </div>
                </div>
            </a>
            <!-- Card 2 -->
            <a href="tokyo.php">
                <div class="card-2">
                    <img src="https://www.lot.com/content/dam/lot/lot-com/destination-photos/japonia/Tokyo-5%20.coreimg.jpg/1723628368208/Tokyo-5%20.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5>Tokyo, Japan</h5>
                    <p>7 days, 6 nights package</p>
                    <h5 id="price">₱55,999</h5>
                </div>
                </div>
            </a>
            <!-- Card 3 -->
            <a href="palawan.php">
                <div class="card-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Kayangan_Lake%2C_Coron_-_Palawan.jpg/1280px-Kayangan_Lake%2C_Coron_-_Palawan.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5>Palawan</h5>
                    <p>5 days, 3 nights package</p>
                    <h5 id="price">₱15,999</h5>
                </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Footers -->
    <footer>
        <!-- Footer 1 -->
        <div class="footer-1">
            <img src="https://cdn-icons-png.flaticon.com/128/701/701348.png" alt="">
            <div class="footer-text">
                <p><strong>Hotel Included</strong></p>
                <p>Comfortable accommodations</p>
            </div>
        </div>
        <!-- Footer 2 -->
         <div class="footer-2">
            <img src="https://cdn-icons-png.flaticon.com/128/9482/9482066.png" alt="">
            <div class="footer-text">
                <p><strong>Roundtrip Airfare</strong></p>
                <p>All packages include flights</p>
            </div>
        </div>
        <!-- Footer 3 -->
         <div class="footer-3">
            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="">
            <div class="footer-text">
                <p><strong>Complete Itinerary</strong></p>
                <p>Planned tours and activities</p>
            </div>
        </div>
        <!-- Footer 4 -->
         <div class="footer-4">
            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="">
            <div class="footer-text">
                <p><strong>Secure Booking</strong></p>
                <p>Safe and hassle free</p>
            </div>
        </div>
    </footer>
</body>
</html>

