<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New York Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for New York hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?q=80&w=1200&auto=format&fit=crop') no-repeat center center;
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
            <h1>New York City, USA</h1>
        </div>
        <p>Experience the electric energy of the Big Apple, from the neon glow of Times Square to the tranquil green pathways of Central Park.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 7 Days, 6 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Midtown Manhattan Hotel</div>
            <div class="badge-item">• Statue of Liberty & Empire State Pass Included</div>
            <div class="badge-item">• 5-10 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Big Apple Skyline & Culture</p>
            <p class="plan-sub">All-inclusive 7D6N premium American East Coast getaway</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - John F. Kennedy Airport)</li>
                <li>4-Star Hotel Stay located in Midtown Manhattan Core</li>
                <li>Daily Classic New York Style Diner Breakfast Options</li>
                <li>Statue of Liberty & Ellis Island Ferry Access Pass</li>
                <li>Empire State Building 86th Floor Observatory Ticket</li>
            </ul>

            <div class="price-tag">₱119,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Big+Apple+Skyline+and+Culture&price=119999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🗽</div>
                <div class="activity-text">
                    <strong>Statue of Liberty Cruise</strong>
                    <span>Board the scenic harbor ferry to Liberty Island to see America's iconic monument up close, followed by an Ellis Island museum tour.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏢</div>
                <div class="activity-text">
                    <strong>Empire State Observatory</strong>
                    <span>Ascend to the world-famous 86th-floor open-air observation deck for unparalleled 360-degree views of the Manhattan skyline.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🌳</div>
                <div class="activity-text">
                    <strong>Central Park Guided Walk</strong>
                    <span>Stroll past Bethesda Fountain, Bow Bridge, and Strawberry Fields tucked away inside the city's legendary urban oasis.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🎭</div>
                <div class="activity-text">
                    <strong>Times Square & Broadway District</strong>
                    <span>Soak in the massive glowing digital billboards of the Theater District and explore the bustling streets of Father Duffy Square.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🌉</div>
                <div class="activity-text">
                    <strong>Brooklyn Bridge Sunset Trek</strong>
                    <span>Walk across the historic Gothic-style suspension towers to catch breathtaking panoramic sunset views over the East River.</span>
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
                        <h4>Arrival, Hotel Check-In & Times Square Glow</h4>
                        <p>Land at JFK International Airport and take your private shuttle transit direct to your Midtown Manhattan hotel. Refresh yourself before stepping out to witness the brilliant, neon-lit atmosphere of Times Square at night.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Statue of Liberty Ferry & Financial District Heritage</h4>
                        <p>Catch the morning ferry from Battery Park to experience the Statue of Liberty and Ellis Island. In the afternoon, return to land to view the historic Wall Street corridor, the Charging Bull, and the poignant 9/11 Memorial pools.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Central Park, Fifth Avenue & Top of the Empire State</h4>
                        <p>Spend a peaceful morning walking or renting a bike through Central Park. In the afternoon, browse the high-end storefronts along famous Fifth Avenue, then cap off the night looking over the illuminated skyscrapers from the Empire State Building.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>The High Line, Chelsea Market & Greenwich Village</h4>
                        <p>Walk the elevated urban park trail of the High Line, built over an old historic rail track. Stop inside Chelsea Market for an artisanal lunch before spending your afternoon exploring the charming brownstone streets of Greenwich Village.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Grand Central Terminal, NY Public Library & DUMBO</h4>
                        <p>Admire the celestial ceiling of Grand Central Terminal and visit the majestic Rose Main Reading Room at the NYPL. Later, cross over into Brooklyn's DUMBO neighborhood for iconic photo backdrops frame-lit by the Manhattan Bridge.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 6</div>
                    <div class="day-info">
                        <h4>Metropolitan Museum of Art & Hudson Yards</h4>
                        <p>Immerse yourself in thousands of years of human creativity inside the world-famous "Met" Museum along Museum Mile. In the evening, visit the futuristic Vessel structure and enjoy a final luxury group dinner at Hudson Yards.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 7</div>
                    <div class="day-info">
                        <h4>Manhattan Bagel Breakfast, Souvenirs & Departure</h4>
                        <p>Enjoy a premium, authentic New York bagel and coffee combo for breakfast. Do some last-minute souvenir shopping or exploration around Herald Square before checking out and boarding your shuttle back to the airport.</p>
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