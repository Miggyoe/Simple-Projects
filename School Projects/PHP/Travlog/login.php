<?php

session_start();
$error = $_SESSION['login_error'] ?? '';
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
    <title>Login - Travlog</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>

    <div class="login-wrapper">
        <div class="form-box" id="login-form">
            <?php echo showError($error); ?>
            <form method="POST" action="login_register.php">
                <h2 class="header">Login to <span id="travlog">Travlog</span></h2>
                <div class="form-group">
                    <input type="text" id="username" name="username" required placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" required placeholder="Password">
                </div>

                <button type="submit" class="btn-submit-login" name="login">Log In</button>
            </form>

            <div class="divider"><span>New to Travlog?</span></div>

            <a href="register.php" class="btn-signup-redirect">Create an Account</a>
        </div>
    </div>

</body>
</html>