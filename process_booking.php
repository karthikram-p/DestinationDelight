<?php
session_start();
require "database.php";

// Get form data
$destination = $_POST['location'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$rooms = $_POST['rooms'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$travel_type = $_POST['travel_type'];
$trip_type = $_POST['trip_type'];

// Get user_id from session
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$user_id = $row['user_id'];
$stmt->close();

// Date validation
$today = date('Y-m-d');

// Convert check-in and check-out dates to timestamp
$check_in_timestamp = strtotime($check_in);
$check_out_timestamp = strtotime($check_out);

if (($check_in_timestamp > strtotime($today)) && ($check_out_timestamp > $check_in_timestamp)) {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO reservations (user_id, destination, check_in, check_out, rooms, adults, children, travel_type, trip_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "isssiiiss",
        $user_id,
        $destination,
        $check_in,
        $check_out,
        $rooms,
        $adults,
        $children,
        $travel_type,
        $trip_type
    );

    // Execute the statement
    if ($stmt->execute()) {
        $message = "New booking recorded successfully, we will contact you soon...";
    } else {
        $message = "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    $message = "Invalid date selection";
}

// Close the connection
$conn->close();

echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = 'destinations_afterlogin.php';
</script>";
