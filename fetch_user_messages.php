<?php
session_start();
require_once "database.php";

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    echo "User not logged in";
    exit();
}

// Get user's email from session
$user_email = $_SESSION['email'];

// Fetch sender ID from users table using email
$stmt = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();
$sender_row = $result->fetch_assoc();
$sender_id = $sender_row['user_id'];

// Fetch admin ID directly from the admins table
$admin_email = 'admin@example.com'; // Replace with the actual admin email or another identifier if needed
$stmt = $conn->prepare("SELECT admin_id FROM admins WHERE email = ?");
$stmt->bind_param("s", $admin_email);
$stmt->execute();
$result = $stmt->get_result();
$admin_row = $result->fetch_assoc();
$receiver_id = $admin_row['admin_id'];

// Retrieve messages
$stmt = $conn->prepare("SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY timestamp ASC");
$stmt->bind_param("iiii", $sender_id, $receiver_id, $receiver_id, $sender_id);
$stmt->execute();
$result = $stmt->get_result();

// Display messages
while ($row = $result->fetch_assoc()) {
    echo '<div class="message ' . ($row['sender_id'] == $sender_id ? 'user-message' : 'admin-message') . '">';
    echo '<strong>' . ($row['sender_id'] == $sender_id ? 'You' : 'Admin') . ':</strong> ';
    echo htmlspecialchars($row['message_content']);
    echo '</div>';
}

$stmt->close();
$conn->close();
