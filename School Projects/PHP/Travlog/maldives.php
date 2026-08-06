<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maldives Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Maldives hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=300') no-repeat center center;
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
            <h1>Maldives</h1>
        </div>
        <p>Escape to paradise on Earth, where crystal-clear turquoise lagoons, infinite white-sand sandbars, and premium overwater villas create the ultimate tropical sanctuary.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 5 Days, 4 Nights</div>
            <div class="badge-item">• Roundtrip Airfare Included</div>
            <div class="badge-item">• Premium Beachfront Resort</div>
            <div class="badge-item">• Speedboat Transfers & Coral Reef Snorkeling Included</div>
            <div class="badge-item">• 2-6 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Paradise Lagoon & Luxury</p>
            <p class="plan-sub">All-inclusive 5D4N high-end international island getaway</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Velana International Airport)</li>
                <li>Premium Oceanfront Villa Resort Accommodation</li>
                <li>Daily Gourmet Buffet Breakfast and Full-Board Dining Options</li>
                <li>Roundtrip Speedboat Transfers from Malé Airport</li>
                <li>Complimentary Coral Reef Snorkeling & Kayaking Equipment Rental</li>
            </ul>

            <div class="price-tag">₱109,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Maldives+Paradise+Lagoon+and+Luxury&price=109999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🤿</div>
                <div class="activity-text">
                    <strong>House Reef Snorkeling Safari</strong>
                    <span>Swim directly over pristine house reefs teeming with colorful coral gardens, reef sharks, and vibrant schools of fish.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏝️</div>
                <div class="activity-text">
                    <strong>Sandbar Picnic Excursion</strong>
                    <span>Cruise out to a private, isolated white sandbar ringed by neon-blue shallow waters for sunbathing and photos.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🐬</div>
                <div class="activity-text">
                    <strong>Sunset Dolphin Cruise</strong>
                    <span>Board a traditional Dhoni boat and witness playful spinner dolphins leaping against a stunning golden horizon.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🛶</div>
                <div class="activity-text">
                    <strong>Crystal Clear Kayaking</strong>
                    <span>Paddle across the glassy, completely transparent island lagoon in a see-through kayak for incredible underwater visibility.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🌅</div>
                <div class="activity-text">
                    <strong>Beachside Starlit Dinner</strong>
                    <span>Savor a curated, high-end international multi-course dinner right on the soft sand under a clear night sky.</span>
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
                        <h4>Arrival, Speedboat Cruise & Resort Check-In</h4>
                        <p>Land at Velana International Airport in Malé. Board your designated premium speedboat transfer to skim across the azure water directly to your island resort. Check into your ocean-facing villa and spend a relaxing afternoon adjusting to island life.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Snorkeling Safari & Golden Hour Dolphin Cruise</h4>
                        <p>Gear up after breakfast for a guided snorkeling tour of the island’s thriving house reef. In the late afternoon, step aboard a traditional boat to seek out pods of spinner dolphins jumping during a beautiful Maldivian sunset.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Private Sandbar Escape & Water Sports</h4>
                        <p>Take a scenic morning boat trip to a secluded sandbar in the middle of the ocean for unmatched peace and swimming. Return to the resort for an afternoon of transparent kayaking, paddleboarding, or a premium spa session.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Leisure Island Exploration & Starlit Beach Feast</h4>
                        <p>Enjoy a completely open day to walk along the wooden walkways, swim in the infinity pools, or take photos by the water villas. In the evening, gather along the shoreline for a special all-inclusive culinary dinner right on the beach.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Sunrise Yoga, Final Lagoon Swim & Departure</h4>
                        <p>Catch a peaceful sunrise over the Indian Ocean. Enjoy a final tropical fruit and pastry breakfast spread, take a last dip in the crystal lagoon, and then check out to board your return speedboat back to the airport for your flight home.</p>
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