<?php
// Start the session
session_start();
require_once 'database.php';
$updateQuery = "UPDATE users SET online_status = 0 WHERE email = ?";
$updateStmt = $conn->prepare($updateQuery);
$updateStmt->bind_param("s", $_SESSION['email']); // Use "s" for string type
$updateStmt->execute();
// Unset all of the session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the welcome page
header("Location: welcome.php");
exit();