<?php
require_once 'database.php';

// Get the destination from the URL parameter
$destination = isset($_GET['destination']) ? $_GET['destination'] : '';

// Fetch reviews for the selected destination from the database
$query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $destination);
$stmt->execute();
$reviews = $stmt->get_result();
