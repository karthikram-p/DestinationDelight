<?php

require "database.php";

// Fetch all reviews
$result = $conn->query("SELECT * FROM reviews");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Reviews</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Manage Reviews</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Review ID</th>
                    <th>User ID</th>
                    <th>Destination Name</th>
                    <th>Review Text</th>
                    <th>Rating</th>
                    <th>Created At</th>
                    <th>Tour ID</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['review_id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['destination_name']; ?></td>
                        <td><?php echo $row['review_text']; ?></td>
                        <td><?php echo $row['rating']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['tour_id']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>