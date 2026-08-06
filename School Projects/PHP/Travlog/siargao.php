<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siargao Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Siargao hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=300') no-repeat center center;
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
            <h1>Siargao Island, Philippines</h1>
        </div>
        <p>Ride the world-class waves, explore vast coconut forests, and dive into the crystal-clear island lagoons.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 4 Days, 3 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Beachfront Resort</div>
            <div class="badge-item">• Island Hopping & Surf Lessons Included</div>
            <div class="badge-item">• 1-10 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Tropical Island Escape</p>
            <p class="plan-sub">All-inclusive domestic surf and sun adventure</p>
            
            <ul class="benefit-list">
                <li>Roundtrip Domestic Airfare (Manila - Sayak Airport)</li>
                <li>4-Star Beach Resort Lodging near General Luna</li>
                <li>Daily Island-Style Island Breakfast Selections</li>
                <li>Tri-Island Hopping Tour (Naked, Daku, & Guyam Island)</li>
                <li>Cloud 9 Surfing Lesson with Certified Local Instructor</li>
            </ul>

            <div class="price-tag">₱13,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Siargao+Tropical+Island+Escape&price=13999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🏄‍♂️</div>
                <div class="activity-text">
                    <strong>Cloud 9 Surfing Lesson</strong>
                    <span>Learn to catch waves at the country's most legendary surf break under the close guidance of a certified local guide.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏝️</div>
                <div class="activity-text">
                    <strong>Tri-Island Hopping Excursion</strong>
                    <span>Cruise out to the stunning sandbars of Naked Island, the coconut groves of Daku, and the hidden oasis of Guyam.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🛶</div>
                <div class="activity-text">
                    <strong>Sugba Lagoon Exploration</strong>
                    <span>Paddleboard, kayak, or jump off the iconic wooden diving platform into pristine, emerald-green waters.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🥥</div>
                <div class="activity-text">
                    <strong>Coconut Mountain Viewpoint</strong>
                    <span>Take breathtaking photos looking out across a massive, endless sea of thousands of lush green coconut trees.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏊‍♂️</div>
                <div class="activity-text">
                    <strong>Magpupungko Rock Pools</strong>
                    <span>Swim and cliff dive into crystal-clear, natural tidal pools that reveal themselves completely during low tide.</span>
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
                        <h4>Arrival, Resort Check-In & Cloud 9 Boardwalk</h4>
                        <p>Touch down at Sayak Airport and enjoy a land-shuttle transit directly to your General Luna beachfront resort. In the late afternoon, stretch your legs along the iconic Cloud 9 wooden boardwalk to catch your first island sunset.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Epic Tri-Island Hopping Adventure</h4>
                        <p>Board an outrigger boat for a full day exploring Naked Island's pure white sandbar, Daku Island's shading palms, and the intimate private shores of Guyam Island. Indulge in an authentic boodle-fight seafood lunch on the beach.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Sugba Lagoon & Maasin River Palm Swing</h4>
                        <p>Take a scenic boat ride through dense mangrove forests to reach the breathtaking Sugba Lagoon. On the journey back, make a detour stop at Maasin River to try out the famous bent-palm tree rope swing challenge.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Magpupungko Rock Pools, Surfing & Departure</h4>
                        <p>Time your early morning visit perfectly with the low tide to explore the natural Magpupungko Rock Pools. Return to Cloud 9 for your surf coaching slot before heading back to the resort to pack, check out, and board your airport shuttle transit.</p>
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