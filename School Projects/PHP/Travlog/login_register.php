<?php
session_start();
require_once 'config.php';

// --- 1. HANDLE REGISTRATION PROCESS ---
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password']; // Raw password to be safely hashed
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $contact  = trim($_POST['contact_no']); // Captured from the updated form field name
    
    // Explicit security rule: Hardcoded default role
    $default_role = 'user';

    // Basic Input Validation
    if (empty($username) || empty($password) || empty($name) || empty($email) || empty($contact)) {
        $_SESSION['register_error'] = "All registration fields are required.";
        header("Location: register.php");
        exit();
    }

    // Securely check if Username or Email already exists using Prepared Statements
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        $_SESSION['register_error'] = 'Email or Username is already registered!';
        $check_stmt->close();
        header("Location: register.php");
        exit();
    }
    $check_stmt->close();

    // Securely hash the user's password before database entry
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepared Statement for Safe Insertion (including contact_no and default_role)
    $stmt = $conn->prepare("INSERT INTO users (username, password, name, email, contact_no, role) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $hashed_password, $name, $email, $contact, $default_role);

    if ($stmt->execute()) {
        $stmt->close();
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['register_error'] = "An unexpected registry error occurred. Please try again.";
        $stmt->close();
        header("Location: register.php");
        exit();
    }
}

// --- 2. HANDLE LOGIN PROCESS ---
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['login_error'] = "Please fill in all fields.";
        header("Location: login.php");
        exit();
    }

    // Secure database selection using prepared parameter binding
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify typed password against the secure hashed string in the DB
        if (password_verify($password, $user['password'])) {
            // CRITICAL: Store identity records inside the active Session array
            $_SESSION['user_id']  = $user['id']; 
            $_SESSION['name']     = $user['name'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role']     = $user['role'];

            $stmt->close();

            // Route user depending on their specific ID & Role checks
            if ($user['id'] == 1 && $user['role'] === 'admin') {
                header("Location: admin_page.php");
            } else {
                header("Location: index.php"); // Standard customer page
            }
            exit();
        }
    }

    // Fallback error messaging for validation mistargets
    $_SESSION['login_error'] = 'Incorrect username or password';
    if (isset($stmt)) {
        $stmt->close();
    }
    header("Location: login.php");
    exit();
}

// Security fallback to bounce direct URL entry attempts
header("Location: login.php");
exit();
?>