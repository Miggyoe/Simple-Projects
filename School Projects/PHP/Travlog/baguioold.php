<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baguio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <div class="header-index">
        <h1 id="travlog">Travlog</h1>
        <div class="navigation">
            <a href="index.php" class="nav-btn">Home</a>
            <a href="about_us.html" class="nav-btn">About Us</a>
            <a href="user_page.php" class="nav-btn">My Bookings</a>
            <a href="profile.php" class="nav-btn">Profile</a>
        </div>
    </div>
    <!-- Body -->
    <div class="body-1-baguio">
        <img src="https://static.tripzilla.ph/media/92692/conversions/free-tourist-spots-baguio-w1024.webp" alt="">
        <div class="body-1-baguio-text">
            <div class="body-1-baguio-text-location">
                <img src="https://cdn-icons-png.flaticon.com/128/14453/14453595.png" alt="">
                <h1 class="tagline">Baguio, Philippines</h1>
            </div>
            <p>Book local and international packages <br> with hotel, airfare and itenary included.</p>
           <br>
           <div class="info">   
                <h2>• 5 Days, 4 Nights</h2>
                <h2>• Roundtrip Airfare</h2>
                <h2>• Hotel Included</h2>
                <h2>• 2-6 Pax</h2>
           </div>
           
        </div>   
    </div>
    <div class="mid">
    <div class="body-2-baguio">
        <p id="popular-destination">Package Plan</p>
        <!-- Cards -->
        <div class="cards">
            <!-- Card 1 -->
                <div class="card-1">
                <div class="card-body">
                    <h5>Standard Plan</h5>
                    <p>5 days, 4 nights package</p>
                    <div class="benefits1">
                        <p>• Roundtrip Airfare (Manila - Caticlan)</p>
                        <p>• 3-Star Hotel Accommodation</p>  
                        <p>• Daily Breakfast</p>
                        <p>• Island Hopping Tour</p>
                        <p>• Airport Transfers</p>
                    </div>
                    <h5 id="price">₱8,999</h5>
                </div>
                </div>
        </div>
    </div>
    <div class="body-3">
        <p id="itinerary">Itinerary</p>
        <!-- Cards -->
        <div class="cards">
            <!-- Card 2 -->
                <div class="card-2">
                <div class="card-body2">
                    <h5>5 Days, 4 Nights</h5> <br>
                    <div class="benefits">
                        <div class="day1">
                            <h2>Day 1</h2>
                            <h3>Arival</h3>
                        </div>
                            <p>Airport pick-up and hotel check-in. Free time.</p>
                        <div class="day2">
                            <h2>Day 2</h2>
                            <h3> Island Hopping Tour</h3>
                        </div>
                            <p>Visit Crocodile Island, Crystal Cove Island, Puka Beach, and more.</p> 
                        <div class="day3">
                            <h2>Day 3</h2>
                            <h3>Land Tour</h3>
                        </div>
                            <p>Panoramic view, Willy's Rock, D'Mall, local shops.</p> 
                        <div class="day4">
                            <h2>Day 4</h2>
                            <h3>Free Time</h3>
                        </div>
                            <p>Enjoy the beach or do water activities.</p> 
                        <div class="day5">
                            <h2>Day 5</h2>
                            <h3>Departure</h3>
                        </div>
                            <p>Hotel checkout and airport drop-off.</p> 
                    </div>
                    <div class="booking-section">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <form action="checkout.php" method="GET">
                                <input type="hidden" name="package_id" value="101">
                                <a href="checkout.php?package_name=Baguio+City&price=8999" class="btn-confirm" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">Book Now</a>
                            </form>
                        <?php else: ?>
                            <p><a href="login.php">Log in</a> to reserve your spot for this tour!</p>
                        <?php endif; ?>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </div>
    <!-- Footers -->
    <footer>
        <!-- Footer 1 -->
        <div class="footer-1">
            <img src="https://cdn-icons-png.flaticon.com/128/701/701348.png" alt="">
            <div class="footer-text">
                <p>Hotel Included</p>
                <p>Comfortable accomodations</p>
            </div>
        </div>
        <!-- Footer 2 -->
         <div class="footer-2">
            <img src="https://cdn-icons-png.flaticon.com/128/9482/9482066.png" alt="">
            <div class="footer-text">
                <p>Roundtrip Airfare</p>
                <p>All packages include flights</p>
            </div>
        </div>
        <!-- Footer 3 -->
         <div class="footer-3">
            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="">
            <div class="footer-text">
                <p>Complete Itinenary</p>
                <p>Planned tours and activities</p>
            </div>
        </div>
        <!-- Footer 4 -->
         <div class="footer-4">
            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="">
            <div class="footer-text">
                <p>Secure Booking</p>
                <p>Safe and hassle free</p>
            </div>
        </div>
    </footer>
    <style>
