<?php
// Include the database connection file
require_once "database.php";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $id = $_POST['id'];
    $destination = $_POST['destination'];
    $min_price = $_POST['min_price'];
    $avg_price = $_POST['avg_price'];
    $max_price = $_POST['max_price'];
    $hotel_price = $_POST['hotel_price'];
    $guide_price = $_POST['guide_price'];
    $one_way_price = $_POST['one_way_price'];
    $round_trip_price = $_POST['round_trip_price'];

    // Prepare and execute SQL statement to update destination price
    $stmt = $conn->prepare("UPDATE destination_prices SET destination=?, min_price=?, avg_price=?, max_price=?, hotel_price=?, guide_price=?, one_way_price=?, round_trip_price=? WHERE id=?");
    $stmt->bind_param("siiiiiiii", $destination, $min_price, $avg_price, $max_price, $hotel_price, $guide_price, $one_way_price, $round_trip_price, $id);
    $stmt->execute();
    $stmt->close();

    // Redirect to admin dashboard with page=prices parameter
    header('Location: admin_dashboard.php?page=prices');
    exit();
} else {
    // If form is not submitted, redirect back to admin dashboard
    header('Location: admin_dashboard.php');
    exit();
}