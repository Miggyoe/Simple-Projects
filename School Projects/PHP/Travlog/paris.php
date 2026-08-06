<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris Tour - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Specific override for Paris hero background image while reusing style1.css structural rules */
        .hero-banner {
            background: linear-gradient(rgba(43, 118, 93, 0.75), rgba(43, 118, 93, 0.85)), 
                        url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?q=80&w=1200&auto=format&fit=crop') no-repeat center center;
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
            <h1>Paris, France</h1>
        </div>
        <p>Immerse yourself in the City of Light, where world-class art, historic avenues, and breathtaking monuments wait around every corner.</p>
        
        <div class="quick-badges">
            <div class="badge-item">• 7 Days, 6 Nights</div>
            <div class="badge-item">• Roundtrip Airfare</div>
            <div class="badge-item">• 4-Star Boutique Hotel</div>
            <div class="badge-item">• Louvre Museum & Eiffel Tower Access Included</div>
            <div class="badge-item">• 2-4 pax</div>
        </div>
    </div>

    <!-- Main Content Section: Clean 3-Column Grid Layout -->
    <div class="details-container">
        
        <!-- Column 1: Package Plan Details & Pricing -->
        <div class="content-card">
            <h3>Package Plan</h3>
            <p class="plan-title">Parisian Romance & Culture</p>
            <p class="plan-sub">All-inclusive 7D6N premium European escape</p>
            
            <ul class="benefit-list">
                <li>Roundtrip International Airfare (Manila - Charles de Gaulle Airport)</li>
                <li>4-Star Boutique Hotel Stay in Paris Center</li>
                <li>Daily Fresh Parisian Café Breakfast Assortment</li>
                <li>Louvre Museum Skip-the-Line Timed Entry Ticket</li>
                <li>Seine River Sightseeing Cruise Pass</li>
            </ul>

            <div class="price-tag">₱89,999</div>

            <div class="booking-section">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="checkout.php?package_name=Parisian+Romance+and+Culture&price=89999" class="btn-booking">Book This Spot Now</a>
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
                <div class="activity-icon">🗼</div>
                <div class="activity-text">
                    <strong>Eiffel Tower Summit Access</strong>
                    <span>Ascend to the top observation levels for stunning architectural views overlooking the entire Paris landscape.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🖼️</div>
                <div class="activity-text">
                    <strong>Louvre Guided Fine Art Pass</strong>
                    <span>Walk the massive historic gallery halls to view legendary historic masterpieces like the Mona Lisa and Venus de Milo.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">⛵</div>
                <div class="activity-text">
                    <strong>Seine River Bateaux Cruise</strong>
                    <span>Glide down the iconic central river pass to admire illuminated views of Notre-Dame and Musee d'Orsay.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🏰</div>
                <div class="activity-text">
                    <strong>Palace of Versailles Excursion</strong>
                    <span>Take a short journey out to explore the opulent Hall of Mirrors and grand manicured fountains of royal French history.</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">🥐</div>
                <div class="activity-text">
                    <strong>Montmartre & Pastry Tour</strong>
                    <span>Stroll past bohemian artists in historic brick alleys while sampling authentic macarons, eclairs, and artisanal crepes.</span>
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
                        <h4>Arrival, Hotel Check-In & Latin Quarter Walk</h4>
                        <p>Touch down at Paris Charles de Gaulle Airport and enjoy a private transit directly to your city center hotel. Spend your opening evening walking past historic bookshops and lively cafes in the Latin Quarter.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 2</div>
                    <div class="day-info">
                        <h4>Eiffel Tower Climb & Arc de Triomphe Sunset</h4>
                        <p>Ascend the majestic structure of the Eiffel Tower right after breakfast. In the afternoon, take a grand stroll along the historic Avenue des Champs-Élysées, ending your daylight hours at the top of Arc de Triomphe.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 3</div>
                    <div class="day-info">
                        <h4>Louvre Museum Artifacts & Seine River Cruise</h4>
                        <p>Dedicate your morning to discovering centuries of artistic treasures inside the iconic Louvre. As evening starts to fall, step aboard a classic glass-walled river boat to watch the city lights shimmer over the Seine.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 4</div>
                    <div class="day-info">
                        <h4>Palace of Versailles Royal Day Journey</h4>
                        <p>Hop on a comfortable morning train transport out to the vast estate of Versailles. Walk through the breathtaking royal apartments, marvel at the gold-finished Hall of Mirrors, and walk through the expansive royal gardens.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 5</div>
                    <div class="day-info">
                        <h4>Montmartre Artists, Sacré-Cœur & Pastry Tasting</h4>
                        <p>Explore the winding hilltop stone streets of Montmartre. Visit the white stone dome of the Sacré-Cœur Basilica for sweeping city vistas, then enjoy a curated afternoon tasting local treats and delicacies from historic bakeries.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 6</div>
                    <div class="day-info">
                        <h4>Musée d'Orsay Impressionism & Marais Shopping</h4>
                        <p>View the world's finest Impressionist art collection inside a beautiful repurposed train station at Musée d'Orsay. Spend your late afternoon browsing boutique fashion stores and historic cobblestone lanes in the Marais district.</p>
                    </div>
                </div>

                <div class="timeline-day">
                    <div class="day-badge">Day 7</div>
                    <div class="day-info">
                        <h4>Tuileries Garden Stroll, Souvenirs & Departure</h4>
                        <p>Savor a final warm buttery croissant and coffee by the fountains of Tuileries Garden. Pick up authentic French chocolates or fashion keepsakes before checking out and riding your designated shuttle back to the airport.</p>
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