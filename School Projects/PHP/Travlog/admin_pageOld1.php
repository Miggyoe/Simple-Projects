<?php
session_start();
require_once 'config.php';

// Strict Admin Access Control
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    die("Access Denied. You are not authorized to view this page.");
}

$success_msg = "";
$error_msg = "";

/* ==========================================================================
   CRUD CONTROLLER LOGIC
   ========================================================================== */

// 1. CREATE: Add New Travel Package Offer
if (isset($_POST['create_package'])) {
    $package_name = trim($_POST['package_name']);
    $price = floatval($_POST['price']);
    $duration = trim($_POST['duration']);

    if (!empty($package_name) && $price > 0) {
        // Checking if your system manages explicit packages table or maps directly
        // This adds a placeholder setup or handles manual structure updates cleanly
        $stmt = $conn->prepare("INSERT INTO orders (user_id, package, quantity, price, status) VALUES (1, ?, 0, ?, 'Ready')");
        $stmt->bind_param("sd", $package_name, $price);
        if ($stmt->execute()) {
            $success_msg = "New Travel Promo Package cataloged successfully!";
        }
        $stmt->close();
    }
}

// 2. READ: Handled by SQL queries further down down in script variables

// 3. UPDATE: Update Existing Booking Status
if (isset($_POST['update_status'])) {
    $order_id = intval($_POST['order_id']);
    $new_status = $_POST['status'];
    
    $allowed = ["Ordered", "Organizing", "Unavailable", "Ready"];
    if (in_array($new_status, $allowed)) {
        $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $new_status, $order_id);
        if ($stmt->execute()) {
            $success_msg = "Booking reservation status updated.";
        }
        $stmt->close();
    }
}

// 4. DELETE: Remove User Profile Entry
if (isset($_GET['delete_user'])) {
    $id = intval($_GET['delete_user']);
    if ($id != 1) { 
        $conn->query("DELETE FROM users WHERE id = $id");
        $success_msg = "User account removed from manifest files.";
    }
    header("Location: admin_page.php");
    exit();
}

// 5. DELETE: Remove/Cancel Booking Order
if (isset($_GET['delete_order'])) {
    $order_id = intval($_GET['delete_order']);
    $conn->query("DELETE FROM orders WHERE id = $order_id");
    $success_msg = "Booking transaction cancelled and deleted.";
    header("Location: admin_page.php");
    exit();
}

