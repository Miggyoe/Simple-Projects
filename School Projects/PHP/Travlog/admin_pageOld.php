<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    die("Access Denied. You are not authorized to view this page.");
}

// 1. Delete User
if (isset($_GET['delete_user'])) {
    $id = intval($_GET['delete_user']);
    if ($id != 1) { 
        $conn->query("DELETE FROM users WHERE id = $id");
    }
    header("Location: admin_page.php");
    exit();
}

// 2. Update Order Status
if (isset($_POST['update_status'])) {
    $order_id = intval($_POST['order_id']);
    $new_status = $_POST['status'];
    
    $allowed = ["Ordered", "Organizing", "Unavailable", "Ready"];
    if (in_array($new_status, $allowed)) {
        $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $new_status, $order_id);
        $stmt->execute();
    }
    header("Location: admin_page.php");
    exit();
}

// 3. Delete Order
if (isset($_GET['delete_order'])) {
    $order_id = intval($_GET['delete_order']);
    $conn->query("DELETE FROM orders WHERE id = $order_id");
    header("Location: admin_page.php");
    exit();
}

$users = $conn->query("SELECT id, username, name, email, role FROM users");
$orders = $conn->query("SELECT orders.id, orders.package, orders.quantity, orders.price, orders.status, users.name as customer_name FROM orders JOIN users ON orders.user_id = users.id");
?>

<!DOCTYPE html>
<html>
<head><title>Admin Panel</title></head>
<body style="font-family: Arial; padding: 20px;">
    <h1>System Administrator Dashboard</h1>
    <a href="index.php">Go to Main Site</a> | <a href="logout.php">Logout</a>
    <hr>

    <h2>Manage Users</h2>
    <table border="1" cellpadding="8" style="border-collapse: collapse; width:100%;">
        <tr style="background: #e4e4e4;">
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php while($u = $users->fetch_assoc()): ?>
        <tr>
            <td><?php echo $u['id']; ?></td>
            <td><?php echo htmlspecialchars($u['username']); ?></td>
            <td><?php echo htmlspecialchars($u['name']); ?></td>
            <td><?php echo htmlspecialchars($u['email']); ?></td>
            <td><?php echo $u['role']; ?></td>
            <td>
                <?php if($u['id'] != 1): ?>
                    <a href="admin_page.php?delete_user=<?php echo $u['id']; ?>" onclick="return confirm('Delete user?')">Delete</a>
                <?php else: ?>
                    <em>Main Admin</em>
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <hr>

    <h2>Manage Bookings / Orders</h2>
    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; text-align:left; border-collapse: collapse;">
        <tr style="background-color: #f2f2f2;">
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Package Name</th>         
            <th>Quantity Ordered</th>   
            <th>Price Summary</th>      
            <th>Update Status</th>
            <th>Actions</th>
        </tr>
        <?php while($o = $orders->fetch_assoc()): ?>
        <tr>
            <td><?php echo $o['id']; ?></td>
            <td><?php echo htmlspecialchars($o['customer_name']); ?></td>
            <td><?php echo htmlspecialchars($o['package']); ?></td>
            <td><?php echo $o['quantity']; ?></td>
            <td>
                <?php 
                    $total_price = $o['price'] * $o['quantity']; 
                    echo "₱" . number_format($total_price, 2); 
                ?>
            </td>
            <!-- updated -->
            <td>
                <strong style="color:
                <?php echo ($o['status'] == 'Ready') ? 'green' : (($o['status'] == 'Unavailable') ? 'red' : 'orange'); ?>;">
                <?php echo $o['status']; ?>
                </strong>
                <form method="POST" action="admin_page.php" style="display:inline; margin-left: 10px;">
                    <input type="hidden" name="order_id" value="<?php echo $o['id']; ?>">
                    <select name="status">
                        <option value="Ordered" <?php if($o['status'] == 'Ordered') echo 'selected'; ?>>Ordered</option>
                        <option value="Organizing" <?php if($o['status'] == 'Organizing') echo 'selected'; ?>>Organizing</option>
                        <option value="Unavailable" <?php if($o['status'] == 'Unavailable') echo 'selected'; ?>>Unavailable</option>
                        <option value="Ready" <?php if($o['status'] == 'Ready') echo 'selected'; ?>>Ready</option>
                    </select>
                    <button type="submit" name="update_status">Save</button>
                </form>
            </td>
            <td>
                <a href="admin_page.php?delete_order=<?php echo $o['id']; ?>" onclick="return confirm('Cancel/Delete this order?')" style="color: red; text-decoration: none;">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>