<?php
require "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservation_id'])) {
    $reservation_id = $_POST['reservation_id'];

    // Update the reservation's confirm status to 1
    $query = "UPDATE reservations SET confirm = 1 WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $reservation_id);

    if ($stmt->execute()) {
        echo "Booking confirmed successfully.";
    } else {
        echo "Error confirming booking: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the reservations page
    header("Location: admin_manage_reservations.php");
    exit();
} else {
    echo "Invalid request.";
}