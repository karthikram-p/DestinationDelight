<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

require "database.php";

// Handle new destination submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $video_url = $_POST['video_url'];
    $ratings = $_POST['ratings'];
    $reviews_total = $_POST['reviews_total'];
    $reviews_link = $_POST['reviews_link'];
    $blogs_link = $_POST['blogs_link'];
    $maps_link = $_POST['maps_link'];

    $stmt = $conn->prepare("INSERT INTO destinations (name, description, video_url, ratings, reviews_total, reviews_link, blogs_link, maps_link) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiisss", $name, $description, $video_url, $ratings, $reviews_total, $reviews_link, $blogs_link, $maps_link);

    if ($stmt->execute()) {
        echo "<script>alert('New destination added successfully!'); window.location.href = 'admin_dashboard.php?page=destinations';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