.body-1-baguio{
    background: #2b765d;
    color: white;
    padding: 30px;
    padding-bottom: 50px;
    background-image: url(icons/bg-travel.png);
    background-blend-mode: multiply;
    background-position: left center;
    display: flex;
}
.body-1-baguio img{
    width: 500px;
    height: 300px;
}

.body-1-baguio-text{
    margin-left: 50px;
    margin-top: 80px;
}

.body-1-baguio-text p{
    margin-left: 50px;
}

.body-1-baguio-text-location{
    display: flex;
}
.body-1-baguio-text-location img{
    width: 50px;
    height: 50px;
}
.info{
    display: flex;
}
.info h2{
    padding: 10px;
    background: #2b765dc2;
    margin-left: 10px;
    border-radius: 20px;
    padding-right: 20px;
}
.benefits1, .benefits{
    background: #d1f7ea;
    padding: 10px;

}
.benefits1, .benefits {    
    color: black;
}
.benefits p{
    margin-left: 120px;
    margin-top: -30px;
    color: black;
}

.body-3{
    color: white;
}

.day1, .day2, .day3, .day4, .day5{
    display: flex;
    margin-left: 15px;
}

.day1 h2, .day2 h2, .day3 h2, .day4 h2, .day5 h2{
    background: #2b765dc2   ;
    border-radius: 20px;
    padding: 5px;
}

.day1 h3, .day2 h3, .day3 h3, .day4 h3, .day5 h3{
    margin-left: 30px;
}
.card-1{
    width: 900px;
    align-items: left;
    justify-content: left;
    background: #ffffff;
    border: 5px solid #3DB489;

}
.card-1 p{
    color: black;
}

.card-body {
    margin-left: 0px;
}
.card-body h5 {
    color: #3DB489;
}
.card-body2 h5 {
    color: black;
    margin-left:17px;
}
.card-2{
    color: #0000;
    width: 700px;
    align-items: left;
    justify-content: left;
    background: #d1f7ea;
}

.cards{
    display: flex;
    align-items: left;
    justify-content: left;
}
#popular-destination{
    display: flex;
    justify-content: left;
    align-items: left;
    font-weight: 1px;
    font-size: x-large;
    margin-top: 25px;
    margin-bottom: -25px;
    margin-left: 50px;
    font-weight: 700;
    color: black;
}

#itinerary{
    display: flex;
    justify-content: left;
    align-items: left;
    font-weight: 1px;
    font-size: x-large;
    margin-top: 25px;
    margin-bottom: -25px;
    margin-left: 25px;
    font-weight: 700;
    color: black;
}

.mid{
    display: flex;
    margin: 10px;
    justify-content: center;
    
}
#check{
    width: 50px;
    height: 50px;
}
.body-2-baguio{
    margin-right: 100px;
    color: black;
}

.booking-section button:hover{
    background: darkgray;
    color: white;
    transition: .2s;
    
}
.booking-section button{
    display:flex;
    background: white;
    color: black;
    border-radius: 20px;
    margin: 10px;
    margin-left: 525px;
    margin-top: 20px;
    padding:10px;
    justify-content: center;
    text-align: center;
    font-size:25px;
    border:0px;
}
    </style>
</body>
</html>

