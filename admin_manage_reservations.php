<?php
require "database.php";

// Fetch all reservations
$query = "SELECT r.*, t.completed FROM reservations r LEFT JOIN tours t ON r.id = t.tour_id";
$result = $conn->query($query);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Reservations</title>
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
        <h2>Manage Reservations</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Rooms</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Travel Type</th>
                    <th>Trip Type</th>
                    <th>Created At</th>
                    <th>User ID</th>
                    <th>Confirm</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['destination']; ?></td>
                        <td><?php echo $row['check_in']; ?></td>
                        <td><?php echo $row['check_out']; ?></td>
                        <td><?php echo $row['rooms']; ?></td>
                        <td><?php echo $row['adults']; ?></td>
                        <td><?php echo $row['children']; ?></td>
                        <td><?php echo $row['travel_type']; ?></td>
                        <td><?php echo $row['trip_type']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['confirm'] == 1 ? 'Confirmed' : 'Not Confirmed'; ?></td>
                        <td>
                            <?php if ($row['confirm'] == 0): ?>
                                <form action="confirm_booking.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="reservation_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-primary" name="confirm_booking">Confirm
                                        Booking</button>
                                </form>
                            <?php else: ?>
                                <button type="button" class="btn btn-secondary" disabled>Already Confirmed</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>