<?php
session_start();
require_once 'database.php';

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Retrieve the user ID from the database using the email stored in the session
$userEmail = $_SESSION['email'];
$getUserIdQuery = "SELECT user_id FROM users WHERE email = ?";
$stmt = $conn->prepare($getUserIdQuery);
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user ID was found
if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
    $userId = $userData['user_id'];

    // Proceed with inserting the review
    if (isset($_POST['submit_review'])) {
        // Get form data
        $reviewText = $_POST['review'];
        $tourId = $_POST['tour_id'];
        $destinationName = $_POST['tour_name'];
        $rating = $_POST['rating']; // Assuming you have added a rating input field to the form

        // Insert review into database
        $insertReviewQuery = "INSERT INTO reviews (user_id, tour_id, destination_name, rating, review_text) VALUES (?, ?, ?, ?, ?)";
        $insertReviewStmt = $conn->prepare($insertReviewQuery);
        $insertReviewStmt->bind_param("iisis", $userId, $tourId, $destinationName, $rating, $reviewText);
        $insertReviewStmt->execute();

        // Redirect back to profile page after submission
        header("Location: loginpage.php");
        exit();
    }
} else {
    // Handle case where user ID is not found for the given email
    echo "User ID not found for email: $userEmail";
}
