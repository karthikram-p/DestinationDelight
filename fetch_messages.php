<?php
require_once "database.php";
session_start();
// Get the selected user ID from the URL parameter
$selected_user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if ($selected_user_id) {
    $admin_id = $_SESSION['admin_id'];

    // Fetch messages from the database
    $stmt = $conn->prepare("SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY timestamp ASC");
    $stmt->bind_param("iiii", $admin_id, $selected_user_id, $selected_user_id, $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Output the fetched messages in the desired format
    while ($row = $result->fetch_assoc()) {
        echo '<div class="message ' . ($row['sender_id'] == $_SESSION['admin_id'] ? 'admin-message' : 'user-message') . '">';
        echo '<strong>' . ($row['sender_id'] == $_SESSION['admin_id'] ? 'Admin' : 'User') . ':</strong>';
        echo $row['message_content'];
        echo '</div>';
    }
}

$conn->close();