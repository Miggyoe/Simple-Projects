<?php
session_start();
require_once 'config.php';

// Strict Admin Access Control
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    die("Access Denied. You are not authorized to view this page.");
}

$success_msg = "";

// 1. DELETE: Remove User Profile Entry (Secured with Prepared Statements)
if (isset($_GET['delete_user'])) {
    $id = intval($_GET['delete_user']);
    if ($id != 1) { 
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $success_msg = "User registry updated successfully.";
        }
        $stmt->close();
    }
    header("Location: admin_page.php");
    exit();
}

// 2. UPDATE: Update Existing Booking Status
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
    header("Location: admin_page.php");
    exit();
}

// 3. DELETE: Remove/Cancel Booking Order (Secured with Prepared Statements)
if (isset($_GET['delete_order'])) {
    $order_id = intval($_GET['delete_order']);
    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $stmt->close();
    header("Location: admin_page.php");
    exit();
}

// Fetch Records (Including payment_method and contact_no)
$users = $conn->query("SELECT id, username, name, email, role, contact_no FROM users");
$orders = $conn->query("SELECT orders.id, orders.package, orders.quantity, orders.price, orders.status, orders.payment_method, users.name as customer_name, users.contact_no FROM orders JOIN users ON orders.user_id = users.id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header-index">
        <h1 id="travlog">Travlog</h1>
        <div class="navigation">
            <a href="login.php" id="profile-btn" onclick="return confirm('Are you sure you want to log out?')">Logout</a>
        </div>
    </div>

    <div class="admin-layout-wrapper">
        <div class="dashboard-banner">
            <h1>Admin Control Panel</h1>
        </div>

        <?php if (!empty($success_msg)): ?>
            <div class="alert-bar"><?php echo $success_msg; ?></div>
        <?php endif; ?>

        <div class="main-tables-area">
            
            <div class="admin-card-container">
                <h2>Manage Bookings / Orders</h2>
                <div class="table-responsive">
                    <table class="admin-table-view">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Package Name</th>
                                <th>Quantity Ordered</th>
                                <th>Price Summary</th>
                                <th>Payment Method</th>
                                <th>Update Status</th>
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
                                <td><?php echo $o['quantity']; ?></td>
                                <td>
                                    <?php 
                                        $total_price = $o['price'] * ($o['quantity'] > 0 ? $o['quantity'] : 1); 
                                        // Apply 10% discount summary rule matching frontend display if 3 or more pax are ordered
                                        if ($o['quantity'] >= 3) {
                                            $total_price = $total_price * 0.90;
                                        }
                                        echo "₱" . number_format($total_price, 2); 
                                    ?>
                                </td>
                                <td><span class="payment-method-badge"><?php echo htmlspecialchars($o['payment_method'] ?? 'N/A'); ?></span></td>
                                <td>
                                    <div class="status-alignment-wrapper">
                                        <form method="POST" action="admin_page.php" class="inline-status-form">
                                            <input type="hidden" name="order_id" value="<?php echo $o['id']; ?>">
                                            <select name="status">
                                                <option value="Ordered" <?php if($o['status'] == 'Ordered') echo 'selected'; ?>>Ordered</option>
                                                <option value="Organizing" <?php if($o['status'] == 'Organizing') echo 'selected'; ?>>Organizing</option>
                                                <option value="Unavailable" <?php if($o['status'] == 'Unavailable') echo 'selected'; ?>>Unavailable</option>
                                                <option value="Ready" <?php if($o['status'] == 'Ready') echo 'selected'; ?>>Ready</option>
                                            </select>
                                            <button type="submit" name="update_status" class="btn-inline-save">Save</button>
                                        </form>

                                        <span class="badge-status <?php echo strtolower($o['status']); ?>">
                                            <?php echo $o['status']; ?>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="admin_page.php?delete_order=<?php echo $o['id']; ?>" class="btn-inline-delete" onclick="return confirm('Cancel/Delete this order?')">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="admin-card-container">
                <h2>Manage Users</h2>
                <div class="table-responsive">
                    <table class="admin-table-view">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Role</th>
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
                                        <a href="admin_page.php?delete_user=<?php echo $u['id']; ?>" class="btn-inline-delete" onclick="return confirm('Delete user?')">Delete</a>
                                    <?php else: ?>
                                        <span class="main-admin-text">Main Admin</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endwhile; ?> </tbody>
                    </table>
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