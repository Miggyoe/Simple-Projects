<?php
session_start();
// Optional: Redirect to login if they try to access packages without an account
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
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
    <div class="main-content-layout">
        <div class="left-column">
            <div class="cards-glass-box">
                <div class="card-grid-row">
                    <!-- BAGUIO updated-->
                    <div class="travel-card">
                        <img src="https://static.tripzilla.ph/media/92692/conversions/free-tourist-spots-baguio-w1024.webp" alt="Baguio City">
                        <div class="card-info">
                            <h5>Baguio City</h5>
                            <p class="price">₱8,999</p>
                            <p class="duration">5 days, 4 nights package</p>
                            <a href="baguio.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- HONGKONG updated-->
                    <div class="travel-card">
                        <img src="https://ik.imgkit.net/3vlqs5axxjf/external/ik-seo/http://images.ntmllc.com/v4/destination/Hong-Kong/Hong-Kong-city/112086_SCN_HongKong_iStock466733790_Z8C705/Hong-Kong-Scenery.jpg?tr=w-780%2Ch-437%2Cfo-auto" alt="Hong Kong">
                        <div class="card-info">
                            <h5>Hong Kong</h5>
                            <p class="price">₱34,999</p>
                            <p class="duration">7 days, 6 nights package</p>
                            <a href="hongkong.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- SINGAPORE -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1525625293386-3f8f99389edd?w=300" alt="Singapore">
                        <div class="card-info">
                            <h5>Singapore</h5>
                            <p class="price">₱38,999</p>
                            <p class="duration">4 days, 3 nights package</p>
                            <a href="singapore.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div> 
                    </div>
                    <!-- FRANCE -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=300" alt="Paris">
                        <div class="card-info">
                            <h5>Paris, France</h5>
                            <p class="price">₱89,999</p>
                            <p class="duration">7 days, 6 nights package</p>
                            <a href="paris.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- NEW YORK -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=300" alt="New York">
                        <div class="card-info">
                            <h5>New York, USA</h5>
                            <p class="price">₱119,999</p>
                            <p class="duration">7 days, 6 nights package</p>
                            <a href="newyork.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                </div>
                <div class="card-grid-row">
                    <!-- DUBAI -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=300" alt="Dubai">
                        <div class="card-info">
                            <h5>Dubai, UAE</h5>
                            <p class="price">₱79,999</p>
                            <p class="duration">6 days, 5 nights package</p>
                            <a href="dubai.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- SIARGAO -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=300" alt="Siargao">
                        <div class="card-info">
                            <h5>Siargao Island</h5>
                            <p class="price">₱13,999</p>
                            <p class="duration">4 days, 3 nights package</p>
                            <a href="siargao.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- THAILAND -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1508009603885-50cf7c579365?w=300" alt="Bangkok">
                        <div class="card-info">
                            <h5>Bangkok, Thailand</h5>
                            <p class="price">₱33,999</p>
                            <p class="duration">4 days, 3 nights package</p>
                            <a href="bangkok.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- CEBU -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?w=300" alt="Cebu">
                        <div class="card-info">
                            <h5>Cebu City & Moalboal</h5>
                            <p class="price">₱11,999</p>
                            <p class="duration">3 days, 2 nights package</p>
                            <a href="cebu.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                    <!-- MALDIVES -->
                    <div class="travel-card">
                        <img src="https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=300" alt="Maldives">
                        <div class="card-info">
                            <h5>Maldives</h5>
                            <p class="price">₱109,999</p>
                            <p class="duration">5 days, 4 nights package</p>
                            <a href="maldives.php" class="view-plan-btn" style="display:inline-block; text-decoration:none; margin-top:5px; padding: 5px 10px; font-size:12px;">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-column">
            <div class="headline-container">
                <h1 class="tagline">Explore Your Next Adventure</h1>
                <p class="sub-tagline">Book local and international packages with hotel, airfare and itinerary included.</p>
            </div>

            <div class="sidebar-box">
                <h3>Popular Destinations</h3>
                
                <div class="sidebar-row">
                    <div class="sidebar-details">
                        <h4>Palawan</h4>
                        <p>₱15,999</p>
                        <a href="palawan.php" class="view-plan-btn">View</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?w=150" alt="Palawan">
                </div>

                <div class="sidebar-row">
                    <div class="sidebar-details">
                        <h4>Tokyo, Japan</h4>
                        <p>₱55,999</p>
                        <a href="tokyo.php" class="view-plan-btn">View</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?w=150" alt="Tokyo">
                </div>

                <div class="sidebar-row">
                    <div class="sidebar-details">
                        <h4>Boracay</h4>
                        <p>₱12,999</p>
                        <a href="boracay.php" class="view-plan-btn">View</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1583212292454-1fe6229603b7?w=150" alt="Boracay">
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
<style>
body{
    display: flex;
    flex-direction: column;
    min-height: 100vh;

    /* Move background image here */
    background: #2b765d;
    background-image: linear-gradient(rgba(45, 146, 112, 0.75), rgba(43, 118, 93, 0.75)), 
                    url('icons/bg-travel.png');
    background-blend-mode: multiply;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    
}
        
