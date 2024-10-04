<?php
require "database.php";

// Get user ID from URL
$user_id = $_GET['id'];

// Fetch user data
$stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Edit User</h2>
        <form action="update_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['user_id']; ?>">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" value="<?php echo $user['first_name']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo $user['last_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" name="gender" id="gender" value="<?php echo $user['gender']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" value="<?php echo $user['phone_number']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="<?php echo $user['password']; ?>" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" id="dob" value="<?php echo $user['dob']; ?>" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" value="<?php echo $user['location']; ?>" required>
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>" required>
            </div>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</body>

</html>