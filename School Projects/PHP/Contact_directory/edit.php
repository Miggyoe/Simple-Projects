<?php

include "config.php";
$id = $_GET['id']; 
$query = mysqli_query($conn, "SELECT * FROM contact WHERE id = $id");
$contact = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel = "stylesheet" href = "style.css"/>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
           <h1>Edit User</h1> 
           <form method="POST" action="action.php?id=<?=$id?>">
                <input type="text" name="lastname" placeholder="Last Name" value="<?= $contact['lastname']?>" required>
                <input type="text" name="firstname" placeholder="First Name" value="<?= $contact['firstname']?>" required>
                <textarea name="address" placeholder="Address" required><?= $contact['address']?></textarea>
                <input type="text" name="phonenumber" placeholder="Phone Number" value="<?= $contact['phonenumber']?>" required>
                <input type="text" name="photourl" placeholder="Photo URL" value="<?= $contact['photourl']?>" required>
                <div class="btn-box">
                    <button type="submit" class="btn" name="update">Update</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>