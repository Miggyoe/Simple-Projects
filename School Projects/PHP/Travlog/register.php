<?php
session_start();
$error = $_SESSION['register_error'] ?? '';
session_unset(); 

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Travlog</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

    <div class="login-wrapper">
        <div class="form-box">
            <?php echo showError($error); ?>
            <form method="POST" action="login_register.php">
                <h2 class="header">Register to <p id="travlog">Travlog</p></h2>
                
                <div class="form-group">
                    <input type="text" id="username" name="username" required placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" required placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="text" id="name" name="name" required placeholder="Name">
                </div>

                <div class="form-group">
                    <input type="text" id="email" name="email" required placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="tel" id="contact" name="contact_no" required placeholder="Contact Number">
                </div>

                <button type="submit" class="btn-submit-login" name="register">Register?</button>
            </form>

            <div class="divider"><span>Already have an account?</span></div>

            <a href="login.php" class="btn-signup-redirect">Login</a>
        </div>
    </div>

</body>
</html>