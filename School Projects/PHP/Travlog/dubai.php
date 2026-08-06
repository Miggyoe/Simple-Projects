<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubai Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Dubai hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1200&auto=format&fit=crop') no-repeat center center;
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
            <h1>Dubai, UAE</h1>
        </div>
        <p>Step into a world of golden deserts and record-breaking architecture, where ultra-modern luxury seamlessly flows into historic Arabian heritage.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 6 Days, 5 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Premium Hotel</div>
            <div class="badge-item">• Burj Khalifa & Desert Safari Included</div>
            <div class="badge-item">• 5-8 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Arabian Luxury & Oasis</p>
            <p class="plan-sub">All-inclusive 6D5N golden Middle Eastern escape</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Dubai International)</li>
                <li>4-Star Premium Hotel Stay in Downtown or Deira Core</li>
                <li>Daily International Buffet Breakfast Vouchers</li>
                <li>Burj Khalifa 124th & 125th Floor Observatory Ticket</li>
                <li>4x4 Desert Safari Ride with BBQ Buffet Dinner Pass</li>
            </ul>

            <div class="price-tag">₱79,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Arabian+Luxury+and+Oasis&price=79999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🏙️</div>
                <div class="activity-text">
                    <strong>Burj Khalifa At The Top Pass</strong>
                    <span>Ascend the world's tallest tower to level 124 for jaw-dropping open-air panoramic views across the Arabian Gulf.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🐪</div>
                <div class="activity-text">
                    <strong>4x4 Desert Dune Bashing</strong>
                    <span>Thrill your senses speeding over red sand dunes, ride camels, and enjoy traditional Tanoura dance performances.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">⛲</div>
                <div class="activity-text">
                    <strong>Dubai Mall & Fountain Show</strong>
                    <span>Explore the planet's largest retail hub and watch the magnificent choreography of the shooting water fountains.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🕌</div>
                <div class="activity-text">
                    <strong>Old Dubai & Gold Souk Heritage</strong>
                    <span>Cross Dubai Creek on a traditional Abra wooden boat to shop for rich spices and gold jewelry across historic market alleys.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🖼️</div>
                <div class="activity-text">
                    <strong>The Dubai Frame Entry</strong>
                    <span>Walk across a towering luminous glass bridge connecting the architectural views of Old Dubai to the New Dubai skyline.</span>
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
                        <h4>Arrival, Hotel Check-In & Dubai Marina Stroll</h4>
                        <p>Land at Dubai International Airport and take a comfortable private shuttle transit straight to your premium city hotel. Rest up, then enjoy a late evening walk along the neon-lit yachts of Dubai Marina.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Modern City Tour, Burj Khalifa & Fountain Spectacle</h4>
                        <p>Drive past the sail-shaped Burj Al Arab hotel. In the afternoon, head inside the vast Dubai Mall and ascend to the top observation decks of the Burj Khalifa. Cap the night watching the spectacular fountains dance.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Old Dubai Heritage, Abra Boat Ride & Golden Souks</h4>
                        <p>Dive into history in the Al Fahidi Cultural Neighborhood. Cross the historic waters of the creek on a traditional Abra water taxi to haggle for rich saffron, dates, and fine jewelry in the Spice and Gold Souks.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>The Dubai Frame & Thrilling Desert Evening Safari</h4>
                        <p>Stand over the glass-bottom walkway inside the massive Dubai Frame. At noon, buckle into a 4x4 land cruiser for an exhilarating desert safari, followed by camel riding and a premium starlit Arabic BBQ camp buffet.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Palm Jumeirah Boardwalk & Future Museum Photo-Op</h4>
                        <p>Take the Monorail out across the palm-shaped artificial island of Palm Jumeirah to admire the luxurious Atlantis resort. In the afternoon, marvel at the beautifully detailed cursive architecture of the Museum of the Future.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 6</div>
                    <div class="day-info">
                        <h4>Souvenir Shopping, Local Treats & Departure</h4>
                        <p>Enjoy a leisurely morning exploring local dates and traditional gifts at Souk Madinat Jumeirah. Pick up final keepsakes before checking out and boarding your scheduled airport transfer flight back home.</p>
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