<?php

require "database.php";

// Fetch all tours
$result = $conn->query("SELECT * FROM tours");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Tours</title>
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
    <div class="container mt-5">
        <h2>Manage Tours</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tour ID</th>
                    <th>User ID</th>
                    <th>Tour Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Completed</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['tour_id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['tour_name']; ?></td>
                        <td><?php echo $row['tour_description']; ?></td>
                        <td><?php echo $row['tour_date']; ?></td>
                        <td><?php echo $row['completed'] == 1 ? 'Yes' : 'No'; ?></td>
                        <td>
                            <?php if ($row['completed'] == 0): ?>
                                <form action="tour_handler.php" method="post">
                                    <input type="hidden" name="tour_id" value="<?php echo $row['tour_id']; ?>">
                                    <button type="submit" class="btn btn-primary">Mark as Completed</button>
                                </form>
                            <?php else: ?>
                                <button type="button" class="btn btn-secondary" disabled>completed</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>