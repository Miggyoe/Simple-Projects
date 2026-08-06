<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <!-- Header -->
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
    <!-- Body -->
        <div class="body-1">
            <h1 class="tagline">About Us</h1>
            <p>Your trusted travel partner</p>
        </div>

        <div class="about-us">
            <div class="about-us-text">
                <h2>Who We Are</h2>
                <p>Travlog is your trusted traveling partner, offering carefully <br> curated local and international travel packages. <br> We aim to make your travel experience memorable, <br> hassle-free, and affordable.</p>
                <br>
                <h2>Our Mission</h2>
                <p>To inspire people to explore the world by providing <br> quality travel packages with excellent service <br> and unforgettable experiences.</p>
            </div>
            <div class="about-us-right-column">
                <img src="https://www.allianztravelinsurance.ca/en_CA/travel-tips/family-travel-tips/benefits-of-travelling-as-a-couple/_jcr_content/root/parsys/wrapper_copy_copy_co/wrapper/multi_column_grid_co/grid-0-par/image.img.82.3360.jpeg/1746726772462/image-of-a-couple-travelling-and-taking-pictures.jpeg" alt="" id="aboutuspicture">
                <div class="about-us-float">
                    <!-- Float1 -->
                     <div class="top-float">
                        <div class="float-1">
                            <img src="https://cdn-icons-png.flaticon.com/128/701/701348.png" alt="">
                            <div class="footer-text">
                                <p>Hotel Included</p>
                                <p>Comfortable accomodations</p>
                            </div>
                        </div>
                        <!-- Float2 -->
                        <div class="float-2">
                            <img src="https://cdn-icons-png.flaticon.com/128/9482/9482066.png" alt="">
                            <div class="footer-text">
                                <p>Roundtrip Airfare</p>
                                <p>All packages include flights</p>
                            </div>
                        </div>
                     </div>
                     <div class="bottom-float">
                        <!-- Float3 -->
                        <div class="float-3">
                            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="">
                            <div class="footer-text">
                                <p>Complete Itinenary</p>
                                <p>Planned tours and activities</p>
                            </div>
                        </div>
                        <!-- Float4 -->
                        <div class="float-4">
                            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="">
                            <div class="footer-text">
                                <p>Secure Booking</p>
                                <p>Safe and hassle free</p>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footers -->
    <footer>
        <!-- Footer 1 -->
        <div class="footer-1-aboutus">
            <div class="footer-text-aboutus">
                <p>Thank you for choosing Travlog. Let's explore the world together!</p>
            </div>
        </div>
<style>     
.main-content-layout {
    display: flex;
    flex: 1; /* Pushes the footer down nicely */
    padding: 20px 40px;
    gap: 30px;
    align-items: flex-start;
}

/* Left side holds the cards, right side holds the text/sidebar */
.left-column {
    flex: 2.5; /* Takes up more visual width space */
}

.right-column {
    flex: 1; /* Takes up sidebar scale space */
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* ==========================================
    LEFT CONTAINER: 10-CARD GLASS CONTAINER
   ========================================== */
.cards-glass-box {
    background-color: rgba(255, 255, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 24px;
    padding: 25px;
    padding-bottom: 30px;
    backdrop-filter: blur(8px);
}

.card-grid-row {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 15px;
}

.card-grid-row:last-child {
    margin-bottom: 0;
}

/* Individual Vertical Travel Card Layout */
.travel-card {
    background-color: rgba(255, 255, 255, 0.85);
    flex: 1;
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.travel-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.card-info {
    padding: 10px;
    text-align: center;
}

.card-info h5 {
    color: #333333;
    font-size: 0.85rem;
    font-weight: 700;
    margin-bottom: 2px;
}

.card-info .price {
    color: #2b765d;
    font-size: 0.8rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.card-info .duration {
    color: #666666;
    font-size: 0.65rem;
    line-height: 1.2;
}

/* ==========================================
    RIGHT CONTAINER: TAGLINE & SIDEBAR PANEL
   ========================================== */
.headline-container {
    text-align: right;
    color: white;
}

.headline-container .tagline {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 5px;
    line-height: 1.1;
}

.headline-container .sub-tagline {
    font-size: 1rem;
    font-weight: 400;
    opacity: 0.9;
}

/* The Frosted Glass Sidebar Frame */
.sidebar-box {
    background-color: rgba(255, 255, 255, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 20px;
    padding: 20px;
    backdrop-filter: blur(10px);
}

.sidebar-box h3 {
    text-align: center;
    color: #1f1f1f;
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 15px;
}

/* Single Destination Item row */
.sidebar-row {
    background: white;
    border-radius: 14px;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.03);
}

.sidebar-row:last-child {
    margin-bottom: 0;
}

.sidebar-details {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.sidebar-details h4 {
    color: #333333;
    font-size: 0.95rem;
    margin-bottom: 2px;
}

.sidebar-details p {
    color: #666666;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 8px;
}

.view-plan-btn {
    text-decoration: none;
    color: #333333;
    border: 1px solid #cccccc;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 14px;
    border-radius: 20px;
    transition: all 0.2s;
}

.view-plan-btn:hover {
    background: #333333;
    color: white;
    border-color: #333333;
}

.sidebar-row img {
    width: 200px;
    height: 90px;
    object-fit: cover;
    border-radius: 10px;
}

/* ==========================================
    FOOTER ADJUSTMENTS (Ensure it sticks clean)
   ========================================== */
footer {
    margin-top: auto; /* Keeps footer pinned directly to base */
    display: flex;
    justify-content: center;
    color: white;
    text-align: center;
    padding: 39px;
}
.about-us {
    padding: 40px;
    background: #ffffff;
    display: flex;
}

.about-us-text h2 {
    color: #2b765d;
    margin-bottom: 10px;
    font-weight: 800;
    font-size: 40px;
}

.about-us-text p {
    color: #333333;
    line-height: 1.6;
    margin-bottom: 25px;
}

.about-us-right-column {

}

.about-us{
    justify-content: space-between;
    margin-left: 200px;
    margin-right: 200px;
}

#aboutuspicture{
    width: 720px;
    height: 250px;
    border-radius: 20px;
    padding: 10px;
}

.top-float, .bottom-float, .float-1, .float-2, .float-3, .float-4{
    display: flex;
}
.float-1, .float-2, .float-3, .float-4{
    background: #2b765d;
    margin: 10px;
    padding: 10px;
    border-radius: 10px;
}
.float-3{
    padding-right: 18px;
}
.float-4{
    padding-right: 75px;
}

.about-us-float img{
    width: 60px;
    height: 55px;
}


    </style>
</body>
</html>

