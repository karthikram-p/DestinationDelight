<?php
session_start();
require_once 'database.php';

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Retrieve the user's email from the session
$userEmail = $_SESSION['email'];

// Retrieve user information including the profile picture filename from the database
$query = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$userResult = $stmt->get_result();
$userRow = $userResult->fetch_assoc();

$updateQuery = "UPDATE users SET online_status = 1 WHERE email = ?";
$updateStmt = $conn->prepare($updateQuery);
$updateStmt->bind_param("s", $userEmail);
$updateStmt->execute();

// Handle form submission to update profile
if (isset($_POST['update_profile'])) {
    // Get form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phoneNumber = $_POST['phone'];

    // Update profile information in the database
    $updateQuery = "UPDATE users SET first_name = ?, last_name = ?, phone_number = ? WHERE email = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param("ssss", $firstName, $lastName, $phoneNumber, $userEmail);
    $updateStmt->execute();

    // Update user session data
    $_SESSION['first_name'] = $firstName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['phone_number'] = $phoneNumber;
}

// Handle form submission to update profile
if (isset($_POST['update_profile'])) {
    // Get form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phoneNumber = $_POST['phone'];

    // Update profile information in the database
    $updateQuery = "UPDATE users SET first_name = ?, last_name = ?, phone_number = ? WHERE email = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param("ssss", $firstName, $lastName, $phoneNumber, $userEmail);
    $updateStmt->execute();

    // Update user session data
    $_SESSION['first_name'] = $firstName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['phone_number'] = $phoneNumber;
}

