<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singapore Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Singapore hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1525625293386-3f8f99389edd?q=80&w=1200&auto=format&fit=crop') no-repeat center center;
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
            <h1>Singapore</h1>
        </div>
        <p>Explore a futuristic global hub where cutting-edge green architecture, iconic skylines, and rich multicultural heritage seamlessly intertwine.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 4 Days, 3 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Premium Hotel</div>
            <div class="badge-item">• Universal Studios & Gardens by the Bay Included</div>
            <div class="badge-item">• 4-6 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Lion City Marvels</p>
            <p class="plan-sub">All-inclusive 4D3N premium metropolitan getaway</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Changi International)</li>
                <li>4-Star Hotel Lodging near Bugis or Clarke Quay District</li>
                <li>Daily Hotel Buffet Breakfast Options</li>
                <li>Universal Studios Singapore 1-Day Full Admission Ticket</li>
                <li>Gardens by the Bay Double Conservatories Entry Pass</li>
            </ul>

            <div class="price-tag">₱38,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Singapore+Lion+City+Marvels&price=38999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🌴</div>
                <div class="activity-text">
                    <strong>Gardens by the Bay</strong>
                    <span>Step inside the stunning Cloud Forest and Flower Dome greenhouses, and witness the spectacular evening Supertree light show.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🎢</div>
                <div class="activity-text">
                    <strong>Universal Studios Singapore</strong>
                    <span>Enjoy a full day of adrenaline-pumping rides, movie-themed attractions, and live studio sets on Sentosa Island.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🦁</div>
                <div class="activity-text">
                    <strong>Merlion Park Heritage Walk</strong>
                    <span>Take iconic snapshots with the half-lion, half-fish landmark overlooking the breathtaking expanse of Marina Bay.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🛍️</div>
                <div class="activity-text">
                    <strong>Changi Jewel Exploration</strong>
                    <span>Visit the world-famous HSBC Rain Vortex, the tallest indoor waterfall on earth, surrounded by a lush indoor forest tier.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🍛</div>
                <div class="activity-text">
                    <strong>Chinatown & Little India Cultural Tour</strong>
                    <span>Immerse your senses in vibrant heritage lanes filled with historic temples, colorful shophouses, and rich Michelin-rated hawker food centers.</span>
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
                        <h4>Arrival, Jewel Changi & Marina Bay Waterfront</h4>
                        <p>Land at Changi Airport and stop to experience the massive indoor waterfall at Jewel. Transfer via private shuttle to your city hotel. In the evening, visit Merlion Park and watch the stunning Spectra light and water projection show over the bay.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Full Day Thrills at Universal Studios Singapore</h4>
                        <p>Head straight to Sentosa Island after breakfast for a thrilling day at Universal Studios. Experience world-class roller coasters like Battlestar Galactica, explore Sci-Fi City, and stay through the afternoon for the park's vibrant street events.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Cultural Districts & Gardens by the Bay domes</h4>
                        <p>Spend your morning wandering through the historic temples of Chinatown and the colorful alleys of Little India. As the afternoon cools down, head to Gardens by the Bay to tour the futuristic domes and view the illuminated Supertrees at night.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Bugis Street Shopping, Souvenir Hunting & Departure</h4>
                        <p>Enjoy local Kaya Toast for breakfast. Spend your final morning picking up fashion finds and souvenirs at the bustling Bugis Street Market or explore Orchard Road before checking out and boarding your shuttle back to the airport.</p>
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