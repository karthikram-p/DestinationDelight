<?php
error_reporting(E_ALL);
require_once "database.php";

// Fetch users from the users table
$stmt = $conn->prepare("SELECT user_id, email, online_status FROM users");
$stmt->execute();
$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);

// Check if a user is selected
$selected_user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

// Fetch messages if a user is selected
$messages = [];
if ($selected_user_id) {
    $admin_id = $_SESSION['admin_id'];
    $stmt = $conn->prepare("SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY timestamp ASC");
    $stmt->bind_param("iiii", $admin_id, $selected_user_id, $selected_user_id, $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $messages = $result->fetch_all(MYSQLI_ASSOC);
}

// Handle sending a message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sender_id = $_SESSION['admin_id'];
    $receiver_id = $_POST['user_id'];
    $message_content = $_POST['message'];

    // Insert message into database
    $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message_content) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $sender_id, $receiver_id, $message_content);
    $stmt->execute();
    $stmt->close();
}
?>

<!-- HTML for Admin Chat Interface -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Chat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Poppins:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet"
        href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            padding: 20px;
        }

        .logout-btn {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .chat-container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .chat-box {
            height: 300px;
            overflow-y: scroll;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .message {
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
        }

        .user-message {
            background-color: #e6f7ff;
            text-align: right;
        }

        .admin-message {
            background-color: #f0f0f0;
            text-align: left;
        }

        .message-form {
            display: flex;
            margin-top: 10px;
        }

        .message-form textarea {
            flex-grow: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }

        .message-form button {
            margin-left: 10px;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .chat-container {
            max-width: 800px;
            /* Increase the maximum width */
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            /* Increase the border radius for a softer look */
            padding: 20px;
            /* Increase padding for better spacing */
            background-color: #f9f9f9;
            /* Add a light background color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
        }

        .chat-box {
            height: 400px;
            /* Increase the height of the chat box */
            overflow-y: auto;
            /* Add scrollbar when messages overflow */
            padding: 15px;
            border: none;
            /* Remove the border */
            border-radius: 10px;
            background-color: #fff;
            /* Set a white background */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
        }

        .message {
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 20px;
            /* Increase the border radius for a bubble-like appearance */
            max-width: 70%;
            /* Limit the maximum width of messages */
        }

        .user-message {
            background-color: #e6f7ff;
            margin-left: auto;
            /* Align user messages to the right */
        }

        .admin-message {
            background-color: #f0f0f0;
            margin-right: auto;
            /* Align admin messages to the left */
        }

        .message-form {
            display: flex;
            margin-top: 20px;
        }

        .message-form textarea {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            font-size: 16px;
            /* Increase font size for better readability */
        }

        .message-form button {
            margin-left: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            /* Increase font size for better readability */
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Add a smooth transition effect */
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            padding: 20px;
        }

        .logout-btn {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Admin Chat</h2>
    <div class="user-selection">
        <label for="user-select">Select User:</label>
        <select id="user-select" onchange="selectUser(this.value)">
            <option value="">Select a user</option>
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['user_id']; ?>" <?php echo $selected_user_id == $user['user_id'] ? 'selected' : ''; ?>>
                    <?php echo $user['email']; ?>
                    (<?php echo $user['online_status'] ? 'Online' : 'Offline'; ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="chat-container">
        <div class="chat-box" id="chat-box">
            <?php foreach ($messages as $message): ?>
                <div
                    class="message <?php echo $message['sender_id'] == $_SESSION['admin_id'] ? 'admin-message' : 'user-message'; ?>">
                    <strong><?php echo $message['sender_id'] == $_SESSION['admin_id'] ? 'Admin' : 'User'; ?>:</strong>
                    <?php echo $message['message_content']; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <form class="message-form" action="" method="post">
            <input type="hidden" name="user_id" value="<?php echo $selected_user_id; ?>">
            <textarea name="message" id="message" rows="3" required></textarea>
            <button class="btn btn-dark" type="submit">Send</button>
        </form>
    </div>

    <!-- JavaScript for real-time updates using Ajax -->
    <script>
        function selectUser(userId) {
            window.location.href = 'http://localhost/DestinationDelight/admin_dashboard.php?page=chat&user_id=' + userId;
        }

        function fetchMessages() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("chat-box").innerHTML = this.responseText;
                    // Scroll to the bottom of the chat box
                    var chatBox = document.getElementById("chat-box");
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            };
            xhttp.open("GET", "fetch_messages.php?user_id=<?php echo $selected_user_id; ?>", true);
            xhttp.send();
        }

        // Fetch messages every 2 seconds
        setInterval(fetchMessages, 2000);
    </script>
</body>

</html>

<?php $conn->close(); ?>