// Handle form submission
if (isset($_POST['submit_review'])) {
    // Get form data
    $reviewText = $_POST['review'];
    $tourId = $_POST['tour_id'];
    // Insert review into database
    $insertReviewQuery = "INSERT INTO reviews (user_id, tour_id, review_text) VALUES (?, ?, ?)";
    $insertReviewStmt = $conn->prepare($insertReviewQuery);
    $insertReviewStmt->bind_param("iss", $userRow['user_id'], $tourId, $reviewText);
    $insertReviewStmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Destination Delight</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            margin-top: 20px;
            color: #9b9ca1;
        }

        .bg-secondary-soft {
            background-color: rgba(208, 212, 217, 0.1) !important;
        }

        .rounded {
            border-radius: 5px !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .file-upload .square {
            height: 150px;
            width: 150px;
            margin: auto;
            position: relative;
            /* Ensure positioning works */
            border: 1px solid #e5dfe4;
            background-color: #fff;
            border-radius: 5px;
        }

        /* Center the icon */
        .file-upload .square i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Center the icon */
            color: #888;
            /* Adjust icon color if needed */
        }


        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(208, 212, 217, 0.5) !important;
        }

        .btn-success-soft {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
        }

        .btn-danger-soft {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.6;
            color: #29292e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e5dfe4;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 5px;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
        }

        .rating .star {
            display: inline-block;
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }
    </style>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/profile1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; background-color: grey; font-family: 'Poppins', sans-serif !important;">
    <?php require 'components/_nav_afterlogin.php'; ?>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h3
                    style="color: white; font-weight: 700; text-shadow: 3px 3px black; margin-top: 75px; margin-bottom: 40px;">
                    <img src="images/profile.png" alt="Camera"
                        style="width: 40px; height: 40px; margin-right: 10px; margin-bottom: 5px;">
                    PROFILE
                </h3>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-dark section-btn" id="mybutton" data-section="profile">My
                        Profile</button>
                    <button type="button" class="btn btn-dark section-btn" data-section="reviews">My Reviews</button>
                    <button type="button" class="btn btn-dark section-btn" data-section="tours">My Tours</button>
                    <button type="button" class="btn btn-dark section-btn" data-section="pending">Pending
                        Tours</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Page title -->
                <div class="section-container">
                    <div class="section-content" data-section="profile">
                        <!-- Form START -->
                        <form method="post" class="bg-light px-4 py-5 rounded">
                            <div class="row g-3">
                                <!-- First Name -->
                                <div class="col-md-6">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" class="form-control" name="first_name"
                                        value="<?php echo $userRow['first_name']; ?>" readonly>
                                </div>
                                <!-- Last Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" name="last_name"
                                        value="<?php echo $userRow['last_name']; ?>" readonly>
                                </div>
                                <!-- Email (readonly) -->
                                <div class="col-md-6">
                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control" value="<?php echo $userRow['email']; ?>"
                                        readonly>
                                </div>
                                <!-- Phone Number -->
                                <div class="col-md-6">
                                    <label class="form-label">Phone/WhatsApp Number *</label>
                                    <?php if (isset($_SESSION['edit_phone']) && $_SESSION['edit_phone'] === true) { ?>
                                        <input type="tel" class="form-control" name="phone"
                                            value="<?php echo isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : ''; ?>"
                                            required>
                                    <?php } else { ?>
                                        <input type="tel" class="form-control"
                                            value="<?php echo isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : ''; ?>"
                                            readonly>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="mt-3">
                                <?php if (isset($_SESSION['edit_phone']) && $_SESSION['edit_phone'] === true) { ?>
                                    <button type="submit" class="btn btn-dark" name="update_profile">Update
                                        Profile</button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-primary" onclick="enablePhoneEdit()">Edit
                                        Profile</button>
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reviews Section -->
        <div class="section-content d-none" data-section="reviews">
            <div class="row">
                <!-- Iterate over reviews and display them -->
                <?php
                // Assuming you have a table named 'reviews' with columns 'tour_id' and 'review'
                // Fetch reviews given by the user from the database
                $reviewsQuery = "SELECT r.tour_id, r.review_text, t.tour_name FROM reviews r INNER JOIN tours t ON r.tour_id = t.tour_id WHERE r.user_id = ?";
                $stmt = $conn->prepare($reviewsQuery);
                $stmt->bind_param("s", $userRow['user_id']); // Assuming 'id' is the primary key of the users table
                $stmt->execute();
                $reviewsResult = $stmt->get_result();

                if ($reviewsResult->num_rows > 0) {
                    while ($review = $reviewsResult->fetch_assoc()) {
                        // Display each review
                        echo "<div class='col-md-6' style='color: black;'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title' style='color: black; font-weight: 700;'>Destination: " . $review['tour_name'] . "<img src='images/review.png' alt='Camera'
                        style='width: 20px; height: 20px; margin-left: 230px; margin-bottom: 5px;'></h5>";
                        echo "<hr>";
                        echo "<p class='card-text'>" . $review['review_text'] . "</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    // No reviews message
                    echo "<div class='col-md-12'>";
                    echo "<p style='font-weight: 700; color: white; text-shadow: 2px 2px black;'>You have not written any reviews yet.</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <!-- My Tours Section -->
        <div class="section-content d-none" data-section="tours">
            <div class="row">
                <!-- Iterate over tours booked by the user and display them -->
                <?php
                // Fetch user ID using the email stored in the session
                $getUserIDQuery = "SELECT user_id FROM users WHERE email = ?";
                $getUserIDStmt = $conn->prepare($getUserIDQuery);
                $getUserIDStmt->bind_param("s", $_SESSION['email']);
                $getUserIDStmt->execute();
                $userIDResult = $getUserIDStmt->get_result();
                $userIDRow = $userIDResult->fetch_assoc();
                $userID = $userIDRow['user_id'];

                // Fetch tours booked by the user using the retrieved user ID
                $toursQuery = "SELECT * FROM tours WHERE user_id = ? AND completed = 1";
                $stmt = $conn->prepare($toursQuery);
                $stmt->bind_param("i", $userID);
                $stmt->execute();
                $toursResult = $stmt->get_result();

                if ($toursResult->num_rows > 0) {
                    while ($tour = $toursResult->fetch_assoc()) {
                        // Check if the user has already reviewed this tour
                        $reviewCheckQuery = "SELECT * FROM reviews WHERE user_id = ? AND tour_id = ?";
                        $reviewCheckStmt = $conn->prepare($reviewCheckQuery);
                        $reviewCheckStmt->bind_param("ii", $userID, $tour['tour_id']);
                        $reviewCheckStmt->execute();
                        $reviewCheckResult = $reviewCheckStmt->get_result();

                        // Display each tour
                        echo "<div class='col-md-6' style='color: black;'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-text' style='font-weight: 700;'>Tour Name: " . $tour['tour_name'] . "<img src='images/tour.png' alt='Camera'
                        style='width: 20px; height: 20px; margin-left: 230px; margin-bottom: 5px;'></h5>";
                        echo "<hr>";
                        // If the user has not reviewed this tour, display the review form
                        if ($reviewCheckResult->num_rows == 0) {
                            echo "<form method='post' action='submit_review.php'>";
                            echo "<div class='form-group'>";
                            echo "<label for='rating'>Rating:</label>";
                            echo "<div class='rating'>";
                            echo "<input type='hidden' name='rating' id='rating' value='0' required>";
                            echo "<span class='star' data-value='1'>&#9733;</span>";
                            echo "<span class='star' data-value='2'>&#9733;</span>";
                            echo "<span class='star' data-value='3'>&#9733;</span>";
                            echo "<span class='star' data-value='4'>&#9733;</span>";
                            echo "<span class='star' data-value='5'>&#9733;</span>";
                            echo "</div>";
                            echo "</div>";

                            echo "<div class='form-group'>";
                            echo "<label for='review'>Review:</label>";
                            echo "<textarea class='form-control' name='review' id='review' rows='3' placeholder='Write your review'></textarea>";
                            echo "</div>";
                            // Hidden input to store tour ID and tour name
                            echo "<input type='hidden' name='tour_id' value='" . $tour['tour_id'] . "'>";
                            echo "<input type='hidden' name='tour_name' value='" . $tour['tour_name'] . "'>";
                            // Submit button
                            echo "<button type='submit' class='btn btn-dark' name='submit_review'>Submit Review</button>";
                            echo "</form>";
                        } else {
                            echo "<p>You have already reviewed this tour.</p>";
                        }

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    // No tours message
                    echo "<div class='col-md-12'>";
                    echo "<p style='font-weight: 700; color: white; text-shadow: 2px 2px black;'>You have not booked any tours yet.</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <!-- Pending Tours Section -->
        <div class="section-content d-none" data-section="pending">
            <div class="row">
                <?php
                // Fetch pending tours booked by the user from the database
                $pendingToursQuery = "SELECT * FROM tours WHERE user_id = ? AND completed = 0";
                $stmt = $conn->prepare($pendingToursQuery);
                $stmt->bind_param("s", $userRow['user_id']);
                $stmt->execute();
                $pendingToursResult = $stmt->get_result();

                if ($pendingToursResult->num_rows > 0) {
                    while ($tour = $pendingToursResult->fetch_assoc()) {
                        // Display each pending tour
                        echo "<div class='col-md-6' style='color: black;'>";
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-text' style='font-weight: 700;'>Tour Name: " . $tour['tour_name'] . "<img src='images/pending.png' alt='Camera'
                        style='width: 20px; height: 20px; margin-left: 230px; margin-bottom: 5px;'></h5>";
                        echo "<p class='card-text'>Tour Date: " . $tour['tour_date'] . "</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    // If no pending tours, display a message
                    echo "<div class='col-md-12'>";
                    echo "<p style='font-weight: 700; color: white; text-shadow: 2px 2px black;'>No pending tours.</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
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
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function enablePhoneEdit() {
            var phoneInput = document.querySelector('input[name="phone"]');
            phoneInput.removeAttribute('readonly');
            <?php $_SESSION['edit_phone'] = true; ?>
        }
    </script>
    <script>
        // Get all section contents
        const sectionContents = document.querySelectorAll('.section-content');

        // Hide all section contents initially
        sectionContents.forEach(content => {
            content.classList.add('d-none');
        });

        // Add a click event listener to the section buttons
        const sectionButtons = document.querySelectorAll('.section-btn');
        sectionButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Hide all section contents
                sectionContents.forEach(content => {
                    content.classList.add('d-none');
                });

                // Show the selected section content
                const selectedSection = btn.dataset.section;
                const selectedContent = document.querySelector(`.section-content[data-section="${selectedSection}"]`);
                selectedContent.classList.remove('d-none');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            // Show the "My Profile" section by default
            $('.section-content').hide(); // Hide all sections
            $('.section-content[data-section="profile"]').show(); // Show the "My Profile" section

            // Add active class to the "My Profile" button by default
            $('.section-btn[data-section="profile"]').addClass('active');

            // Handle button clicks
            $('.section-btn').click(function () {
                // Remove active class from all buttons
                $('.section-btn').removeClass('active');

                // Add active class to the clicked button
                $(this).addClass('active');

                // Get the section to be shown
                var section = $(this).data('section');

                // Hide all sections
                $('.section-content').hide();

                // Show the selected section
                $('.section-content[data-section="' + section + '"]').show();
            });
        });
        document.addEventListener("DOMContentLoaded", function (event) {
            document.getElementById("mybutton").click();
        });
    </script>
    <script>
        const stars = document.querySelectorAll('.star');
        stars.forEach(star => {
            star.addEventListener('click', function () {
                const value = parseInt(this.getAttribute('data-value'));
                document.getElementById('rating').value = value;
                highlightStars(value);
            });
        });

        function highlightStars(value) {
            stars.forEach(star => {
                const starValue = parseInt(star.getAttribute('data-value'));
                if (starValue > value) {
                    star.style.color = '#ccc';
                } else {
                    star.style.color = '#ffc107';
                }
            });
        }
    </script>

</body>

</html>