<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hong Kong Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Hong Kong hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://ik.imgkit.net/3vlqs5axxjf/external/ik-seo/http://images.ntmllc.com/v4/destination/Hong-Kong/Hong-Kong-city/112086_SCN_HongKong_iStock466733790_Z8C705/Hong-Kong-Scenery.jpg?tr=w-780%2Ch-437%2Cfo-auto') no-repeat center center;
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
            <h1>Hong Kong</h1>
        </div>
        <p>Discover where vibrant street markets, soaring skyscrapers, and childhood magic meet under the iconic city skyline.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 7 Days, 6 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Premium Hotel</div>
            <div class="badge-item">• Disneyland Theme Park Pass Included</div>
            <div class="badge-item">• 2-4 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Magical City Explorer</p>
            <p class="plan-sub">All-inclusive 7D6N Asian metropolitan escape</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Hong Kong International)</li>
                <li>4-Star Hotel Lodging in Kowloon Core District</li>
                <li>Daily Classic Dim Sum Breakfast Vouchers</li>
                <li>Hong Kong Disneyland 1-Day Full Admission Pass</li>
                <li>Victoria Peak Tram & Sky Terrace 428 Combo Ticket</li>
            </ul>

            <div class="price-tag">₱34,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Hong+Kong+Magical+City+Explorer&price=34999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🏰</div>
                <div class="activity-text">
                    <strong>Disneyland Day Pass</strong>
                    <span>Immerse yourself in magical themed lands, watch festive character parades, and enjoy the spectacular evening fireworks.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🚠</div>
                <div class="activity-text">
                    <strong>Peak Tram Experience</strong>
                    <span>Ride the historic funicular railway up the steep mountain slope to the famous Victoria Peak scenic overlook.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏙️</div>
                <div class="activity-text">
                    <strong>Sky Terrace 428 Observatory</strong>
                    <span>Stand on the highest 360-degree viewing platform in the city for unparalleled panoramic views of Victoria Harbour.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🛍️</div>
                <div class="activity-text">
                    <strong>Mong Kok Street Markets</strong>
                    <span>Navigate the colorful neon lanes of the Ladies' Market and Temple Street Night Market for souvenirs and street food.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🚢</div>
                <div class="activity-text">
                    <strong>Star Ferry Harbor Crossing</strong>
                    <span>Cruise across historic waters on the iconic green and white ferry to catch a glimpse of the coastal skyscrapers.</span>
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
                        <h4>Arrival & Mong Kok Neon Street Markets</h4>
                        <p>Touch down at Hong Kong International Airport and take your private shuttle transit straight to your Kowloon hotel. After checking in, spend your evening exploring the lively stalls and street food of the Ladies' Market in Mong Kok.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Full Day Magic at Hong Kong Disneyland</h4>
                        <p>Have an early breakfast and head straight to the magical kingdom. Spend a full, unforgettable day enjoying world-class rides, exploring Tomorrowland and Fantasy Island, and watching the incredible castle night projections.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Victoria Peak Tram, Sky Terrace & Tsim Sha Tsui</h4>
                        <p>Board the iconic Peak Tram to ascend Victoria Peak and look across the harbor from Sky Terrace 428. Spend your afternoon strolling along the Tsim Sha Tsui Promenade and watching the Symphony of Lights show at night.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Lantau Island & Ngong Ping 360 Village</h4>
                        <p>Take a scenic cable car ride across hills and water to Lantau Island. Explore the culturally rich Ngong Ping Village, climb the steps to view the majestic Tian Tan Big Buddha, and stop by the peaceful Po Lin Monastery.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Ocean Park Marine Life & Thrill Rides</h4>
                        <p>Spend your day at Ocean Park, a premier theme park combining incredible marine animal exhibits, giant pandas, and high-velocity roller coasters perched right over the edge of the scenic South China Sea cliffs.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 6</div>
                    <div class="day-info">
                        <h4>Central District Art Walk & Star Ferry Cruise</h4>
                        <p>Ride the Central-Mid-Levels Escalators to check out vibrant street art murals and hip cafés. In the late afternoon, cruise across Victoria Harbour on the historic Star Ferry to capture the iconic skyline views.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 7</div>
                    <div class="day-info">
                        <h4>Dim Sum Tasting, Souvenir Shopping & Departure</h4>
                        <p>Indulge in an authentic morning dim sum feast at a local teahouse. Revisit local shopping hubs for traditional pastries or keepsakes before checking out and boarding your scheduled shuttle back to the airport.</p>
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