<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel = "stylesheet" href = "style.css"/>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
           <h1>Create User</h1> 
           <form method="POST" action="action.php">
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="text" name="firstname" placeholder="First Name" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <input type="text" name="phonenumber" placeholder="Phone Number" required>
                <input type="text" name="photourl" placeholder="Photo URL" required>
                <div class="btn-box">
                    <button type="submit" class="btn" name="create">Submit</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>