<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "destinationdelight";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email is provided in the request
if (isset($_POST['email'])) {
    // Sanitize the email input
    $email = $_POST['email'];

    // Prepare and execute SQL query to check if the email exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Email already exists, return a message
        echo "Email already exists";
    } else {
        // Email doesn't exist, return success message or any other response
        echo "Email does not exist";
    }
} else {
    // If email is not provided in the request, return an error message
    echo "Email not provided";
}

// Close database connection
$stmt->close();
$conn->close();