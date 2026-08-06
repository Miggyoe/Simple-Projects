<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangkok Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Bangkok hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1508009603885-50cf7c579365?q=80&w=1200&auto=format&fit=crop') no-repeat center center;
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
            <h1>Bangkok, Thailand</h1>
        </div>
        <p>Immerse yourself in the vibrant capital of Thailand, where ornate golden shrines, bustling canal markets, and legendary street food await.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 4 Days, 3 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Premium Hotel</div>
            <div class="badge-item">• Grand Palace & Chao Phraya Cruise Included</div>
            <div class="badge-item">• 2-4 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Golden Temples & Tuk-Tuks</p>
            <p class="plan-sub">All-inclusive 4D3N exotic cultural and shopping retreat</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Suvarnabhumi Airport)</li>
                <li>4-Star Hotel Stay located in Bangkok City Center</li>
                <li>Daily Authentic Thai & International Buffet Breakfast</li>
                <li>Grand Palace & Wat Phra Kaew Guided Entry Ticket</li>
                <li>Chao Phraya River Dinner Cruise Pass</li>
            </ul>

            <div class="price-tag">₱33,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Bangkok+Golden+Temples+and+Tuk+Tuks&price=33999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">👑</div>
                <div class="activity-text">
                    <strong>The Grand Palace Tour</strong>
                    <span>Explore the spectacular royal courts and marvel at the sacred Emerald Buddha housed within Wat Phra Kaew.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🙏</div>
                <div class="activity-text">
                    <strong>Wat Pho Reclining Buddha</strong>
                    <span>Visit one of Bangkok's oldest temples to witness the majestic, 46-meter-long gold-plated reclining Buddha statue.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🚢</div>
                <div class="activity-text">
                    <strong>Chao Phraya Dinner Cruise</strong>
                    <span>Dine on a luxury double-decker vessel while floating past beautifully lit riverside landmarks like Wat Arun.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🛍️</div>
                <div class="activity-text">
                    <strong>Chatuchak Weekend Market</strong>
                    <span>Navigate the legendary open-air market network boasting thousands of local fashion, craft, and food stalls.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🍜</div>
                <div class="activity-text">
                    <strong>Jodd Fairs Night Market Safari</strong>
                    <span>Indulge in an endless feast of iconic local street delicacies like spicy pork bone soup and classic Pad Thai.</span>
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
                        <h4>Arrival, Hotel Check-In & Jodd Fairs Night Market</h4>
                        <p>Touch down at Suvarnabhumi Airport and ride your private shuttle transit straight to your central city hotel. Unwind from your flight, then kick off the evening diving into the modern street-food alleys and shopping lines of Jodd Fairs.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Grand Palace Heritage & Illuminated River Cruise</h4>
                        <p>Dedicate your morning to exploring the breathtaking architecture of the Grand Palace and Wat Pho. In the afternoon, shop around the high-end iconSIAM mall complex, before boarding your luxury dinner cruise along the Chao Phraya River.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Chatuchak Shopping Extravaganza & Pratunam Markets</h4>
                        <p>Spend a bustling morning navigating the endless, colorful shopping alleys of Chatuchak Market (or Platinum Fashion Mall on weekdays). Cap the afternoon hunting bargains or grabbing street-side Thai massages around the Pratunam area.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Erawan Shrine Visit, Souvenir Hunting & Departure</h4>
                        <p>Pay a peaceful morning visit to the sacred Erawan Shrine to view traditional dance offerings. Pick up local Thai silk, snacks, or souvenirs at CentralWorld before checking out and boarding your shuttle back to the airport.</p>
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