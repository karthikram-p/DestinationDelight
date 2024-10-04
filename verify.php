<?php
$servername = "localhost";
$username = "root";
$db_password = "";
$database = "destinationdelight";
$conn = new mysqli($servername, $username, $db_password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $stmt = $conn->prepare("SELECT email FROM verification_tokens WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        $updateStmt = $conn->prepare("UPDATE users SET is_verified = 1 WHERE email = ?");
        $updateStmt->bind_param("s", $email);
        $updateStmt->execute();

        $deleteStmt = $conn->prepare("DELETE FROM verification_tokens WHERE token = ?");
        $deleteStmt->bind_param("s", $token);
        $deleteStmt->execute();

        echo "<script>alert('Email verified successfully.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Invalid verification token.'); window.location.href = 'signup.php';</script>";
    }
} else {
    echo "<script>alert('No verification token provided.'); window.location.href = 'signup.php';</script>";
}

$conn->close();