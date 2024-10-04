<?php
// Database connection
$servername = "localhost";
$username = "root";
$db_password = "";
$database = "destinationdelight";
$conn = new mysqli($servername, $username, $db_password, $database, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the reset token is provided in the URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verify the reset token in the database
    $stmt = $conn->prepare("SELECT * FROM password_resets WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Display the password reset form
        if (isset($_POST['new_password'])) {
            $new_password = $_POST['new_password'];

            // Update the user's password in the database
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt->bind_param("ss", $hashed_password, $email);
            if ($stmt->execute()) {
                // Delete the reset token from the database
                $stmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
                $stmt->bind_param("s", $token);
                $stmt->execute();

                echo "<script>alert('Password reset successful. You can now log in with your new password.'); window.location.href = 'login.php';</script>";
            } else {
                echo "<script>alert('Failed to update password. Please try again.');</script>";
            }
        } else {
            ?>
            <!DOCTYPE html>
            <html>

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
                    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="css/signup.css">
                <link href='http://fonts.googleapis.com/css?family=Poppins:400,300,700' rel='stylesheet' type='text/css'>
                <title>Reset Password | Destination Delight </title>
            </head>

            <body
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/resetbackground.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
                <div class="container d-flex justify-content-center align-items-center vh-100" style="min-height: calc(100vh - 300px);
    padding-top: 100px;">
                    <div class="p-4" style="position: relative;
    width: 500px;
    height: 400px;
    overflow: hidden;
    z-index: 1;
    background: rgba( 211, 226, 253, 0.05 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;">
                        <div class="form-content" style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 20px;">
                            <h1 class="text-center" style="font-weight: 700;">Reset Password</h1>
                            <form id="resetPassword" method="post"
                                action="<?php echo $_SERVER['PHP_SELF'] . '?token=' . $token; ?>">
                                <div class="form-group">
                                    <label for="new_password" style="font-weight: 600;">New Password:</label>
                                    <div class="input-group">
                                        <input type="password" id="new_password" name="new_password" class="form-control"
                                            placeholder="enter new password" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="font-weight: 600;
                                    color: black;">
                                                Show
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="errorMessages" class="text-danger">
                                        <?php if (!empty($errorMessages)): ?>
                                            <?php foreach ($errorMessages as $errorMessage): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $errorMessage; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <br>
                                    <input type="submit" value="Reset Password" class="btn btn-primary" style="font-weight: bold;
                    color: white;
                    padding: 10px 20px;
                    width: 100%;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                    crossorigin="anonymous"></script>
                <script src="https://smtpjs.com/v3/smtp.js"></script>
                <script src="js/resetpassword.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#togglePassword').click(function () {
                            var passwordField = $('#new_password');
                            var passwordFieldType = passwordField.attr('type');
                            if (passwordFieldType === 'password') {
                                passwordField.attr('type', 'text');
                                $(this).text('Hide');
                            } else {
                                passwordField.attr('type', 'password');
                                $(this).text('Show');
                            }
                        });
                    });
                </script>
            </body>

            </html>
            <?php
        }
    } else {
        echo "<script>alert('Invalid or expired reset token. Please request a new password reset.');</script>";
    }
} else {
    echo "<script>alert('Reset token not provided.');</script>";
}
?>