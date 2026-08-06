<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cebu & Moalboal Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Cebu/Moalboal hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?w=300') no-repeat center center;
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
            <h1>Cebu & Moalboal, Philippines</h1>
        </div>
        <p>From the historic Spanish heritage of the Queen City to the mesmerizing sardine runs and pristine coral drop-offs of Moalboal.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 3 Days, 2 Nights</div>
            <div class="badge-item">• Roundtrip Airfare Included</div>
            <div class="badge-item">• Premium Resort Lodging</div>
            <div class="badge-item">• Moalboal Sardine Run & City Tour Included</div>
            <div class="badge-item">• 2-6 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Culture & Coastline Escape</p>
            <p class="plan-sub">All-inclusive 3D2N historical city and marine wildlife tour</p>
            
            <ul class="benefit-list">
                <li>Roundtrip Domestic Airfare (Manila - Mactan-Cebu International)</li>
                <li>Comfortable Beachfront Resort Stay in Moalboal</li>
                <li>Daily Complimenting Local Island Breakfast Sets</li>
                <li>Private Air-Conditioned South Cebu Land Transfers</li>
                <li>Moalboal Island Hopping Boat & Marine Sanctuary Fees</li>
            </ul>

            <div class="price-tag">₱11,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Cebu+and+Moalboal+Culture+and+Coastline+Escape&price=11999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🐟</div>
                <div class="activity-text">
                    <strong>Moalboal Sardine Run</strong>
                    <span>Swim amidst millions of swirling sardines forming massive, breathtaking walls of silver just meters away from the shoreline.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🐢</div>
                <div class="activity-text">
                    <strong>Sea Turtle Snorkeling Encounter</strong>
                    <span>Explore the vibrant coral drop-off of Panagsama Beach to swim alongside wild sea turtles in their natural habitat.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">✝️</div>
                <div class="activity-text">
                    <strong>Cebu City Historical Tour</strong>
                    <span>Walk through history at Magellan's Cross, the ancient Basilica Minore del Santo Niño, and the stone walls of Fort San Pedro.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏛️</div>
                <div class="activity-text">
                    <strong>Temple of Leah & Sirao Garden</strong>
                    <span>Visit the grand, Roman-inspired mountain mausoleum and snap vibrant photos amidst the colorful flowers of Sirao.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏝️</div>
                <div class="activity-text">
                    <strong>Pescador Island Exploration</strong>
                    <span>Board a motorized outrigger boat to explore crystal-clear waters and thriving underwater biodiversity.</span>
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
                        <h4>Arrival, Highland Wonders & Historic City Tour</h4>
                        <p>Touch down at Mactan-Cebu Airport. Head straight up the mountains to visit the majestic Temple of Leah and the blooming rows of Sirao Flower Garden. Afterward, explore historical landmarks downtown before transferring south to your Moalboal resort.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Pescador Island, Sardine Run & Sea Turtles</h4>
                        <p>Wake up early for a spectacular marine safari. Boat out to Pescador Island for coral snorkeling, then head back to the coastline to marvel at the massive sardine run and view sea turtles grazing along the reef drop-offs.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Coastal Morning, Carcar Pasalubong Hunt & Departure</h4>
                        <p>Enjoy breakfast looking over the ocean waves. Check out of Moalboal and head north, stopping by Carcar City to purchase authentic local Chicharon and delicacies before catching your scheduled evening flight back home.</p>
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