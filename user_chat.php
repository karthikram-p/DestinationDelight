<?php error_reporting(E_ALL);
session_start();
$userEmail = $_SESSION['email'];
require_once "database.php";

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
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

// Handle sending a message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message_content = $_POST['message'];

    // Insert message into database
    $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message_content, sender_email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $sender_id, $receiver_id, $message_content, $user_email);
    $stmt->execute();
    $stmt->close();
}

// Retrieve messages
$stmt = $conn->prepare("SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY timestamp ASC");
$stmt->bind_param("iiii", $sender_id, $receiver_id, $receiver_id, $sender_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat With Us | Destination Delight</title>
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
        .chat-container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .chat-box {
            height: 400px;
            overflow-y: auto;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .message {
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 70%;
        }

        .user-message {
            background-color: #e6f7ff;
            margin-left: auto;
        }

        .admin-message {
            background-color: #f0f0f0;
            margin-right: auto;
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
        }

        .message-form button {
            margin-left: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/chat.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <?php require 'components/_nav_afterlogin_chatwithus.php'; ?>
    <h5 class="text-center" style="color: white; font-weight: 400; margin-top: 80px; margin-bottom: 10px;">**please post
        your questions we
        will reply within the span
        of an hour</h5>
    <div class="chat-container">
        <div class="chat-box" id="chat-box">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="message <?php echo $row['sender_id'] == $sender_id ? 'user-message' : 'admin-message'; ?>">
                    <strong><?php echo $row['sender_id'] == $sender_id ? 'You' : 'Admin'; ?>:</strong>
                    <?php echo htmlspecialchars($row['message_content']); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <form class="message-form" action="" method="post">
            <input type="hidden" name="admin_id" value="<?php echo $receiver_id; ?>">
            <textarea name="message" rows="3" required></textarea>
            <button class="btn btn-dark" type="submit">Send</button>
        </form>
    </div>

    <footer class="footer" style="background-color: rgba(0,0,0,0.5); padding-top: 30px; margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="footer-col col-xs-12 col-sm-4 col-md-4" style="color: white; text-shadow: 2px 2px black;"
                    id="aboutus">
                    <h4 style="color: white; font-weight: 700; margin-bottom: 30px;">About Us</h4>
                    <p style="color: white;">We are a travel and tourism company dedicated to providing exceptional
                        travel experiences to our customers. Our mission is to make every journey memorable and
                        hassle-free.</p>
                </div>
                <div class="footer-col col-xs-12 col-sm-4 col-md-4" style="color: white; text-shadow: 2px 2px black;"
                    id="contactus">
                    <h4 style="color: white; font-weight: 700; margin-bottom: 30px;">Contact Us</h4>
                    <p style="color: white;">If you have any questions or inquiries, feel free to reach out to us:</p>
                    <ul style="color: white;">
                        <li>Email: destinationdelight@gmail.com</li>
                        <li>Phone: +91 9996663330</li>
                        <li>Address: ABC complex, XYZ street, Hyderabad</li>
                    </ul>
                </div>
                <div class="footer-col col-xs-12 col-sm-4 col-md-4" style="color: white; text-shadow: 2px 2px black;">
                    <h5 style="color: white; font-weight: 700; margin-bottom: 30px;">Quick links</h5>
                    <ul class="list-unstyled quick-links" style="color: white;">
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Destinations</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>About us</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Contact us</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Login/Sign up</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"
                                    style="color: white; text-shadow: 2px 2px black;"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"
                                    style="color: white; text-shadow: 2px 2px black;"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"
                                    style="color: white; text-shadow: 2px 2px black;"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                    class="fa fa-envelope" style="color: white; text-shadow: 2px 2px black;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script
        src="https://www.jqueryscript.net/demo/Customizable-Animated-Dropdown-Plugin-with-jQuery-CSS3-Nice-Select/js/jquery.nice-select.js"></script>
    <script>
        AOS.init({
            duration: 900, // Animation duration
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function fetchUserMessages() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("chat-box").innerHTML = this.responseText;
                    // Scroll to the bottom of the chat box
                    var chatBox = document.getElementById("chat-box");
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            };
            xhttp.open("GET", "fetch_user_messages.php", true);
            xhttp.send();
        }

        // Fetch messages every 2 seconds
        setInterval(fetchUserMessages, 2000);

        // Fetch messages immediately when the page loads
        fetchUserMessages();
    </script>

</body>

</html>
<?php $conn->close(); ?>