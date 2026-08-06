<?php
session_start();
require_once 'config.php';

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$success_msg = "";
$error_msg = "";

// Handle Profile Update Request
if (isset($_POST['update_profile'])) {
    $new_username = trim($_POST['username']);
    $new_name = trim($_POST['name']);
    $new_email = trim($_POST['email']);
    $new_contact = trim($_POST['contact_no']);

    if (!empty($new_username) && !empty($new_name) && !empty($new_email) && !empty($new_contact)) {
        // Securely update user details including contact number
        $stmt = $conn->prepare("UPDATE users SET username = ?, name = ?, email = ?, contact_no = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $new_username, $new_name, $new_email, $new_contact, $user_id);
        
        if ($stmt->execute()) {
            // Refresh session variables with new data
            $_SESSION['username'] = $new_username;
            $_SESSION['name'] = $new_name;
            $success_msg = "Profile updated successfully!";
        } else {
            $error_msg = "Something went wrong. Username or Email might already be taken.";
        }
        $stmt->close();
    } else {
        $error_msg = "All fields are required.";
    }
}

// Fetch fresh user data from database to display (including contact_no)
$stmt = $conn->prepare("SELECT username, name, email, contact_no, role FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// FIX: Check if the user record actually exists in the database
if ($result->num_rows === 0) {
    $stmt->close();
    session_destroy(); // Destroy stale session
    header("Location: login.php?error=account_deleted");
    exit();
}

$user = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Travlog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #2b765d;
            background-image: linear-gradient(rgba(34, 105, 82, 0.75), rgba(6, 17, 14, 0.75)), url('icons/bg-travel.png');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            color: #333;
        }

        .profile-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .profile-card {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
            box-sizing: border-box;
        }

        .role-badge {
            display: inline-block;
            background: #e3f2fd;
            color: #0d47a1;
            font-size: 12px;
            font-weight: bold;
            padding: 4px 12px;
            border-radius: 12px;
            text-transform: uppercase;
            margin-bottom: 25px;
            margin-top: 10px;
        }

        /* Form Controls */
        .pfp-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .pfp-group label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: #666;
            margin-bottom: 6px;
        }

        .pfp-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            background: #f9f9f9;
            transition: all 0.2s;
        }

        .pfp-group input:focus {
            border-color: #2b765d;
            background: white;
            outline: none;
        }

        /* View Mode Text elements style fallback */
        .pfp-value {
            font-size: 16px;
            font-weight: 600;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            margin: 0;
            color: #111;
        }

        .alert {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 14px;
        }
        .alert-success { background: #d4edda; color: #155724; }
        .alert-error { background: #ffebee; color: #c62828; }

        .btn-profile {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: background 0.2s;
            margin-top: 10px;
        }

        .btn-edit { background: #2b765d; color: white; }
        .btn-edit:hover { background: #1f5443; }
        .btn-save { background: #3DB489; color: white; display: none; }
        .btn-save:hover { background: #2ca077; }
        .btn-cancel { background: #e0e0e0; color: #333; display: none; margin-top: 8px; text-decoration: none; text-align: center; line-height: 40px; height: 40px; padding: 0;}
        .btn-cancel:hover { background: #d5d5d5; }
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

    <div class="profile-container">
        <div class="profile-card">
            
            <span class="role-badge"><?php echo htmlspecialchars($user['role'] ?? 'USER'); ?> Profile</span>

            <?php if(!empty($success_msg)): ?>
                <div class="alert alert-success"><?php echo $success_msg; ?></div>
            <?php endif; ?>
            <?php if(!empty($error_msg)): ?>
                <div class="alert alert-error"><?php echo $error_msg; ?></div>
            <?php endif; ?>

            <form id="profileForm" method="POST" action="profile.php">
                
                <div class="pfp-group">
                    <label>Username</label>
                    <p class="pfp-value" id="view-username"><?php echo htmlspecialchars($user['username'] ?? ''); ?></p>
                    <input type="text" name="username" id="edit-username" value="<?php echo htmlspecialchars($user['username'] ?? ''); ?>" style="display:none;" required>
                </div>

                <div class="pfp-group">
                    <label>Full Name</label>
                    <p class="pfp-value" id="view-name"><?php echo htmlspecialchars($user['name'] ?? ''); ?></p>
                    <input type="text" name="name" id="edit-name" value="<?php echo htmlspecialchars($user['name'] ?? ''); ?>" style="display:none;" required>
                </div>

                <div class="pfp-group">
                    <label>Email Address</label>
                    <p class="pfp-value" id="view-email"><?php echo htmlspecialchars($user['email'] ?? ''); ?></p>
                    <input type="email" name="email" id="edit-email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" style="display:none;" required>
                </div>

                <div class="pfp-group">
                    <label>Contact Number</label>
                    <p class="pfp-value" id="view-contact"><?php echo htmlspecialchars($user['contact_no'] ?? ''); ?></p>
                    <input type="text" name="contact_no" id="edit-contact" value="<?php echo htmlspecialchars($user['contact_no'] ?? ''); ?>" style="display:none;" placeholder="e.g., 09123456789" required>
                </div>

                <button type="button" id="editBtn" class="btn-profile btn-edit" onclick="toggleEditMode(true)">Edit Profile</button>
                <button type="submit" name="update_profile" id="saveBtn" class="btn-profile btn-save">Save Changes</button>
                <button type="button" id="cancelBtn" class="btn-profile btn-cancel" onclick="toggleEditMode(false)">Cancel</button>
            </form>

        </div>
    </div>

    <footer>
        <div class="footer-1">
            <img src="https://cdn-icons-png.flaticon.com/128/701/701348.png" alt="">
            <div class="footer-text">
                <p><strong>Hotel Included</strong></p>
                <p>Comfortable accommodations</p>
            </div>
        </div>
         <div class="footer-2">
            <img src="https://cdn-icons-png.flaticon.com/128/9482/9482066.png" alt="">
            <div class="footer-text">
                <p><strong>Roundtrip Airfare</strong></p>
                <p>All packages include flights</p>
            </div>
        </div>
         <div class="footer-3">
            <img src="https://cdn-icons-png.flaticon.com/128/2370/2370264.png" alt="">
            <div class="footer-text">
                <p><strong>Complete Itinerary</strong></p>
                <p>Planned tours and activities</p>
            </div>
        </div>
         <div class="footer-4">
            <img src="https://cdn-icons-png.flaticon.com/128/18502/18502262.png" alt="">
            <div class="footer-text">
                <p><strong>Secure Booking</strong></p>
                <p>Safe and hassle free</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleEditMode(isEditing) {
            const views = ['view-username', 'view-name', 'view-email', 'view-contact'];
            const inputs = ['edit-username', 'edit-name', 'edit-email', 'edit-contact'];

            views.forEach(id => {
                const el = document.getElementById(id);
                if(el) el.style.display = isEditing ? 'none' : 'block';
            });
            inputs.forEach(id => {
                const el = document.getElementById(id);
                if(el) el.style.display = isEditing ? 'block' : 'none';
            });

            document.getElementById('editBtn').style.display = isEditing ? 'none' : 'block';
            document.getElementById('saveBtn').style.display = isEditing ? 'block' : 'none';
            document.getElementById('cancelBtn').style.display = isEditing ? 'block' : 'none';
        }
    </script>
</body>
</html>