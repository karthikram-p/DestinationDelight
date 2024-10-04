<?php
session_start();
require_once "database.php";

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Admin';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Destination Delight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    </style>
</head>

<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?></h1>
    <div class="navbar">
        <a href="?page=users">Users</a>
        <a href="?page=destinations">Destinations</a>
        <a href="?page=tours">Tours</a>
        <a href="?page=reviews">Reviews</a>
        <a href="?page=password_resets">Password Resets</a>
        <a href="?page=reservations">Reservations</a>
        <a href="?page=chat">Chat</a>
        <a href="?page=prices">Prices</a>
        <a href="admin_logout.php" class="logout-btn">Logout</a>
    </div>
    <div class="container">

        <?php
        // Determine which page to show based on the query parameter
        $page = isset($_GET['page']) ? $_GET['page'] : 'users';

        // Include the appropriate table management page
        switch ($page) {
            case 'users':
                require 'admin_manage_users.php';
                break;
            case 'destinations':
                require 'admin_manage_destinations.php';
                break;
            case 'tours':
                require 'admin_manage_tours.php';
                break;
            case 'reviews':
                require 'admin_manage_reviews.php';
                break;
            case 'password_resets':
                require 'admin_manage_password_resets.php';
                break;
            case 'reservations':
                require 'admin_manage_reservations.php';
                break;
            case 'chat':
                require 'admin_chat.php';
                break;
            case 'prices':
                require 'admin_manage_prices.php';
                break;
            default:
                echo "<p>Page not found.</p>";
                break;
        }
        ?>
    </div>
</body>

</html>