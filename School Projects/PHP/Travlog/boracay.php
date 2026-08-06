<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boracay Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Boracay hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1583212292454-1fe6229603b7?w=150') no-repeat center center;
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
            <h1>Boracay Island, Philippines</h1>
        </div>
        <p>Walk along the world-famous powder-white sands, dive into crystal-clear turquoise waters, and witness the most iconic golden sunsets in the tropics.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 4 Days, 3 Nights</div>
            <div class="badge-item">• Roundtrip Airfare Included</div>
            <div class="badge-item">• Beachfront Station Resort</div>
            <div class="badge-item">• Island Hopping & Paraw Sailing Included</div>
            <div class="badge-item">• 2-6 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Powder Sands & Sunsets</p>
            <p class="plan-sub">All-inclusive 4D3N domestic beach escape and island safari</p>
            
            <ul class="benefit-list">
                <li>Roundtrip Domestic Airfare (Manila - Caticlan Airport)</li>
                <li>Premium Mid-Station Beachfront Hotel Accommodations</li>
                <li>Daily Fresh Island-Style Buffet Breakfast Spreads</li>
                <li>Roundtrip Caticlan Airport to Resort Land & Jetty Transfers</li>
                <li>All-Inclusive Shared Island Hopping & Environmental Fees</li>
            </ul>

            <div class="price-tag">₱12,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Boracay+Powder+Sands+and+Sunsets&price=12999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">⛵</div>
                <div class="activity-text">
                    <strong>Sunset Paraw Sailing</strong>
                    <span>Coast along White Beach on a traditional double-outrigger sailboat as the sky transforms into shades of gold and purple.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏝️</div>
                <div class="activity-text">
                    <strong>Puka Shell Beach Excursion</strong>
                    <span>Escape the main crowds to relax on the unique, coarse-grained sands and wilder turquoise waters of Puka Beach.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🤿</div>
                <div class="activity-text">
                    <strong>Coral Garden Snorkeling</strong>
                    <span>Dive into protected marine sanctuaries teeming with colorful marine life, anemones, and schools of tropical fish.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🪨</div>
                <div class="activity-text">
                    <strong>Willy's Rock Landmark Visit</strong>
                    <span>Snap iconic photos at this volcanic tidal islet featuring a grotto structure positioned right in Station 1.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🍽️</div>
                <div class="activity-text">
                    <strong>D'Mall Dining & Market Exploration</strong>
                    <span>Stroll through the lively open-air market network for local souvenirs, street foods, and beachfront live music bars.</span>
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
                        <h4>Arrival, Island Transfer & White Beach Sunset Stroll</h4>
                        <p>Touch down at Caticlan Airport and enjoy a completely seamless guide-assisted land and boat transfer directly to your White Beach resort. Check in, unpack, and head straight to the shore to catch your first world-famous Boracay sunset.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Island Hopping, Marine Snorkeling & Puka Beach</h4>
                        <p>Board a motorized outrigger boat for an epic marine safari. Snorkel amidst the vibrant reefs of Coral Garden, swim in the calm turquoise waters of Tambisaan, and enjoy an extensive, relaxing lunchtime stopover at the scenic Puka Shell Beach.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Willy's Rock, Beachfront Leisure & Golden Paraw Sail</h4>
                        <p>Spend a leisurely morning taking photos at Willy’s Rock in Station 1 or trying out paddleboarding. In the late afternoon, climb aboard a traditional Paraw sailboat to glide across the water during the peak magic hour of sunset.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Morning Swim, D'Mall Souvenir Hunting & Departure</h4>
                        <p>Savor a final tropical fruit and coffee breakfast buffet spread. Take an early morning dip in the pristine turquoise ocean waves, pick up some dried mangoes and local handicrafts at D'Mall, and board your return jetty transfer back to the airport.</p>
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