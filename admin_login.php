<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Destination Delight</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: lightsteelblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            /* Increase the width */
        }

        .login-container h2 {
            margin-bottom: 30px;
            /* Increase bottom margin */
            font-weight: 700;
            font-size: 26px;
            /* Increase font size */
            color: #333;
            text-align: center;
        }

        .form-group label {
            font-weight: 500;
            font-size: 16px;
            /* Increase label font size */
        }

        .btn-block {
            background-color: #007bff;
            border-color: #007bff;
            padding: 15px;
            /* Increase button padding */
            font-size: 16px;
            /* Increase button font size */
        }

        .btn-block:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/admin.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin_login_handler.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Login</button>
        </form>
    </div>
</body>

</html>