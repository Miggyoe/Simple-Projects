<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palawan Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Palawan hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop') no-repeat center center;
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
            <h1>Palawan, Philippines</h1>
        </div>
        <p>Explore the world's most beautiful island paradise, featuring majestic limestone cliffs, hidden lagoons, and the famous subterranean river network.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 5 Days, 4 Nights</div>
            <div class="badge-item">• Roundtrip Airfare Included</div>
            <div class="badge-item">• 4-Star Eco-Resort Stay</div>
            <div class="badge-item">• Underground River & Island Hopping Included</div>
            <div class="badge-item">• 5-8 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">The Ultimate Island Paradise</p>
            <p class="plan-sub">All-inclusive 5D4N domestic eco-adventure and beach retreat</p>
            
            <ul class="benefit-list">
                <li>Roundtrip Domestic Airfare (Manila - Puerto Princesa / El Nido Airport)</li>
                <li>4-Star Eco-Resort Lodging near the scenic beachfront</li>
                <li>Daily Fresh Local Island Buffet Breakfast Options</li>
                <li>UNESCO World Heritage Underground River Guided Tour Pass</li>
                <li>El Nido Premium Island Hopping Boat & Sanctuary Entry Fees</li>
            </ul>

            <div class="price-tag">₱15,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Palawan+The+Ultimate+Island+Paradise&price=15999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🛶</div>
                <div class="activity-text">
                    <strong>Underground River Tour</strong>
                    <span>Paddle through an incredible 8.2-kilometer navigable subterranean river cave system lined with historic stalactites.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏝️</div>
                <div class="activity-text">
                    <strong>Big Lagoon Kayaking</strong>
                    <span>Glide over crystal-clear turquoise waters framed by massive, towering jagged limestone cliff formations.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏊‍♂️</div>
                <div class="activity-text">
                    <strong>Secret Lagoon Snorkeling</strong>
                    <span>Swim through a small, hidden rocky opening to discover a secluded pool of calm, beautiful emerald sea water.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏖️</div>
                <div class="activity-text">
                    <strong>Seven Commandos Beach Stroll</strong>
                    <span>Relax along a classic stretch of fine white sand shaded by lush coconut palms and enjoy fresh coconut juice.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🌅</div>
                <div class="activity-text">
                    <strong>Las Cabañas Sunset Trek</strong>
                    <span>Walk along the expansive coastal beach strip to capture the absolute best golden hour sunset views in El Nido.</span>
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
                        <h4>Arrival, Scenic Transit & Las Cabañas Sunset</h4>
                        <p>Land at the airport and meet your private air-conditioned shuttle transport. Head out through the lush countryside to check into your eco-resort. In the late afternoon, head over to Las Cabañas beach for a relaxing walk during a majestic sunset.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>UNESCO Underground River Cave Exploration</h4>
                        <p>Embark on a spectacular day trip to Sabang. Board a motorized boat to reach the mouth of the world-famous Underground River, then switch to a guided paddle boat to marvel at the immense, historic cathedral caves inside.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Premium El Nido Lagoons & Islands Boat Cruise</h4>
                        <p>Enjoy a premium island-hopping outrigger boat trip. Rent a kayak to navigate the beautiful shallow waters of the Big Lagoon, explore the rocky hidden entrance of the Secret Lagoon, and swim alongside wild tropical fish over the nearby coral reefs.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>White Sands Leisure & Island Grilled Feast</h4>
                        <p>Spend a relaxing day exploring the stunning shores of Seven Commandos Beach and Shimizu Island. Indulge in an authentic, freshly prepared beachside grilled seafood lunch hosted right on the sand by your local boat crew.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Morning Beach Swim, Souvenir Shopping & Departure</h4>
                        <p>Take an early morning dip in the pristine resort pool or beachfront waves. Enjoy a fresh tropical fruit and pastry breakfast spread, pack your bags, and browse the local handicraft stores for pearl souvenirs before boarding your return shuttle transfer.</p>
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