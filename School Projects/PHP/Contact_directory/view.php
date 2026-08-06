<?php

include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM contact WHERE id = $id");
    $contact = mysqli_fetch_assoc($query);

    if (!$contact) {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <link rel = "stylesheet" href = "style.css"/>
</head>
<body>
    <div class="container">
        <h1>Contact Lists</h1>
        <a href = "create.php" class="btn-create">Create</a>
        <a href = "index.php" class="btn-back">Back</a>

        <table>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Photo URL</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td><?=$contact['lastname']?></td>
            <td><?=$contact["firstname"] ?></td>
            <td><?=$contact["address"] ?></td>
            <td><?=$contact["phonenumber"] ?></td>
            <td><?=$contact["photourl"] ?></td>
            <td>
                <a href="edit.php?id=<?= $contact['id'] ?>" class="btn-view">Edit</a>
                <a href="action.php?id=<?= $contact['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
            </td>

        </tr>
    </table>
    </div>
    
</body>
</html>