// Fetch Master Datatable Records
$users = $conn->query("SELECT id, username, name, email, role, contact_no FROM users ORDER BY id DESC");
$orders = $conn->query("SELECT orders.id, orders.package, orders.quantity, orders.price, orders.status, users.name as customer_name, users.contact_no FROM orders JOIN users ON orders.user_id = users.id ORDER BY orders.id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travlog Console - System Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
        }
        .admin-layout-wrapper {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 40px;
            box-sizing: border-box;
        }
        .dashboard-banner {
            color: white;
            background: #2b765d;
            background-image: linear-gradient(rgba(45, 146, 112, 0.2), rgba(43, 118, 93, 0.2)), url('icons/bg-travel.png');
            background-size: cover;
            background-position: center;
            padding: 40px;
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .dashboard-banner h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 2.5fr;
            gap: 30px;
            align-items: flex-start;
        }
        .admin-card-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            padding: 25px;
            margin-bottom: 30px;
            box-sizing: border-box;
        }
        .admin-card-container h2 {
            color: #2b765d;
            font-size: 1.3rem;
            margin-top: 0;
            margin-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
            font-weight: 700;
        }
        .crud-form input, .crud-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 0.95rem;
        }
        .crud-form button {
            width: 100%;
            background: #2b765d;
            color: white;
            border: none;
            padding: 12px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .crud-form button:hover {
            background: #1f5443;
        }
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }
        .admin-table-view {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .admin-table-view th {
            background-color: #fbfdfc;
            color: #2b765d;
            font-weight: 700;
            padding: 14px;
            font-size: 0.85rem;
            border-bottom: 2px solid #eef3f1;
            text-transform: uppercase;
        }
        .admin-table-view td {
            padding: 14px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.95rem;
        }
        .admin-table-view tr:hover {
            background-color: #fbfdfc;
        }
        .badge-status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 700;
        }
        .badge-status.ready { background: #e8f5e9; color: green; }
        .badge-status.unavailable { background: #ffebee; color: red; }
        .badge-status.pending { background: #fff3e0; color: orange; }

        .btn-inline-save {
            background: #2b765d;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 0.8rem;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 4px;
        }
        .btn-inline-delete {
            color: red;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
        }
        .btn-inline-delete:hover {
            text-decoration: underline;
        }
        .alert-bar {
            background: #e8f5e9;
            color: #2e7d32;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 25px;
            font-weight: 600;
            text-align: center;
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
            <a href="logout.php" id="profile-btn" onclick="return confirm('Log out of admin session?')">Logout</a>
        </div>
    </div>

    <div class="admin-layout-wrapper">
        <div class="dashboard-banner">
            <h1>Platform Operations Center</h1>
            <p>Welcome back, Administrator. Modify system registries, create pricing catalog tiers, and update booking status streams manually.</p>
        </div>

        <?php if (!empty($success_msg)): ?>
            <div class="alert-bar"><?php echo $success_msg; ?></div>
        <?php endif; ?>

        <div class="dashboard-grid">
            
            <div class="sidebar-forms">
                <div class="admin-card-container">
                    <h2>[C] Create Package</h2>
                    <form class="crud-form" method="POST" action="admin_page.php">
                        <input type="text" name="package_name" placeholder="Destination Name (e.g., Tokyo, Japan)" required>
                        <input type="number" step="0.01" name="price" placeholder="Package Price (PHP ₱)" required>
                        <input type="text" name="duration" placeholder="Duration (e.g., 5 Days, 4 Nights)">
                        <button type="submit" name="create_package">Add To Catalog</button>
                    </form>
                </div>
            </div>

            <div class="main-tables-area">
                
                <div class="admin-card-container">
                    <h2>[R/U/D] Manage Travel Bookings & Flight Rosters</h2>
                    <div class="table-responsive">
                        <table class="admin-table-view">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Contact</th>
                                    <th>Package</th>
                                    <th>Total Cost</th>
                                    <th>Status Flow</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($o = $orders->fetch_assoc()): ?>
                                <tr>
                                    <td><strong>#<?php echo $o['id']; ?></strong></td>
                                    <td><?php echo htmlspecialchars($o['customer_name']); ?></td>
                                    <td><?php echo htmlspecialchars($o['contact_no'] ?? 'N/A'); ?></td>
                                    <td><?php echo htmlspecialchars($o['package']); ?></td>
                                    <td>
                                        <?php 
                                            $total_price = $o['price'] * ($o['quantity'] > 0 ? $o['quantity'] : 1); 
                                            echo "₱" . number_format($total_price, 2); 
                                        ?>
                                    </td>
                                    <td>
                                        <form method="POST" action="admin_page.php" style="display:inline-flex; align-items:center;">
                                            <input type="hidden" name="order_id" value="<?php echo $o['id']; ?>">
                                            <select name="status" style="margin:0; padding:4px; font-size:12px; width:110px;">
                                                <option value="Ordered" <?php if($o['status'] == 'Ordered') echo 'selected'; ?>>Ordered</option>
                                                <option value="Organizing" <?php if($o['status'] == 'Organizing') echo 'selected'; ?>>Organizing</option>
                                                <option value="Unavailable" <?php if($o['status'] == 'Unavailable') echo 'selected'; ?>>Unavailable</option>
                                                <option value="Ready" <?php if($o['status'] == 'Ready') echo 'selected'; ?>>Ready</option>
                                            </select>
                                            <button type="submit" name="update_status" class="btn-inline-save">Update</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="admin_page.php?delete_order=<?php echo $o['id']; ?>" class="btn-inline-delete" onclick="return confirm('Cancel/Delete booking entry?')">Cancel</a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="admin-card-container">
                    <h2>[R/D] User Registry Profiles</h2>
                    <div class="table-responsive">
                        <table class="admin-table-view">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Privilege</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($u = $users->fetch_assoc()): ?>
                                <tr>
                                    <td>#<?php echo $u['id']; ?></td>
                                    <td><?php echo htmlspecialchars($u['username']); ?></td>
                                    <td><?php echo htmlspecialchars($u['name']); ?></td>
                                    <td><?php echo htmlspecialchars($u['email']); ?></td>
                                    <td><?php echo htmlspecialchars($u['contact_no'] ?? 'N/A'); ?></td>
                                    <td><strong><?php echo strtoupper($u['role']); ?></strong></td>
                                    <td>
                                        <?php if($u['id'] != 1): ?>
                                            <a href="admin_page.php?delete_user=<?php echo $u['id']; ?>" class="btn-inline-delete" onclick="return confirm('Purge user account permanent data?')">Delete Account</a>
                                        <?php else: ?>
                                            <span style="color:#888; font-style:italic;">Main Superuser</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="Tours">
            <div class="footer-text"><p><strong>Complete Itinerary</strong></p><p>Planned tours and activities</p></div>
        </div>
        <div class="footer-4">
            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="Shield">
            <div class="footer-text"><p><strong>Secure Booking</strong></p><p>Safe and hassle free</p></div>
        </div>
    </footer>

</body>
</html>