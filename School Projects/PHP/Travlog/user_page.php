<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Handle order insertion from checkout page
if (isset($_POST['finalize_booking'])) {
    $package_name = $_POST['package_name'];
    $quantity = intval($_POST['quantity']);
    $price = floatval($_POST['price']);
    
    if ($quantity < 1) { $quantity = 1; } 

    // This part is already correct and secure!
    $stmt = $conn->prepare("INSERT INTO orders (user_id, package, quantity, price, status) VALUES (?, ?, ?, ?, 'Ordered')");
    $stmt->bind_param("isid", $user_id, $package_name, $quantity, $price);
    $stmt->execute();
    $stmt->close(); // Good practice to close the statement before redirecting
    
    header("Location: user_page.php?success=1");
    exit();
}

// SECURE FETCH: Replaced the raw query with the prepared statement pattern
$stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY id DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$orders = $stmt->get_result(); // This extracts the data rows so your while loop works perfectly!
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #2b765d;
            background-image: linear-gradient(rgba(34, 105, 82, 0.75), rgba(6, 17, 14, 0.75)), url('icons/bg-travel.png');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .main-content-layout-up {
            flex: 1;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        .body2up {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 900px;
        }
        h2 {
            color: #2b765d;
            margin-top: 0;
            border-bottom: 2px solid #f2f2f2;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #2b765d;
            color: white;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .status-badge {
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: bold;
        }
        .status-ordered { background: #e3f2fd; color: #0d47a1; }
        .status-organizing { background: #fff3e0; color: #e65100; }
        .status-unavailable { background: #ffebee; color: #c62828; }
        .status-ready { background: #e8f5e9; color: #2e7d32; }
        
        
        
        .success-msg {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }

    </style>
</head>
<body>

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

    <div class="main-content-layout-up">
        <div class="body2up">
            <h2>Your Bookings & Status Panel</h2>

            <?php if(isset($_GET['success'])): ?>
                <div class="success-msg">✓ Booking placed successfully! Check your status below.</div>
            <?php endif; ?>

            <?php if($orders->num_rows > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Package Name</th>       
                            <th>Quantity (Pax)</th>   
                            <th>Total Price Summary</th>      
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $orders->fetch_assoc()): 
                            $status_class = 'status-ordered';
                            if ($row['status'] == 'Organizing') $status_class = 'status-organizing';
                            if ($row['status'] == 'Unavailable') $status_class = 'status-unavailable';
                            if ($row['status'] == 'Ready') $status_class = 'status-ready';
                        ?>
                        <tr>
                            <td>#<?php echo $row['id']; ?></td>
                            <td><strong><?php echo htmlspecialchars($row['package']); ?></strong></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>₱<?php echo number_format($row['price'] * $row['quantity'], 2); ?></td>
                            <td>
                                <span class="status-badge <?php echo $status_class; ?>">
                                    <?php echo $row['status']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p style="text-align: center; color: #666; margin-top: 20px;">You haven't made any bookings yet. <a href="packages.php" style="color:#2b765d;">Explore packages here</a>.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footers -->
    <footer>
        <!-- Footer 1 -->
        <div class="footer-1">
            <img src="https://cdn-icons-png.flaticon.com/128/701/701348.png" alt="">
            <div class="footer-text">
                <p><strong>Hotel Included</strong></p>
                <p>Comfortable accommodations</p>
            </div>
        </div>
        <!-- Footer 2 -->
         <div class="footer-2">
            <img src="https://cdn-icons-png.flaticon.com/128/9482/9482066.png" alt="">
            <div class="footer-text">
                <p><strong>Roundtrip Airfare</strong></p>
                <p>All packages include flights</p>
            </div>
        </div>
        <!-- Footer 3 -->
         <div class="footer-3">
            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="">
            <div class="footer-text">
                <p><strong>Complete Itinerary</strong></p>
                <p>Planned tours and activities</p>
            </div>
        </div>
        <!-- Footer 4 -->
         <div class="footer-4">
            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="">
            <div class="footer-text">
                <p><strong>Secure Booking</strong></p>
                <p>Safe and hassle free</p>
            </div>
        </div>
    </footer>
</body>
</html>