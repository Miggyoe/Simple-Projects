<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Tokyo hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1503899036084-c55cdd92da26?w=150') no-repeat center center;
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
            <h1>Tokyo, Japan</h1>
        </div>
        <p>Immerse yourself in the ultimate fusion of neon-lit skyscrapers and timeless shrines, where cutting-edge pop culture meets historic Japanese tradition.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 5 Days, 4 Nights</div>
            <div class="badge-item">• Roundtrip Airfare Included</div>
            <div class="badge-item">• 4-Star Central Hotel</div>
            <div class="badge-item">• Mt. Fuji Day Tour & Shibuya Crossing Included</div>
            <div class="badge-item">• 3-5 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Neon Lights & Mt. Fuji</p>
            <p class="plan-sub">All-inclusive 5D4N premium cultural and modern city experience</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Narita/Haneda International)</li>
                <li>4-Star Premium Hotel Stay in Shinjuku or Tokyo Station Core</li>
                <li>Daily Authentic Japanese Buffet Breakfast Vouchers</li>
                <li>Guided Mt. Fuji & Lake Kawaguchiko Day Tour Passes</li>
                <li>Complimentary Tokyo Subway Unlimited 72-Hour Pass</li>
            </ul>

            <div class="price-tag">₱55,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Tokyo+Neon+Lights+and+Mt+Fuji&price=55999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🗻</div>
                <div class="activity-text">
                    <strong>Mt. Fuji & Kawaguchiko Tour</strong>
                    <span>Travel out to the iconic 5th Station of Mount Fuji and enjoy breathtaking seasonal lakeside panoramic views.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏮</div>
                <div class="activity-text">
                    <strong>Senso-ji Temple & Asakusa</strong>
                    <span>Walk down the historic Nakamise Shopping Street and enter Tokyo's oldest, most revered Buddhist temple site.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🚶‍♂️</div>
                <div class="activity-text">
                    <strong>Shibuya Crossing & Hachiko</strong>
                    <span>Be a part of the world's busiest pedestrian intersection and pay a visit to the legendary, faithful dog statue.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🎮</div>
                <div class="activity-text">
                    <strong>Akihabara Electric Town</strong>
                    <span>Explore the colorful paradise of gaming centers, multi-level electronics storefronts, and anime collectibles shop floors.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🗼</div>
                <div class="activity-text">
                    <strong>Tokyo Tower Evening Views</strong>
                    <span>Marvel at the stunning, beautifully lit city skyline from the main observation deck of this historic orange landmark.</span>
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
                        <h4>Arrival, Hotel Check-In & Shinjuku Neon Walk</h4>
                        <p>Touch down at the airport and enjoy a comfortable private shuttle transit straight to your central city hotel. Rest up, then kick off your night walking through the vibrant neon lights, towering structures, and local food alleys of Shinjuku.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Asakusa Heritage, Akihabara & Tokyo Tower Skyview</h4>
                        <p>Immerse yourself in history at Senso-ji Temple. Grab traditional snacks along Nakamise Street before diving into the tech and anime culture of Akihabara. Cap your evening viewing the city skyline from the main observation platform of Tokyo Tower.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Breathtaking Mt. Fuji & Lake Kawaguchiko Day Trip</h4>
                        <p>Board an air-conditioned tour coach to ascend Mount Fuji's 5th Station for panoramic alpine views. Enjoy a traditional Japanese set lunch, then spend a scenic afternoon snapping postcard-perfect photos along the beautiful shores of Lake Kawaguchiko.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Meiji Shrine, Harajuku Fashion & Shibuya Crossing</h4>
                        <p>Walk through the massive wooden torii gates of the peaceful Meiji Shrine. Afterward, head into the quirky fashion boutiques of Takeshita Street in Harajuku, then finish your day experiencing the exhilarating rush of the iconic Shibuya Crossing.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Tsukiji Outer Market Feast, Souvenir Hunting & Departure</h4>
                        <p>Spend your final morning indulging in fresh seafood, wagyu skewers, and sweet tamagoyaki at Tsukiji Outer Market. Pick up local treats like matcha treats or Tokyo Banana boxes before checking out and boarding your scheduled airport transfer flight back home.</p>
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