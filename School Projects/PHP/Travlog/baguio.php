<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baguio City Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Baguio hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://static.tripzilla.ph/media/92692/conversions/free-tourist-spots-baguio-w1024.webp') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body>

    <!-- Header Navigation Include -->
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

    <!-- Hero Feature Frame -->
    <div class="hero-banner">
        <div class="hero-location">
            <img src="https://cdn-icons-png.flaticon.com/128/9131/9131546.png" alt="Map Pin">
            <h1>Baguio City, Philippines</h1>
        </div>
        <p>Breathe in the crisp mountain air, wander through towering pine forests, and experience the cozy charm of the Summer Capital.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 5 Days, 4 Nights</div>
            <div class="badge-item">• Roundtrip Land Transit</div>
            <div class="badge-item">• Premium Transient Stay or Hotel</div>
            <div class="badge-item">• Strawberry Picking & Camp John Hay Pass Included</div>
            <div class="badge-item">• 2-6 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Highland Mountain Retreat</p>
            <p class="plan-sub">All-inclusive 5D4N refreshing countryside escape</p>
            
            <ul class="benefit-list">
                <li>Roundtrip Private Land Transit (Manila - Baguio Terminal)</li>
                <li>Premium Hotel or Cozy Transient Lodging near Session Road</li>
                <li>Daily Complimentary Breakfast Vouchers</li>
                <li>La Trinidad Strawberry Farm Guided Entry Access</li>
                <li>Camp John Hay Historical Core & Eco-Trail Pass</li>
            </ul>

            <div class="price-tag">₱8,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Baguio+Highland+Mountain+Retreat&price=8999" class="btn-booking">Book This Spot Now</a>
                <?php else: ?>
                    <p class="login-notice"><a href="login.php">Log in</a> to save slots for this package tour.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Column 2: Included Activities Checklist -->
        <div class="content-card">
            <h3>Included Activities</h3>
            <p class="plan-sub">Main highlights you will experience</p>

            <div class="activity-item">
                <div class="activity-icon">🍓</div>
                <div class="activity-text">
                    <strong>La Trinidad Strawberry Picking</strong>
                    <span>Walk along muddy rows of vibrant farm beds to harvest fresh, sun-ripened strawberries completely by hand.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🌲</div>
                <div class="activity-text">
                    <strong>Camp John Hay Historical Walk</strong>
                    <span>Stroll along pine-laden forest walkways, explore the Bell Amphitheater, and conquer the Yellow Trail path.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🛶</div>
                <div class="activity-text">
                    <strong>Burnham Park Swan Boat Ride</strong>
                    <span>Navigate a traditional colorful swan boat across the iconic calm waters of the park’s central lagoon.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🗿</div>
                <div class="activity-text">
                    <strong>Tam-awan Village Cultural Tour</strong>
                    <span>Immerse your senses in authentic Cordilleran heritage, traditional Ifugao huts, and regional artistic exhibitions.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏰</div>
                <div class="activity-text">
                    <strong>The Mansion & Mines View Overlook</strong>
                    <span>Snap photos outside the official presidential summer home, then marvel at the panoramic view of the gold mines below.</span>
                </div>
            </div>
        </div>

        <!-- Column 3: Chronological Itinerary Grid -->
        <div class="content-card">
            <h3>Tour Itinerary Schedule</h3>
            
            <div class="timeline">
                <div class="timeline-day">
                    <div class="day-badge">Day 1</div>
                    <div class="day-info">
                        <h4>Arrival, Hotel Check-In & Burnham Park Leisure</h4>
                        <p>Depart early from Manila and ascend the scenic Kennon Road or Marcos Highway. Check into your cozy lodging, then spend a relaxing afternoon driving a swan boat at Burnham Park or walking down Session Road.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Mines View, The Mansion & Wright Park Ride</h4>
                        <p>Enjoy a crisp morning overlook at Mines View Park, followed by a tour of the Good Shepherd Convent for souvenirs. Take photographs outside the gates of The Mansion and walk down the pine steps of Wright Park.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>La Trinidad Strawberry Picking & Tam-awan Village</h4>
                        <p>Head slightly outside the city core to the vast strawberry fields of La Trinidad for an immersive harvest experience. Spend your afternoon wandering through the mountain tribal paths and artwork displays at Tam-awan Village.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Camp John Hay Exploration & Botanical Garden</h4>
                        <p>Spend a quiet, foggy morning walking the peaceful trails of Camp John Hay. In the afternoon, visit the sprawling Baguio Botanical Garden to view beautiful structural pocket gardens and stone monuments.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Public Market Market Pasalubong & Departure</h4>
                        <p>Grab a warm cup of local Benguet coffee for breakfast. Head down to the Baguio Public Market to stock up on fresh Ube jam, peanut brittle, and local handicrafts before boarding your land shuttle back home.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Standard Footer System Component -->
    <footer>
        <div class="footer-1">
            <img src="https://cdn-icons-png.flaticon.com/128/701/701348.png" alt="Hotel">
            <div class="footer-text"><p><strong>Hotel Included</strong></p><p>Comfortable accommodations</p></div>
        </div>
        <div class="footer-2">
            <img src="https://cdn-icons-png.flaticon.com/128/9482/9482066.png" alt="Flight">
            <div class="footer-text"><p><strong>Roundtrip Airfare</strong></p><p>All packages include flights</p></div>
        </div>
        <div class="footer-3">
            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="Itinerary">
            <div class="footer-text"><p><strong>Complete Itinerary</strong></p><p>Planned tours and activities</p></div>
        </div>
        <div class="footer-4">
            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="Secure">
            <div class="footer-text"><p><strong>Secure Booking</strong></p><p>Safe and hassle free</p></div>
        </div>
    </footer>

</body>
</html>