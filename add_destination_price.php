<?php
// Include the database connection file
require_once "database.php";

// Handle form submission for adding destination prices
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = $_POST['destination'];
    $min_price = $_POST['min_price'];
    $avg_price = $_POST['avg_price'];
    $max_price = $_POST['max_price'];
    $hotel_price = $_POST['hotel_price'];
    $guide_price = $_POST['guide_price'];
    $one_way_price = $_POST['one_way_price'];
    $round_trip_price = $_POST['round_trip_price'];

    // Prepare and execute the SQL statement to insert the new destination price into the database
    $stmt = $conn->prepare("INSERT INTO destination_prices (destination, min_price, avg_price, max_price, hotel_price, guide_price, one_way_price, round_trip_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siiiiiii", $destination, $min_price, $avg_price, $max_price, $hotel_price, $guide_price, $one_way_price, $round_trip_price);
    $stmt->execute();
    $stmt->close();

    // Redirect back to the admin dashboard or any other page as needed
    header('Location: admin_dashboard.php?page=prices');
    exit();
} else {
    // If the form is not submitted via POST method, redirect back to the form page
    header('Location: admin_dashboard.php?page=prices');
    exit();
}