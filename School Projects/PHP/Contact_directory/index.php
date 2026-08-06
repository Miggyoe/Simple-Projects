<?php

include "config.php";
$query = mysqli_query($conn, "SELECT * FROM contact");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Lists</title>
    <link rel = "stylesheet" href = "style.css"/>
</head>
<body>
    <div class="container">
        <h1>Contact Lists</h1>
        <a href = "create.php">Create</a>

        <table>
        <tr>
            <th>No.</th>
            <th>Names</th>
            <th>Actions</th>
        </tr>

        <?php
        $no = 1;
        while ($contact = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $contact['lastname'] . ", " . $contact['firstname']?></td>
            <td>
                <a href="view.php?id=<?= $contact['id'] ?>" class="btn-view">View</a>
                <a href="action.php?id=<?= $contact['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    </div>
    
</body>
</html>