.main-content-layout {
    display: flex;
    flex: 1; /* Pushes the footer down nicely */
    padding: 20px 40px;
    gap: 30px;
    align-items: flex-start;
}

/* Left side holds the cards, right side holds the text/sidebar */
.left-column {
    flex: 2.5; /* Takes up more visual width space */
}

.right-column {
    flex: 1; /* Takes up sidebar scale space */
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* ==========================================
    LEFT CONTAINER: 10-CARD GLASS CONTAINER
   ========================================== */
.cards-glass-box {
    background-color: rgba(255, 255, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 24px;
    padding: 25px;
    padding-bottom: 30px;
    backdrop-filter: blur(8px);
}

.card-grid-row {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 15px;
}

.card-grid-row:last-child {
    margin-bottom: 0;
}

/* Individual Vertical Travel Card Layout */
.travel-card {
    background-color: rgba(255, 255, 255, 0.85);
    flex: 1;
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.travel-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.travel-card a{
    text-decoration: none;
}

.card-info {
    padding: 10px;
    text-align: center;
}

.card-info h5 {
    color: #333333;
    font-size: 0.85rem;
    font-weight: 700;
    margin-bottom: 2px;
}

.card-info .price {
    color: #2b765d;
    font-size: 0.8rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.card-info .duration {
    color: #666666;
    font-size: 0.65rem;
    line-height: 1.2;
}

/* ==========================================
    RIGHT CONTAINER: TAGLINE & SIDEBAR PANEL
   ========================================== */
.headline-container {
    text-align: right;
    color: white;
}

.headline-container .tagline {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 5px;
    line-height: 1.1;
}

.headline-container .sub-tagline {
    font-size: 1rem;
    font-weight: 400;
    opacity: 0.9;
}

/* The Frosted Glass Sidebar Frame */
.sidebar-box {
    background-color: rgba(255, 255, 255, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 20px;
    padding: 20px;
    backdrop-filter: blur(10px);
}

.sidebar-box h3 {
    text-align: center;
    color: #1f1f1f;
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 15px;
}

/* Single Destination Item row */
.sidebar-row {
    background: white;
    border-radius: 14px;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.03);
}

.sidebar-row:last-child {
    margin-bottom: 0;
}

.sidebar-details {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.sidebar-details h4 {
    color: #333333;
    font-size: 0.95rem;
    margin-bottom: 2px;
}

.sidebar-details p {
    color: #666666;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 8px;
}

.view-plan-btn {
    text-decoration: none;
    color: white;
    border: 1px solid #cccccc;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 14px;
    border-radius: 20px;
    transition: all 0.2s;
    background:#2b765d;
}

.view-plan-btn:hover {
    background: #333333;
    color: white;
    border-color: #333333;
}

.sidebar-row img {
    width: 200px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
}

/* ==========================================
    FOOTER ADJUSTMENTS (Ensure it sticks clean)
   ========================================== */
footer {
    margin-top: auto; /* Keeps footer pinned directly to base */
}
    </style>
</body>
</html>

